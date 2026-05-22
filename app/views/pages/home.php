<main>
    <section class="hero-section">
        <div class="container hero-container">
            <div>
                <p class="section-label">Services à domicile & conciergerie privée</p>

                <h1>Armonya Services, votre allié du quotidien en Île-de-France</h1>

                <p class="hero-text">
                    Services à la personne, aide à domicile et conciergerie privée pour vous faire gagner du temps
                    avec sérieux, élégance et bienveillance.
                </p>

                <div class="hero-actions">
                    <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">Demander un devis</a>
                    <a href="<?= route('services') ?>" class="btn btn-outline">Découvrir nos services</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="assets/images/hero-armonya-services.png"
                    alt="Accompagnement à domicile avec Armonya Services">
            </div>
        </div>
    </section>

    <section class="section services-overview">
        <div class="container">
            <p class="section-label">Nos services</p>
            <h2>Deux pôles pour simplifier votre quotidien</h2>

            <div class="cards-grid two-columns">
                <article class="card">
                    <h3>Services à la personne</h3>
                    <p>
                        Ménage, repassage, garde d’enfants de plus de 3 ans, courses, livraison de repas
                        et assistance administrative à domicile.
                    </p>
                    <a href="<?= route('services') ?>">Découvrir</a>
                </article>

                <article class="card">
                    <h3>Conciergerie privée</h3>
                    <p>
                        Organisation pratique, réservation, recherche de prestataires événementiels
                        et accompagnement personnalisé.
                    </p>
                    <a href="<?= route('conciergerie') ?>">Découvrir</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section final-cta">
        <div class="container">
            <h2>Besoin d’un service fiable à domicile ?</h2>
            <p>Contactez Armonya Services pour expliquer votre besoin et recevoir une réponse personnalisée.</p>

            <div class="cta-actions">
                <a href="<?= route('contact') ?>" class="btn btn-primary">Nous contacter</a>
                <a href="tel:+33778256161" class="btn btn-outline">Appeler</a>
            </div>
        </div>
    </section>
</main>