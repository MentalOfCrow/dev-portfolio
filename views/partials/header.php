<header class="main-header">
    <div class="container">
        <nav class="main-nav">
            <a href="/" class="logo">
                <span class="logo-text">Hugo Bisserier</span>
            </a>

            <button class="mobile-menu-toggle" aria-label="Menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <ul class="nav-links">
                <li><a href="/" <?= isset($current_page) && $current_page === 'home' ? 'class="active"' : '' ?> data-translate="nav_home">Accueil</a></li>
                <li><a href="/about" <?= isset($current_page) && $current_page === 'about' ? 'class="active"' : '' ?> data-translate="nav_about">À propos</a></li>
                <li><a href="/skills" <?= isset($current_page) && $current_page === 'skills' ? 'class="active"' : '' ?> data-translate="nav_skills">Compétences</a></li>
                <li><a href="/experiences#experiences" <?= isset($current_page) && $current_page === 'experiences' ? 'class="active"' : '' ?> data-translate="nav_experiences">Expériences</a></li>
                <li><a href="/projects" <?= isset($current_page) && $current_page === 'projects' ? 'class="active"' : '' ?> data-translate="nav_projects">Projets</a></li>
                <li><a href="/contact" <?= isset($current_page) && $current_page === 'contact' ? 'class="active"' : '' ?> data-translate="nav_contact">Contact</a></li>
                <li><a href="/cv" <?= isset($current_page) && $current_page === 'cv' ? 'class="active"' : '' ?> data-translate="nav_cv">CV</a></li>
            </ul>

            <div class="nav-actions">
                <button class="theme-toggle" aria-label="Changer de thème">
                    <i class="fas fa-sun light-icon"></i>
                    <i class="fas fa-moon dark-icon"></i>
                </button>
                <div class="language-selector">
                    <button class="current-lang">FR</button>
                    <ul class="lang-dropdown">
                        <li><a href="#" data-lang="fr" id="lang-fr">Français</a></li>
                        <li><a href="#" data-lang="en" id="lang-en">English</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header> 