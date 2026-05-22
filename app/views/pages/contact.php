<main>
    <!-- Hero de page -->
    <section class="page-hero" aria-labelledby="contact-title">
        <div class="container">
            <p class="section-label">Contact</p>

            <h1 id="contact-title">Contactez Armonya Services</h1>

            <p>
                Une question, un besoin à domicile ou une demande de devis ?
                Écrivez-nous et nous vous répondrons dans les meilleurs délais.
            </p>
        </div>
    </section>

    <!-- Coordonnées -->
    <section class="section contact-info-section" aria-labelledby="contact-info-title">
        <div class="container">
            <h2 id="contact-info-title">Nos coordonnées</h2>

            <div class="cards-grid three-columns">
                <article class="card contact-card">
                    <h3>Téléphone</h3>
                    <p>
                        <a href="tel:+33778256161">07 78 25 61 61</a>
                    </p>
                </article>

                <article class="card contact-card">
                    <h3>Email</h3>
                    <p>
                        <a href="mailto:contact@armonya-services.fr">contact@armonya-services.fr</a>
                    </p>
                </article>

                <article class="card contact-card">
                    <h3>WhatsApp</h3>
                    <p>
                        <a href="https://wa.me/33778256161" target="_blank" rel="noopener noreferrer">
                            Discuter sur WhatsApp
                        </a>
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Formulaires -->
    <section class="section forms-section" aria-labelledby="forms-title">
        <div class="container">
            <p class="section-label">Formulaires</p>

            <h2 id="forms-title">Envoyer une demande</h2>

            <?php if (!empty($success)): ?>
                <div class="form-success" role="status">
                    <p><?= e($success) ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="form-errors" role="alert">
                    <p>Merci de corriger les éléments suivants :</p>

                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= e($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="forms-grid">
                <!-- Formulaire de contact -->
                <article class="form-card" aria-labelledby="contact-form-title">
                    <h3 id="contact-form-title">Formulaire de contact</h3>

                    <p>
                        Utilisez ce formulaire pour poser une question générale à Armonya Services.
                    </p>

                    <form class="contact-form" action="<?= route('contact') ?>" method="post" novalidate>
                        <input type="hidden" name="form_type" value="contact">
                        <input type="hidden" name="csrf_token" value="<?= e($csrfToken ?? '') ?>">

                        <!-- Honeypot anti-spam -->
                        <div class="hidden-field" aria-hidden="true">
                            <label for="website-contact">Site internet</label>
                            <input
                                type="text"
                                id="website-contact"
                                name="website"
                                tabindex="-1"
                                autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="contact-nom">Nom</label>
                            <input
                                type="text"
                                id="contact-nom"
                                name="nom"
                                value="<?= e(($old['form_type'] ?? '') === 'contact' ? ($old['nom'] ?? '') : '') ?>"
                                autocomplete="family-name">
                        </div>

                        <div class="form-group">
                            <label for="contact-email">Email</label>
                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                value="<?= e(($old['form_type'] ?? '') === 'contact' ? ($old['email'] ?? '') : '') ?>"
                                autocomplete="email">
                        </div>

                        <div class="form-group">
                            <label for="contact-telephone">Téléphone</label>
                            <input
                                type="tel"
                                id="contact-telephone"
                                name="telephone"
                                value="<?= e(($old['form_type'] ?? '') === 'contact' ? ($old['telephone'] ?? '') : '') ?>"
                                autocomplete="tel">
                        </div>

                        <div class="form-group">
                            <label for="contact-sujet">Sujet <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="contact-sujet"
                                name="sujet"
                                value="<?= e(($old['form_type'] ?? '') === 'contact' ? ($old['sujet'] ?? '') : '') ?>"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="contact-message">Message <span aria-hidden="true">*</span></label>
                            <textarea
                                id="contact-message"
                                name="message"
                                rows="6"
                                required><?= e(($old['form_type'] ?? '') === 'contact' ? ($old['message'] ?? '') : '') ?></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <input
                                type="checkbox"
                                id="contact-rgpd"
                                name="rgpd"
                                value="1"
                                required>

                            <label for="contact-rgpd">
                                J’accepte que mes informations soient utilisées uniquement pour répondre à ma demande.
                                <a href="<?= route('politique-confidentialite') ?>">Lire la politique de confidentialité</a>.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Envoyer le message
                        </button>
                    </form>
                </article>

                <!-- Formulaire de devis -->
                <article class="form-card" id="formulaire-devis" aria-labelledby="quote-form-title">
                    <h3 id="quote-form-title">Demande de devis</h3>

                    <p>
                        Décrivez votre besoin afin qu’Armonya Services puisse vous recontacter avec une réponse adaptée.
                    </p>

                    <form class="quote-form" action="<?= route('contact') ?>#formulaire-devis" method="post" novalidate>
                        <input type="hidden" name="form_type" value="devis">
                        <input type="hidden" name="sujet" value="Demande de devis">
                        <input type="hidden" name="csrf_token" value="<?= e($csrfToken ?? '') ?>">

                        <!-- Honeypot anti-spam -->
                        <div class="hidden-field" aria-hidden="true">
                            <label for="website-devis">Site internet</label>
                            <input
                                type="text"
                                id="website-devis"
                                name="website"
                                tabindex="-1"
                                autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="quote-nom">Nom <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="quote-nom"
                                name="nom"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['nom'] ?? '') : '') ?>"
                                autocomplete="family-name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-prenom">Prénom <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="quote-prenom"
                                name="prenom"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['prenom'] ?? '') : '') ?>"
                                autocomplete="given-name"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-telephone">Téléphone <span aria-hidden="true">*</span></label>
                            <input
                                type="tel"
                                id="quote-telephone"
                                name="telephone"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['telephone'] ?? '') : '') ?>"
                                autocomplete="tel"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-email">Email <span aria-hidden="true">*</span></label>
                            <input
                                type="email"
                                id="quote-email"
                                name="email"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['email'] ?? '') : '') ?>"
                                autocomplete="email"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-ville">Ville <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="quote-ville"
                                name="ville"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['ville'] ?? '') : '') ?>"
                                autocomplete="address-level2"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-code-postal">Code postal <span aria-hidden="true">*</span></label>
                            <input
                                type="text"
                                id="quote-code-postal"
                                name="code_postal"
                                value="<?= e(($old['form_type'] ?? '') === 'devis' ? ($old['code_postal'] ?? '') : '') ?>"
                                autocomplete="postal-code"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="quote-service">Type de service demandé <span aria-hidden="true">*</span></label>

                            <?php $selectedService = (($old['form_type'] ?? '') === 'devis') ? ($old['service_type'] ?? '') : ''; ?>

                            <select id="quote-service" name="service_type" required>
                                <option value="">Choisir un service</option>

                                <option value="Ménage & repassage" <?= $selectedService === 'Ménage & repassage' ? 'selected' : '' ?>>
                                    Ménage & repassage
                                </option>

                                <option value="Garde d’enfants de plus de 3 ans" <?= $selectedService === 'Garde d’enfants de plus de 3 ans' ? 'selected' : '' ?>>
                                    Garde d’enfants de plus de 3 ans
                                </option>

                                <option value="Courses et achats du quotidien" <?= $selectedService === 'Courses et achats du quotidien' ? 'selected' : '' ?>>
                                    Courses et achats du quotidien
                                </option>

                                <option value="Livraison de repas" <?= $selectedService === 'Livraison de repas' ? 'selected' : '' ?>>
                                    Livraison de repas
                                </option>

                                <option value="Assistance administrative" <?= $selectedService === 'Assistance administrative' ? 'selected' : '' ?>>
                                    Assistance administrative
                                </option>

                                <option value="Conciergerie privée" <?= $selectedService === 'Conciergerie privée' ? 'selected' : '' ?>>
                                    Conciergerie privée
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quote-frequency">Fréquence souhaitée</label>

                            <?php $selectedFrequency = (($old['form_type'] ?? '') === 'devis') ? ($old['frequence'] ?? '') : ''; ?>

                            <select id="quote-frequency" name="frequence">
                                <option value="">Choisir une fréquence</option>

                                <option value="Prestation ponctuelle" <?= $selectedFrequency === 'Prestation ponctuelle' ? 'selected' : '' ?>>
                                    Prestation ponctuelle
                                </option>

                                <option value="Chaque semaine" <?= $selectedFrequency === 'Chaque semaine' ? 'selected' : '' ?>>
                                    Chaque semaine
                                </option>

                                <option value="Chaque mois" <?= $selectedFrequency === 'Chaque mois' ? 'selected' : '' ?>>
                                    Chaque mois
                                </option>

                                <option value="À définir ensemble" <?= $selectedFrequency === 'À définir ensemble' ? 'selected' : '' ?>>
                                    À définir ensemble
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="quote-message">Votre besoin <span aria-hidden="true">*</span></label>
                            <textarea
                                id="quote-message"
                                name="message"
                                rows="6"
                                required><?= e(($old['form_type'] ?? '') === 'devis' ? ($old['message'] ?? '') : '') ?></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <input
                                type="checkbox"
                                id="quote-rgpd"
                                name="rgpd"
                                value="1"
                                required>

                            <label for="quote-rgpd">
                                J’accepte que mes informations soient utilisées uniquement pour traiter ma demande de devis.
                                <a href="<?= route('politique-confidentialite') ?>">Lire la politique de confidentialité</a>.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Envoyer la demande de devis
                        </button>
                    </form>
                </article>
            </div>
        </div>
    </section>

    <!-- Zone d’intervention -->
    <section class="section location-section" aria-labelledby="contact-location-title">
        <div class="container">
            <p class="section-label">Zone d’intervention</p>

            <h2 id="contact-location-title">Armonya Services intervient en Île-de-France</h2>

            <p>
                Armonya Services intervient à Paris et dans toute l’Île-de-France :
                75, 77, 78, 91, 92, 93, 94 et 95.
            </p>

            <ul class="departments-list">
                <li>Paris — 75</li>
                <li>Seine-et-Marne — 77</li>
                <li>Yvelines — 78</li>
                <li>Essonne — 91</li>
                <li>Hauts-de-Seine — 92</li>
                <li>Seine-Saint-Denis — 93</li>
                <li>Val-de-Marne — 94</li>
                <li>Val-d’Oise — 95</li>
            </ul>
        </div>
    </section>
</main>