<header class="site-header" data-header>
    <div class="shell header-inner">
        <a class="brand" href="/">
            <span class="brand-mark" aria-hidden="true">HB</span>
            <span class="brand-copy">
                <strong>Hugo Bisserier</strong>
                <small>Cyber · Infra · Full Stack</small>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-label="Ouvrir le menu" aria-controls="primary-navigation" aria-expanded="false" data-nav-toggle>
            <span></span><span></span><span></span>
        </button>

        <nav class="primary-nav" id="primary-navigation" aria-label="Navigation principale" data-nav>
            <a href="/"<?= isCurrentPage('home') ? ' aria-current="page"' : '' ?>><span lang="fr">Accueil</span><span lang="en">Home</span></a>
            <a href="/about"<?= isCurrentPage('about') ? ' aria-current="page"' : '' ?>><span lang="fr">Profil</span><span lang="en">Profile</span></a>
            <a href="/skills"<?= isCurrentPage('skills') ? ' aria-current="page"' : '' ?>><span lang="fr">Compétences</span><span lang="en">Skills</span></a>
            <a href="/experiences"<?= isCurrentPage('experiences') ? ' aria-current="page"' : '' ?>><span lang="fr">Expériences</span><span lang="en">Experience</span></a>
            <a href="/projects"<?= isCurrentPage('projects') ? ' aria-current="page"' : '' ?>><span lang="fr">Projets</span><span lang="en">Projects</span></a>
            <a href="/contact"<?= isCurrentPage('contact') ? ' aria-current="page"' : '' ?>><span lang="fr">Contact</span><span lang="en">Contact</span></a>
        </nav>

        <div class="header-actions">
            <a class="header-cv" href="/cv"<?= isCurrentPage('cv') ? ' aria-current="page"' : '' ?>>CV</a>
            <button class="icon-button" type="button" aria-label="Changer le thème" title="Changer le thème" data-theme-toggle>
                <svg class="theme-icon theme-icon-sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.42-1.41M17.66 6.34l1.41-1.41"></path></svg>
                <svg class="theme-icon theme-icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.2 15.3A8.5 8.5 0 0 1 8.7 3.8 8.5 8.5 0 1 0 20.2 15.3Z"></path></svg>
            </button>
            <button class="language-button" type="button" aria-label="FR — Display the website in English" data-language-toggle><span data-language-label>FR</span></button>
        </div>
    </div>
</header>
