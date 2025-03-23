<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Hugo Bisserier</h3>
                <p data-translate="footer_description">Développeur Web passionné par la création d'applications web modernes et performantes.</p>
            </div>

            <div class="footer-section">
                <h3 data-translate="footer_quick_nav">Navigation rapide</h3>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/about">À propos</a></li>
                    <li><a href="/projects">Projets</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3 data-translate="footer_contact">Me contacter</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:hugo.bisserier.pro@gmail.com">hugo.bisserier.pro@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+33682861309">06 82 86 13 09</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aix-en-Provence, France</span>
                    </li>
                </ul>
            </div>

            <div class="footer-section">
                <h3 data-translate="footer_social">Réseaux sociaux</h3>
                <div class="social-links">
                    <a href="https://github.com/MentalOfCrow" target="_blank" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/hugo-bisserier-a67327324/" target="_blank" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Hugo Bisserier. <span data-translate="footer_rights">Tous droits réservés.</span></p>
            <ul class="legal-links">
                <li><a href="/mentions-legales" data-translate="footer_legal">Mentions légales</a></li>
                <li><a href="/politique-confidentialite" data-translate="footer_privacy">Politique de confidentialité</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/assets/js/main.js"></script>
<?php if (isset($additional_scripts)): ?>
    <?php foreach ($additional_scripts as $script): ?>
        <script src="<?= $script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html> 