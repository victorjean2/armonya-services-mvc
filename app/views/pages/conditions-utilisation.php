<main>
    <!-- Hero de page -->
    <section class="page-hero" aria-labelledby="terms-title">
        <div class="container">
            <p class="section-label">Informations légales</p>

            <h1 id="terms-title">Conditions d’utilisation</h1>

            <p>
                Les présentes conditions d’utilisation ont pour objectif d’informer les visiteurs sur les règles
                d’accès et d’utilisation du site Armonya Services.
            </p>
        </div>
    </section>

    <!-- Introduction -->
    <section class="section" aria-labelledby="intro-title">
        <div class="container">
            <p class="section-label">Introduction</p>

            <h2 id="intro-title">Utilisation du site Armonya Services</h2>

            <p>
                En naviguant sur le site Armonya Services, l’utilisateur reconnaît avoir pris connaissance
                des présentes conditions d’utilisation et s’engage à les respecter.
            </p>

            <p>
                Le site a pour vocation de présenter les services proposés par Armonya Services,
                notamment les prestations à domicile, les services à la personne, la conciergerie privée,
                les informations de contact, la demande de devis et le recrutement.
            </p>

            <p>
                Ces conditions pourront être modifiées à tout moment afin de tenir compte de l’évolution du site,
                des services proposés ou du cadre juridique applicable.
            </p>
        </div>
    </section>

    <!-- Objet du site -->
    <section class="section prestations-section" aria-labelledby="site-purpose-title">
        <div class="container">
            <p class="section-label">Objet du site</p>

            <h2 id="site-purpose-title">Présentation des services Armonya Services</h2>

            <p>
                Le site Armonya Services est un site vitrine professionnel destiné à présenter l’activité de l’entreprise
                en Île-de-France. Il permet aux visiteurs de découvrir les prestations proposées et de prendre contact
                avec Armonya Services.
            </p>

            <div class="cards-grid two-columns">
                <article class="card">
                    <h3>Services à la personne</h3>
                    <p>
                        Le site présente des prestations à domicile comme le ménage, le repassage,
                        la garde d’enfants de plus de 3 ans, l’aide aux courses, la livraison de repas
                        et l’assistance administrative à domicile.
                    </p>

                    <a href="<?= route('services') ?>">Découvrir les services</a>
                </article>

                <article class="card">
                    <h3>Conciergerie privée</h3>
                    <p>
                        Le site présente également une offre de conciergerie privée : organisation pratique,
                        réservation, recherche de prestataires événementiels et mise en relation.
                    </p>

                    <a href="<?= route('conciergerie') ?>">Découvrir la conciergerie</a>
                </article>
            </div>
        </div>
    </section>

    <!-- Accès au site -->
    <section class="section" aria-labelledby="access-title">
        <div class="container">
            <p class="section-label">Accès</p>

            <h2 id="access-title">Accès au site</h2>

            <p>
                Le site est accessible aux utilisateurs disposant d’un accès à internet.
                Armonya Services s’efforce de maintenir le site accessible, mais ne peut garantir
                une disponibilité permanente ou une absence totale d’interruption.
            </p>

            <p>
                Des opérations de maintenance, de correction, d’amélioration ou des incidents techniques
                peuvent entraîner une interruption temporaire de l’accès au site.
            </p>

            <p>
                L’utilisateur est responsable de son équipement informatique, de sa connexion internet
                et de la sécurité de son propre environnement numérique.
            </p>
        </div>
    </section>

    <!-- Utilisation autorisée -->
    <section class="section location-section" aria-labelledby="authorized-use-title">
        <div class="container">
            <p class="section-label">Règles d’usage</p>

            <h2 id="authorized-use-title">Utilisation autorisée du site</h2>

            <p>
                L’utilisateur s’engage à utiliser le site de manière normale, loyale et conforme à sa finalité.
                Le site ne doit pas être utilisé pour porter atteinte à son bon fonctionnement,
                à la sécurité des données ou aux droits d’Armonya Services.
            </p>

            <div class="cards-grid three-columns">
                <article class="card">
                    <h3>Navigation normale</h3>
                    <p>
                        Le site peut être consulté pour découvrir les services, lire les informations
                        et accéder aux formulaires de contact ou de demande.
                    </p>
                </article>

                <article class="card">
                    <h3>Demandes sincères</h3>
                    <p>
                        Les formulaires doivent être utilisés pour transmettre des demandes réelles,
                        complètes et respectueuses.
                    </p>
                </article>

                <article class="card">
                    <h3>Respect du site</h3>
                    <p>
                        Toute tentative de perturbation, d’accès non autorisé ou d’usage abusif du site
                        est interdite.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Formulaires -->
    <section class="section" aria-labelledby="forms-title">
        <div class="container">
            <p class="section-label">Formulaires</p>

            <h2 id="forms-title">Utilisation des formulaires</h2>

            <p>
                Le site peut proposer plusieurs formulaires, notamment un formulaire de contact,
                un formulaire de demande de devis et un formulaire de candidature.
            </p>

            <p>
                L’utilisateur s’engage à fournir des informations exactes, complètes et à jour.
                Les informations transmises sont utilisées pour répondre à la demande concernée.
            </p>

            <p>
                Les formulaires ne doivent pas être utilisés pour envoyer des contenus frauduleux,
                injurieux, illicites, publicitaires, automatisés ou sans rapport avec les services proposés.
            </p>

            <a href="<?= route('politique-confidentialite') ?>" class="btn btn-outline">
                Lire la politique de confidentialité
            </a>
        </div>
    </section>

    <!-- Demande de devis -->
    <section class="section prestations-section" aria-labelledby="quote-title">
        <div class="container">
            <p class="section-label">Devis</p>

            <h2 id="quote-title">Demandes de devis et informations commerciales</h2>

            <p>
                Les demandes de devis envoyées via le site permettent à Armonya Services de comprendre le besoin
                du visiteur et de le recontacter.
            </p>

            <p>
                L’envoi d’une demande via le site ne constitue pas automatiquement une acceptation de prestation,
                un contrat ou une réservation ferme. Une prise de contact complémentaire peut être nécessaire
                afin de préciser le besoin, la zone d’intervention, les modalités et les conditions applicables.
            </p>

            <p>
                Les informations présentes sur le site sont fournies à titre informatif et peuvent être modifiées
                en fonction de l’évolution de l’activité, de la disponibilité des services ou de la réglementation.
            </p>

            <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">
                Demander un devis
            </a>
        </div>
    </section>

    <!-- Crédit d'impôt -->
    <section class="section tax-section" aria-labelledby="tax-title">
        <div class="container">
            <p class="section-label">Information prudente</p>

            <h2 id="tax-title">Crédit d’impôt et services à la personne</h2>

            <p>
                Certaines prestations de services à la personne peuvent ouvrir droit à un crédit d’impôt
                selon les conditions prévues par la réglementation en vigueur.
                Cette information doit être vérifiée selon votre situation personnelle et les règles applicables.
            </p>

            <p>
                Armonya Services ne garantit pas l’obtention d’un avantage fiscal automatique.
                Le visiteur est invité à consulter les sources officielles ou un professionnel compétent
                pour vérifier son éligibilité.
            </p>

            <a href="<?= route('credit-impot') ?>" class="btn btn-outline">
                Lire la page crédit d’impôt
            </a>
        </div>
    </section>

    <!-- Propriété intellectuelle -->
    <section class="section" aria-labelledby="intellectual-property-title">
        <div class="container">
            <p class="section-label">Propriété intellectuelle</p>

            <h2 id="intellectual-property-title">Contenus du site</h2>

            <p>
                Les contenus présents sur le site Armonya Services, notamment les textes, éléments graphiques,
                logos, images, structure des pages, éléments visuels et contenus rédactionnels, sont destinés
                à présenter l’activité de l’entreprise.
            </p>

            <p>
                Sauf autorisation préalable, toute reproduction, modification, diffusion, exploitation ou réutilisation
                des contenus du site est interdite.
            </p>

            <p>
                Les images, logos ou éléments provenant de sources externes devront être utilisés uniquement
                avec les droits ou autorisations nécessaires.
            </p>
        </div>
    </section>

    <!-- Liens externes -->
    <section class="section location-section" aria-labelledby="external-links-title">
        <div class="container">
            <p class="section-label">Liens externes</p>

            <h2 id="external-links-title">Liens vers des services tiers</h2>

            <p>
                Le site peut contenir des liens vers des services tiers, par exemple WhatsApp,
                un service d’email, des sources officielles ou d’autres sites externes.
            </p>

            <p>
                Armonya Services n’est pas responsable du contenu, du fonctionnement ou de la politique
                de confidentialité des sites tiers accessibles depuis ces liens.
            </p>

            <p>
                L’utilisateur est invité à consulter les conditions et politiques de confidentialité
                des sites externes lorsqu’il les utilise.
            </p>
        </div>
    </section>

    <!-- Responsabilité -->
    <section class="section" aria-labelledby="liability-title">
        <div class="container">
            <p class="section-label">Responsabilité</p>

            <h2 id="liability-title">Limitation de responsabilité</h2>

            <p>
                Armonya Services s’efforce de fournir des informations claires, utiles et actualisées.
                Toutefois, des erreurs, omissions ou imprécisions peuvent exister.
            </p>

            <p>
                Les informations disponibles sur le site ne remplacent pas un échange personnalisé,
                une vérification administrative, un conseil juridique, fiscal, médical ou professionnel adapté.
            </p>

            <p>
                Armonya Services ne saurait être tenue responsable d’une mauvaise utilisation du site,
                d’une interruption temporaire, d’un problème technique indépendant de sa volonté
                ou d’une interprétation incorrecte des informations présentées.
            </p>
        </div>
    </section>

    <!-- Données personnelles -->
    <section class="section prestations-section" aria-labelledby="personal-data-title">
        <div class="container">
            <p class="section-label">Données personnelles</p>

            <h2 id="personal-data-title">Protection des données</h2>

            <p>
                Les données transmises via les formulaires sont utilisées pour répondre aux demandes des visiteurs,
                traiter les demandes de devis ou étudier les candidatures.
            </p>

            <p>
                Pour connaître les finalités de traitement, les données collectées, les durées de conservation,
                les droits des utilisateurs et les modalités de contact, l’utilisateur peut consulter la politique
                de confidentialité du site.
            </p>

            <a href="<?= route('politique-confidentialite') ?>" class="btn btn-outline">
                Consulter la politique de confidentialité
            </a>
        </div>
    </section>

    <!-- Cookies -->
    <section class="section" aria-labelledby="cookies-title">
        <div class="container">
            <p class="section-label">Cookies</p>

            <h2 id="cookies-title">Gestion des cookies</h2>

            <p>
                Le site peut utiliser des cookies ou technologies similaires pour assurer son bon fonctionnement,
                améliorer l’expérience utilisateur ou, si nécessaire, mesurer l’audience.
            </p>

            <p>
                Les informations détaillées sur l’utilisation des cookies sont présentées dans la page dédiée
                à la gestion des cookies.
            </p>

            <a href="<?= route('gestion-cookies') ?>" class="btn btn-outline">
                Lire la gestion des cookies
            </a>
        </div>
    </section>

    <!-- Modification des conditions -->
    <section class="section location-section" aria-labelledby="updates-title">
        <div class="container">
            <p class="section-label">Mise à jour</p>

            <h2 id="updates-title">Modification des conditions d’utilisation</h2>

            <p>
                Armonya Services peut modifier les présentes conditions d’utilisation à tout moment,
                notamment pour tenir compte de l’évolution du site, des services proposés ou des obligations applicables.
            </p>

            <p>
                La version publiée sur cette page est celle applicable lors de la consultation du site.
            </p>

            <p>
                Dernière mise à jour : mai 2026.
            </p>
        </div>
    </section>

    <!-- CTA final -->
    <section class="section final-cta" aria-labelledby="terms-cta-title">
        <div class="container">
            <h2 id="terms-cta-title">Une question sur l’utilisation du site ?</h2>

            <p>
                Contactez Armonya Services pour toute question concernant le site, les services ou les informations publiées.
            </p>

            <div class="cta-actions">
                <a href="<?= route('contact') ?>" class="btn btn-primary">Nous contacter</a>
                <a href="<?= route('mentions-legales') ?>" class="btn btn-outline">Mentions légales</a>
            </div>
        </div>
    </section>
</main>