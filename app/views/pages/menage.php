<main>
    <!-- Hero de page -->
    <section class="page-hero" aria-labelledby="service-title">
        <div class="container">
            <p class="section-label">Service à domicile</p>

            <h1 id="service-title">Ménage et repassage à domicile en Île-de-France</h1>

            <p>
                Armonya Services vous accompagne pour l’entretien de votre domicile avec des prestations
                de ménage et de repassage réalisées avec sérieux, discrétion et professionnalisme.
            </p>

            <div class="hero-actions">
                <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">Demander un devis</a>
                <a href="tel:+33778256161" class="btn btn-outline">Être rappelé</a>
            </div>
        </div>
    </section>

    <!-- Présentation du service -->
    <section class="section" aria-labelledby="presentation-title">
        <div class="container">
            <p class="section-label">Présentation</p>

            <h2 id="presentation-title">Un intérieur propre, organisé et agréable à vivre</h2>

            <p>
                Le ménage et le repassage sont des tâches essentielles du quotidien, mais elles demandent du temps,
                de l’énergie et de la régularité. Armonya Services propose un accompagnement à domicile pour vous aider
                à garder un logement propre, sain et bien entretenu.
            </p>

            <p>
                Que vous soyez une famille, un parent actif, une personne occupée ou une personne ayant besoin
                d’un soutien ponctuel, nos prestations sont pensées pour s’adapter à votre rythme et à vos besoins.
            </p>

            <p>
                L’objectif est simple : vous permettre de gagner du temps, de retrouver du confort chez vous
                et de profiter d’un quotidien plus léger.
            </p>
        </div>
    </section>

    <!-- Missions possibles -->
    <section class="section prestations-section" aria-labelledby="missions-title">
        <div class="container">
            <p class="section-label">Prestations</p>

            <h2 id="missions-title">Missions possibles</h2>

            <div class="cards-grid three-columns">
                <article class="card">
                    <h3>Entretien du logement</h3>
                    <p>
                        Nettoyage des pièces de vie, entretien courant, dépoussiérage et rangement léger
                        selon les besoins du foyer.
                    </p>
                </article>

                <article class="card">
                    <h3>Nettoyage des sols</h3>
                    <p>
                        Aspiration, lavage et entretien des sols pour conserver un logement propre et agréable.
                    </p>
                </article>

                <article class="card">
                    <h3>Cuisine et salle de bain</h3>
                    <p>
                        Nettoyage des surfaces, sanitaires, éviers, plans de travail et espaces utilisés au quotidien.
                    </p>
                </article>

                <article class="card">
                    <h3>Repassage du linge</h3>
                    <p>
                        Repassage du linge courant selon vos habitudes et vos priorités.
                    </p>
                </article>

                <article class="card">
                    <h3>Pliage et organisation</h3>
                    <p>
                        Aide au pliage du linge et à son organisation pour faciliter la gestion du quotidien.
                    </p>
                </article>

                <article class="card">
                    <h3>Prestation ponctuelle ou régulière</h3>
                    <p>
                        Intervention selon vos besoins : une fois, chaque semaine, chaque mois ou selon une fréquence à définir.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Détail simple -->
    <section class="section" aria-labelledby="details-title">
        <div class="container">
            <p class="section-label">Détail du service</p>

            <h2 id="details-title">Ce que peut inclure une prestation</h2>

            <ul class="service-list">
                <li>Entretien des sols.</li>
                <li>Dépoussiérage des meubles et surfaces accessibles.</li>
                <li>Nettoyage de la cuisine.</li>
                <li>Nettoyage de la salle de bain.</li>
                <li>Rangement léger des espaces de vie.</li>
                <li>Repassage du linge courant.</li>
                <li>Pliage et organisation du linge.</li>
                <li>Adaptation de la prestation selon vos priorités.</li>
            </ul>
        </div>
    </section>

    <!-- Pour qui -->
    <section class="section location-section" aria-labelledby="audience-title">
        <div class="container">
            <p class="section-label">Public concerné</p>

            <h2 id="audience-title">À qui s’adresse le ménage et repassage à domicile ?</h2>

            <div class="cards-grid four-columns">
                <article class="card">
                    <h3>Familles</h3>
                    <p>
                        Pour les foyers qui souhaitent déléguer une partie de l’entretien de leur logement.
                    </p>
                </article>

                <article class="card">
                    <h3>Parents actifs</h3>
                    <p>
                        Pour gagner du temps après le travail et alléger la charge du quotidien.
                    </p>
                </article>

                <article class="card">
                    <h3>Particuliers occupés</h3>
                    <p>
                        Pour les personnes qui manquent de temps et souhaitent un intérieur bien entretenu.
                    </p>
                </article>

                <article class="card">
                    <h3>Personnes âgées autonomes</h3>
                    <p>
                        Pour recevoir une aide pratique dans l’entretien courant du domicile.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Fonctionnement -->
    <section class="section" aria-labelledby="process-title">
        <div class="container">
            <p class="section-label">Fonctionnement</p>

            <h2 id="process-title">Comment demander une prestation ?</h2>

            <ol class="steps-list">
                <li>Vous remplissez le formulaire de demande de devis.</li>
                <li>Vous indiquez votre ville, votre besoin et la fréquence souhaitée.</li>
                <li>Armonya Services étudie votre demande.</li>
                <li>Vous êtes recontacté pour préciser les informations nécessaires.</li>
                <li>Une proposition adaptée peut ensuite être définie selon votre besoin.</li>
            </ol>

            <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">
                Demander un devis personnalisé
            </a>
        </div>
    </section>

    <!-- Réassurance -->
    <section class="section trust-section" aria-labelledby="trust-title">
        <div class="container">
            <p class="section-label">Confiance</p>

            <h2 id="trust-title">Un service sérieux et rassurant</h2>

            <div class="cards-grid four-columns">
                <article class="card trust-card">
                    <h3>Écoute</h3>
                    <p>
                        Nous prenons le temps de comprendre vos besoins avant d’organiser la prestation.
                    </p>
                </article>

                <article class="card trust-card">
                    <h3>Discrétion</h3>
                    <p>
                        L’intervention à domicile demande respect, sérieux et confidentialité.
                    </p>
                </article>

                <article class="card trust-card">
                    <h3>Organisation</h3>
                    <p>
                        Les prestations sont pensées pour s’intégrer simplement à votre quotidien.
                    </p>
                </article>

                <article class="card trust-card">
                    <h3>Proximité</h3>
                    <p>
                        Armonya Services intervient à Paris et dans toute l’Île-de-France.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Crédit d'impôt -->
    <section class="section tax-section" aria-labelledby="tax-title">
        <div class="container">
            <p class="section-label">Information utile</p>

            <h2 id="tax-title">Crédit d’impôt sous conditions</h2>

            <p>
                Certaines prestations de services à la personne peuvent ouvrir droit à un crédit d’impôt
                selon les conditions prévues par la réglementation en vigueur.
                Cette information doit être vérifiée selon votre situation personnelle et les règles applicables.
            </p>

            <a href="<?= route('credit-impot') ?>" class="btn btn-outline">
                Comprendre le crédit d’impôt
            </a>
        </div>
    </section>

    <!-- Zone d'intervention -->
    <section class="section location-section" aria-labelledby="location-title">
        <div class="container">
            <p class="section-label">Zone d’intervention</p>

            <h2 id="location-title">Ménage et repassage à domicile en Île-de-France</h2>

            <p>
                Armonya Services intervient à Paris et dans toute l’Île-de-France pour des prestations
                de ménage et repassage à domicile.
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

    <!-- CTA final -->
    <section class="section final-cta" aria-labelledby="cta-title">
        <div class="container">
            <h2 id="cta-title">Besoin d’une aide pour le ménage ou le repassage ?</h2>

            <p>
                Décrivez votre besoin à Armonya Services et recevez une réponse personnalisée.
            </p>

            <div class="cta-actions">
                <a href="<?= route('contact') ?>#formulaire-devis" class="btn btn-primary">Demander un devis</a>
                <a href="<?= route('contact') ?>" class="btn btn-outline">Nous contacter</a>
            </div>
        </div>
    </section>
</main>