<main>
        <section class="page-hero" aria-labelledby="recruitment-page-title">
            <div class="container">
                <p class="section-label">Recrutement</p>
                <h1 id="recruitment-page-title">Rejoignez Armonya Services comme intervenante à domicile en
                    Île-de-France</h1>

                <p>
                    Vous êtes sérieuse, ponctuelle, bienveillante et vous aimez rendre service ?
                    Armonya Services recherche des intervenantes pour accompagner les familles et particuliers en
                    Île-de-France.
                </p>

                <a href="#formulaire-candidature" class="btn btn-primary">Déposer ma candidature</a>
            </div>
        </section>

        <section class="section" aria-labelledby="missions-title">
            <div class="container">
                <h2 id="missions-title">Missions proposées</h2>

                <div class="cards-grid three-columns">
                    <article class="card">
                        <h3>Ménage à domicile</h3>
                        <p>Entretien courant du logement, rangement léger, nettoyage des pièces de vie.</p>
                    </article>

                    <article class="card">
                        <h3>Repassage</h3>
                        <p>Repassage du linge courant, pliage et organisation selon les besoins du foyer.</p>
                    </article>

                    <article class="card">
                        <h3>Garde d’enfants de plus de 3 ans</h3>
                        <p>Sortie d’école, garde à domicile et accompagnement simple du quotidien.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" aria-labelledby="profile-title">
            <div class="container">
                <h2 id="profile-title">Profil recherché</h2>

                <ul class="qualities-list">
                    <li>Sérieux</li>
                    <li>Ponctualité</li>
                    <li>Bienveillance</li>
                    <li>Expérience appréciée</li>
                    <li>Sens du service</li>
                    <li>Fiabilité</li>
                    <li>Discrétion</li>
                    <li>Bonne présentation</li>
                </ul>
            </div>
        </section>

        <section class="section" aria-labelledby="benefits-title">
            <div class="container">
                <h2 id="benefits-title">Pourquoi rejoindre Armonya Services ?</h2>

                <div class="cards-grid three-columns">
                    <article class="card">
                        <h3>Missions en Île-de-France</h3>
                        <p>Des prestations situées dans une zone géographique claire.</p>
                    </article>

                    <article class="card">
                        <h3>Accompagnement humain</h3>
                        <p>Une relation professionnelle basée sur le respect et la confiance.</p>
                    </article>

                    <article class="card">
                        <h3>Organisation claire</h3>
                        <p>Des missions définies selon les besoins des clients et vos disponibilités.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section application-section" id="formulaire-candidature"
            aria-labelledby="application-form-title">
            <div class="container">
                <h2 id="application-form-title">Formulaire de candidature</h2>

                <form class="application-form" action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="application-lastname">Nom</label>
                        <input type="text" id="application-lastname" name="lastname" required>
                    </div>

                    <div class="form-group">
                        <label for="application-firstname">Prénom</label>
                        <input type="text" id="application-firstname" name="firstname" required>
                    </div>

                    <div class="form-group">
                        <label for="application-phone">Téléphone</label>
                        <input type="tel" id="application-phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="application-email">Email</label>
                        <input type="email" id="application-email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="application-city">Ville</label>
                        <input type="text" id="application-city" name="city" required>
                    </div>

                    <div class="form-group">
                        <label for="application-mobility">Mobilité</label>
                        <input type="text" id="application-mobility" name="mobility"
                            placeholder="Exemple : Paris, 93, 94, toute Île-de-France">
                    </div>

                    <div class="form-group">
                        <label for="application-experience">Expérience</label>
                        <textarea id="application-experience" name="experience" rows="5"
                            placeholder="Décrivez brièvement votre expérience"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="application-services">Services proposés</label>
                        <select id="application-services" name="services_offered" required>
                            <option value="">Choisir une mission</option>
                            <option value="menage">Ménage</option>
                            <option value="repassage">Repassage</option>
                            <option value="garde-enfants">Garde d’enfants de plus de 3 ans</option>
                            <option value="plusieurs-services">Plusieurs services</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="application-availability">Disponibilités</label>
                        <textarea id="application-availability" name="availability" rows="5"
                            placeholder="Exemple : lundi matin, mercredi après-midi, week-end..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="application-cv">CV optionnel</label>
                        <input type="file" id="application-cv" name="cv" accept=".pdf,.doc,.docx">
                    </div>

                    <div class="form-group">
                        <label for="application-message">Message complémentaire</label>
                        <textarea id="application-message" name="message" rows="6"></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="application-rgpd" name="rgpd_consent" required>
                        <label for="application-rgpd">
                            J’accepte que mes informations soient utilisées uniquement pour l’étude de ma candidature.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer ma candidature</button>
                </form>
            </div>
        </section>
    </main>