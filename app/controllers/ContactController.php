<?php

require_once ROOT_PATH . '/app/helpers/security.php';
require_once ROOT_PATH . '/app/models/Contact.php';
require_once ROOT_PATH . '/app/models/Devis.php';

class ContactController
{
    public function index(): void
    {
        $pageTitle = 'Contact | Armonya Services';
        $metaDescription = 'Contactez Armonya Services pour une demande de devis, une question ou une candidature.';
        $bodyClass = 'page-contact';

        $csrfToken = generateCsrfToken();

        $errors = [];
        $success = '';
        $old = $this->emptyOldValues();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formType = $_POST['form_type'] ?? 'contact';

            $old = [
                'form_type' => $formType,
                'nom' => trim($_POST['nom'] ?? ''),
                'prenom' => trim($_POST['prenom'] ?? ''),
                'email' => trim($_POST['email'] ?? ''),
                'telephone' => trim($_POST['telephone'] ?? ''),
                'sujet' => trim($_POST['sujet'] ?? ''),
                'ville' => trim($_POST['ville'] ?? ''),
                'code_postal' => trim($_POST['code_postal'] ?? ''),
                'service_type' => trim($_POST['service_type'] ?? ''),
                'frequence' => trim($_POST['frequence'] ?? ''),
                'message' => trim($_POST['message'] ?? ''),
            ];

            $rgpd = $_POST['rgpd'] ?? '';

            if (isHoneypotFilled()) {
                $errors[] = 'Une erreur est survenue. Merci de réessayer.';
            }

            if (!verifyCsrfToken($_POST['csrf_token'] ?? null)) {
                $errors[] = 'Le formulaire a expiré. Merci de recharger la page.';
            }

            if (empty($errors)) {
                if ($formType === 'devis') {
                    $this->validateQuoteForm($old, $rgpd, $errors);

                    if (empty($errors)) {
                        $success = $this->handleQuoteForm($old, $errors);

                        if ($success !== '') {
                            $old = $this->emptyOldValues();
                            $csrfToken = generateCsrfToken();
                        }
                    }
                } else {
                    $this->validateContactForm($old, $rgpd, $errors);

                    if (empty($errors)) {
                        $success = $this->handleContactForm($old, $errors);

                        if ($success !== '') {
                            $old = $this->emptyOldValues();
                            $csrfToken = generateCsrfToken();
                        }
                    }
                }
            }
        }

        require VIEW_PATH . '/layouts/header.php';
        require VIEW_PATH . '/pages/contact.php';
        require VIEW_PATH . '/layouts/footer.php';
    }

    private function validateContactForm(array $old, string $rgpd, array &$errors): void
    {
        // Nom facultatif
        if (mb_strlen($old['nom']) > 100) {
            $errors[] = 'Le nom est trop long.';
        }

        // Email facultatif, mais s’il est rempli il doit être valide
        if ($old['email'] !== '' && !filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L’email n’est pas valide.';
        }

        if (mb_strlen($old['email']) > 150) {
            $errors[] = 'L’email est trop long.';
        }

        // Téléphone facultatif
        if (mb_strlen($old['telephone']) > 30) {
            $errors[] = 'Le téléphone est trop long.';
        }

        // Sujet obligatoire
        if ($old['sujet'] === '') {
            $errors[] = 'Le sujet est obligatoire.';
        }

        if (mb_strlen($old['sujet']) > 150) {
            $errors[] = 'Le sujet est trop long.';
        }

        // Message obligatoire
        if ($old['message'] === '') {
            $errors[] = 'Le message est obligatoire.';
        }

        if (mb_strlen($old['message']) > 3000) {
            $errors[] = 'Le message est trop long. Maximum 3000 caractères.';
        }

        // RGPD obligatoire
        if ($rgpd !== '1') {
            $errors[] = 'Vous devez accepter la politique de confidentialité.';
        }
    }

    private function validateQuoteForm(array $old, string $rgpd, array &$errors): void
    {
        if ($old['nom'] === '') {
            $errors[] = 'Le nom est obligatoire.';
        }

        if (mb_strlen($old['nom']) > 100) {
            $errors[] = 'Le nom est trop long.';
        }

        if ($old['prenom'] === '') {
            $errors[] = 'Le prénom est obligatoire.';
        }

        if (mb_strlen($old['prenom']) > 100) {
            $errors[] = 'Le prénom est trop long.';
        }

        if ($old['telephone'] === '') {
            $errors[] = 'Le téléphone est obligatoire.';
        }

        if (mb_strlen($old['telephone']) > 30) {
            $errors[] = 'Le téléphone est trop long.';
        }

        if ($old['email'] === '') {
            $errors[] = 'L’email est obligatoire.';
        } elseif (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'L’email n’est pas valide.';
        }

        if (mb_strlen($old['email']) > 150) {
            $errors[] = 'L’email est trop long.';
        }

        if ($old['ville'] === '') {
            $errors[] = 'La ville est obligatoire.';
        }

        if (mb_strlen($old['ville']) > 100) {
            $errors[] = 'La ville est trop longue.';
        }

        if ($old['code_postal'] === '') {
            $errors[] = 'Le code postal est obligatoire.';
        } elseif (!preg_match('/^[0-9]{5}$/', $old['code_postal'])) {
            $errors[] = 'Le code postal doit contenir 5 chiffres.';
        }

        if ($old['service_type'] === '') {
            $errors[] = 'Le type de service est obligatoire.';
        }

        if (mb_strlen($old['service_type']) > 150) {
            $errors[] = 'Le type de service est trop long.';
        }

        if (mb_strlen($old['frequence']) > 100) {
            $errors[] = 'La fréquence souhaitée est trop longue.';
        }

        if ($old['message'] === '') {
            $errors[] = 'Le message est obligatoire.';
        }

        if (mb_strlen($old['message']) > 3000) {
            $errors[] = 'Le message est trop long. Maximum 3000 caractères.';
        }

        if ($rgpd !== '1') {
            $errors[] = 'Vous devez accepter la politique de confidentialité.';
        }
    }

    private function handleContactForm(array $old, array &$errors): string
    {
        try {
            $contactModel = new Contact();

            $contactModel->create([
                'nom' => $old['nom'] !== '' ? $old['nom'] : null,
                'email' => $old['email'] !== '' ? $old['email'] : null,
                'telephone' => $old['telephone'] !== '' ? $old['telephone'] : null,
                'sujet' => $old['sujet'],
                'message' => $old['message'],
                'rgpd_consent' => 1,
            ]);

            if (!$this->sendContactEmail($old)) {
                $errors[] = 'Le message a été enregistré, mais l’email n’a pas pu être envoyé vers Mailpit.';
                return '';
            }

            return 'Votre message a bien été envoyé. Armonya Services vous répondra dès que possible.';
        } catch (PDOException $e) {
            $errors[] = 'Une erreur est survenue lors de l’enregistrement du message.';
            return '';
        }
    }

    private function handleQuoteForm(array $old, array &$errors): string
    {
        try {
            $devisModel = new Devis();

            $devisModel->create([
                'nom' => $old['nom'],
                'prenom' => $old['prenom'],
                'telephone' => $old['telephone'],
                'email' => $old['email'],
                'ville' => $old['ville'],
                'code_postal' => $old['code_postal'],
                'service_type' => $old['service_type'],
                'frequence' => $old['frequence'] !== '' ? $old['frequence'] : null,
                'message' => $old['message'],
                'rgpd_consent' => 1,
            ]);

            if (!$this->sendQuoteEmail($old)) {
                $errors[] = 'La demande de devis a été enregistrée, mais l’email n’a pas pu être envoyé vers Mailpit.';
                return '';
            }

            return 'Votre demande de devis a bien été envoyée. Armonya Services vous recontactera dès que possible.';
        } catch (PDOException $e) {
            $errors[] = 'Une erreur est survenue lors de l’enregistrement de la demande de devis.';
            return '';
        }
    }

    private function sendContactEmail(array $old): bool
    {
        $to = 'contact@armonya-services.fr';
        $subject = 'Nouveau message depuis le site Armonya Services';

        $emailContent = "Nouveau message reçu depuis le formulaire de contact.\n\n";
        $emailContent .= "Nom : " . ($old['nom'] !== '' ? $old['nom'] : 'Non renseigné') . "\n";
        $emailContent .= "Email : " . ($old['email'] !== '' ? $old['email'] : 'Non renseigné') . "\n";
        $emailContent .= "Téléphone : " . ($old['telephone'] !== '' ? $old['telephone'] : 'Non renseigné') . "\n";
        $emailContent .= "Sujet : " . $old['sujet'] . "\n\n";
        $emailContent .= "Message :\n" . $old['message'] . "\n";

        $headers = "From: contact@armonya-services.fr\r\n";

        if ($old['email'] !== '') {
            $headers .= "Reply-To: " . $old['email'] . "\r\n";
        } else {
            $headers .= "Reply-To: contact@armonya-services.fr\r\n";
        }

        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        return mail($to, $subject, $emailContent, $headers);
    }

    private function sendQuoteEmail(array $old): bool
    {
        $to = 'contact@armonya-services.fr';
        $subject = 'Nouvelle demande de devis - Armonya Services';

        $emailContent = "Nouvelle demande de devis reçue depuis le site.\n\n";
        $emailContent .= "Nom : " . $old['nom'] . "\n";
        $emailContent .= "Prénom : " . $old['prenom'] . "\n";
        $emailContent .= "Téléphone : " . $old['telephone'] . "\n";
        $emailContent .= "Email : " . $old['email'] . "\n";
        $emailContent .= "Ville : " . $old['ville'] . "\n";
        $emailContent .= "Code postal : " . $old['code_postal'] . "\n";
        $emailContent .= "Service demandé : " . $old['service_type'] . "\n";
        $emailContent .= "Fréquence souhaitée : " . ($old['frequence'] !== '' ? $old['frequence'] : 'Non renseignée') . "\n\n";
        $emailContent .= "Message :\n" . $old['message'] . "\n";

        $headers = "From: contact@armonya-services.fr\r\n";
        $headers .= "Reply-To: " . $old['email'] . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        return mail($to, $subject, $emailContent, $headers);
    }

    private function emptyOldValues(): array
    {
        return [
            'form_type' => '',
            'nom' => '',
            'prenom' => '',
            'email' => '',
            'telephone' => '',
            'sujet' => '',
            'ville' => '',
            'code_postal' => '',
            'service_type' => '',
            'frequence' => '',
            'message' => '',
        ];
    }
}