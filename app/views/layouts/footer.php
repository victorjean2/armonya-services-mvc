    <footer class="site-footer">
        <div class="container footer-container">
            <section class="footer-column" aria-labelledby="footer-brand">
                <h2 id="footer-brand">Armonya Services</h2>
                <p>Services à domicile et conciergerie privée en Île-de-France.</p>
            </section>

            <section class="footer-column" aria-labelledby="footer-navigation">
                <h2 id="footer-navigation">Navigation</h2>
                <ul>
                    <li><a href="<?= route('credit-impot') ?>">Crédit d’impôt</a></li>
                    <li><a href="<?= route('a-propos') ?>">À propos</a></li>
                    <li><a href="<?= route('faq') ?>">FAQ</a></li>
                    <li><a href="<?= route('contact') ?>">Contact</a></li>
                </ul>
            </section>

            <section class="footer-column" aria-labelledby="footer-legal">
                <h2 id="footer-legal">Informations légales</h2>
                <ul>
                    <li><a href="<?= route('mentions-legales') ?>">Mentions légales</a></li>
                    <li><a href="<?= route('politique-confidentialite') ?>">Politique de confidentialité</a></li>
                    <li><a href="<?= route('gestion-cookies') ?>">Gestion des cookies</a></li>
                    <li><a href="<?= route('conditions-utilisation') ?>">Conditions d’utilisation</a></li>
                </ul>
            </section>

            <section class="footer-column" aria-labelledby="footer-contact">
                <h2 id="footer-contact">Contact</h2>
                <address>
                    Île-de-France<br>
                    <a href="tel:+33778256161">07 78 25 61 61</a><br>
                    <a href="mailto:contact@armonya-services.fr">contact@armonya-services.fr</a>
                </address>
            </section>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Armonya Services. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="../assets/js/main.js"></script>
</body>

</html>