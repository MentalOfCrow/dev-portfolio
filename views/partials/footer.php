<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Hugo Bisserier</h3>
                <p class="footer-desc" data-translate="footer_description">Développeur Web Full Stack passionné par la création d'applications web modernes et performantes. Spécialisé en PHP, JavaScript et solutions cloud avec une approche centrée sur l'optimisation et la sécurité des projets numériques.</p>
                <span class="footer-tagline">#CodeWithPassion</span>
            </div>

            <div class="footer-section">
                <h3 data-translate="footer_quick_nav">Navigation rapide</h3>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/about">À propos</a></li>
                    <li><a href="/projects">Projets</a></li>
                    <li><a href="/skills">Compétences</a></li>
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
                <p class="social-description" data-translate="footer_social_text">Retrouvez-moi sur les plateformes professionnelles pour suivre mon parcours et mes contributions dans le domaine du développement web et de la cybersécurité.</p>
                <div class="social-grid">
                    <a href="https://github.com/MentalOfCrow" target="_blank" class="social-links" title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/hugo-bisserier-a67327324/" target="_blank" class="social-links" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="social-links" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://dev.to/" target="_blank" class="social-links" title="Dev.to">
                        <i class="fab fa-dev"></i>
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