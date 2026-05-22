<main>
    <section class="page-hero" aria-labelledby="page-title">
        <div class="container">
            <p class="section-label">Services à la personne</p>

            <h1 id="page-title">Des prestations à domicile pour simplifier votre quotidien</h1>

            <p>
                Armonya Services vous accompagne à domicile avec des prestations pensées pour alléger votre
                quotidien :
                ménage, repassage, garde d’enfants de plus de 3 ans, aide aux courses, livraison de repas et
                assistance administrative.
            </p>

            <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">
                Demander un devis personnalisé
            </a>
        </div>
    </section>

    <section class="section" aria-labelledby="services-list-title">
        <div class="container">
            <h2 id="services-list-title">Nos prestations à domicile</h2>

            <div class="cards-grid three-columns">
                <article class="card service-detail-card">
                    <h3>Ménage à domicile</h3>

                    <p>
                        Entretien régulier ou ponctuel du logement : sols, poussière, cuisine, salle de bain et
                        rangement léger.
                    </p>

                    <a href="<?= route('menage') ?>">Voir le service</a>
                </article>

                <article class="card service-detail-card">
                    <h3>Repassage à domicile</h3>

                    <p>
                        Repassage du linge courant, pliage et organisation selon les besoins du foyer.
                    </p>

                    <a href="<?= route('menage') ?>">Voir le service</a>
                </article>

                <article class="card service-detail-card">
                    <h3>Garde d’enfants de plus de 3 ans</h3>

                    <p>
                        Accompagnement des enfants : garde à domicile, sortie d’école et aide simple au quotidien.
                    </p>

                    <a href="<?= route('garde-enfants') ?>">Voir le service</a>
                </article>

                <article class="card service-detail-card">
                    <h3>Courses et achats du quotidien</h3>

                    <p>
                        Aide pour les courses alimentaires, achats essentiels et petites démarches pratiques.
                    </p>

                    <a href="<?= route('courses') ?>">Voir le service</a>
                </article>

                <article class="card service-detail-card">
                    <h3>Livraison de repas</h3>

                    <p>
                        Livraison de repas au domicile du client selon l’organisation définie.
                    </p>

                    <a href="<?= route('livraison-repas') ?>">Voir le service</a>
                </article>

                <article class="card service-detail-card">
                    <h3>Assistance administrative à domicile</h3>

                    <p>
                        Aide au classement, compréhension de courriers et accompagnement dans certaines démarches
                        simples.
                    </p>

                    <a href="<?= route('assistance-administrative') ?>">Voir le service</a>
                </article>
            </div>
        </div>
    </section>

    <section class="section process-section" aria-labelledby="process-title">
        <div class="container">
            <h2 id="process-title">Comment se déroule une demande ?</h2>

            <ol class="steps-list">
                <li>Vous expliquez votre besoin via le formulaire de devis.</li>
                <li>Armonya Services étudie votre demande.</li>
                <li>Vous êtes recontacté pour préciser les informations nécessaires.</li>
                <li>Une proposition adaptée peut vous être transmise.</li>
            </ol>
        </div>
    </section>

    <aside class="section tax-info-box" aria-labelledby="tax-info-title">
        <div class="container">
            <h2 id="tax-info-title">Information sur le crédit d’impôt</h2>

            <p>
                Certaines prestations de services à la personne peuvent ouvrir droit à un crédit d’impôt selon les
                conditions prévues par la réglementation en vigueur.
                Cette information doit être vérifiée selon votre situation et les règles applicables.
            </p>

            <a href="<?= route('credit-impot') ?>" class="btn btn-outline">
                Lire la page crédit d’impôt
            </a>
        </div>
    </aside>

    <section class="section final-cta" aria-labelledby="cta-title">
        <div class="container">
            <h2 id="cta-title">Vous souhaitez une aide à domicile en Île-de-France ?</h2>

            <p>
                Décrivez votre besoin et recevez une réponse personnalisée.
            </p>

            <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">
                Demander un devis
            </a>
        </div>
    </section>
</main>