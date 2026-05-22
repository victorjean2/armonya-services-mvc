<?php

require_once ROOT_PATH . '/app/controllers/HomeController.php';
require_once ROOT_PATH . '/app/controllers/PageController.php';
require_once ROOT_PATH . '/app/controllers/ContactController.php';

$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'services':
        $controller = new PageController();
        $controller->show(
            'services',
            'Services à la personne | Armonya Services',
            'Découvrez les prestations de services à la personne proposées par Armonya Services en Île-de-France.',
            'page-services'
        );
        break;

    case 'menage':
        $controller = new PageController();
        $controller->show(
            'menage',
            'Ménage et repassage à domicile | Armonya Services',
            'Armonya Services propose des prestations de ménage et repassage à domicile en Île-de-France.',
            'page-menage'
        );
        break;

    case 'garde-enfants':
        $controller = new PageController();
        $controller->show(
            'garde-enfants',
            'Garde d’enfants de plus de 3 ans | Armonya Services',
            'Service de garde d’enfants de plus de 3 ans à domicile en Île-de-France.',
            'page-garde-enfants'
        );
        break;

    case 'courses':
        $controller = new PageController();
        $controller->show(
            'courses',
            'Aide aux courses et achats du quotidien | Armonya Services',
            'Armonya Services propose une aide aux courses et achats du quotidien en Île-de-France.',
            'page-courses'
        );
        break;

    case 'livraison-repas':
        $controller = new PageController();
        $controller->show(
            'livraison-repas',
            'Livraison de repas à domicile | Armonya Services',
            'Service de livraison de repas à domicile en Île-de-France.',
            'page-livraison-repas'
        );
        break;

    case 'assistance-administrative':
        $controller = new PageController();
        $controller->show(
            'assistance-administrative',
            'Assistance administrative à domicile | Armonya Services',
            'Aide administrative à domicile en Île-de-France : classement, courriers et démarches simples.',
            'page-assistance'
        );
        break;

    case 'conciergerie':
        $controller = new PageController();
        $controller->show(
            'conciergerie',
            'Conciergerie privée | Armonya Services',
            'Conciergerie privée en Île-de-France : organisation pratique, réservation et recherche de prestataires.',
            'page-conciergerie'
        );
        break;

    case 'credit-impot':
        $controller = new PageController();
        $controller->show(
            'credit-impot',
            'Crédit d’impôt | Armonya Services',
            'Informations prudentes sur le crédit d’impôt lié à certaines prestations de services à la personne.',
            'page-credit-impot'
        );
        break;

    case 'recrutement':
        $controller = new PageController();
        $controller->show(
            'recrutement',
            'Recrutement | Armonya Services',
            'Rejoignez Armonya Services comme intervenante à domicile en Île-de-France.',
            'page-recrutement'
        );
        break;

    case 'a-propos':
        $controller = new PageController();
        $controller->show(
            'a-propos',
            'À propos | Armonya Services',
            'Découvrez l’histoire, la mission et les valeurs d’Armonya Services.',
            'page-a-propos'
        );
        break;

    case 'faq':
        $controller = new PageController();
        $controller->show(
            'faq',
            'FAQ | Armonya Services',
            'Questions fréquentes sur les services à domicile, la conciergerie privée et les demandes de devis.',
            'page-faq'
        );
        break;

    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;

    case 'mentions-legales':
        $controller = new PageController();
        $controller->show(
            'mentions-legales',
            'Mentions légales | Armonya Services',
            'Consultez les mentions légales du site Armonya Services.',
            'page-mentions-legales'
        );
        break;

    case 'politique-confidentialite':
        $controller = new PageController();
        $controller->show(
            'politique-confidentialite',
            'Politique de confidentialité | Armonya Services',
            'Consultez la politique de confidentialité du site Armonya Services.',
            'page-confidentialite'
        );
        break;

    case 'gestion-cookies':
        $controller = new PageController();
        $controller->show(
            'gestion-cookies',
            'Gestion des cookies | Armonya Services',
            'Consultez la politique de gestion des cookies du site Armonya Services.',
            'page-cookies'
        );
        break;

    case 'conditions-utilisation':
        $controller = new PageController();
        $controller->show(
            'conditions-utilisation',
            'Conditions d’utilisation | Armonya Services',
            'Consultez les conditions d’utilisation du site Armonya Services.',
            'page-conditions'
        );
        break;

    default:
        $controller = new PageController();
        $controller->show(
            '404',
            'Page introuvable | Armonya Services',
            'La page demandée est introuvable.',
            'page-404'
        );
        break;
}
