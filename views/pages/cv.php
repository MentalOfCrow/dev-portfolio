<?php
echo "<!-- DEBUG CV.PHP LOADED -->";
$title = "Mon CV";
$current_page = "cv";

$cvLang = 'fr';
if (isset($_COOKIE['language']) && $_COOKIE['language'] === 'en') {
    $cvLang = 'en';
}
$cvFile = $cvLang === 'en' ? '/assets/cv/cv2026-en.pdf' : '/assets/cv/cv2026-fr.pdf';
$cvDownloadLabel = $cvLang === 'en' ? 'Download CV (PDF)' : 'Télécharger le CV (PDF)';
?>

<main class="container">
    <section class="page-header">
        <h1 data-translate="cv_title">Mon CV</h1>
        <div class="cv-actions">
            <a id="cv-download-btn" href="<?= $cvFile ?>" class="btn btn-primary" download data-translate="cv_download">
                <i class="fas fa-download"></i>
                <?= $cvDownloadLabel ?>
            </a>
        </div>
        <!-- Suppression du sélecteur de langue CV -->
        <!-- <div class="cv-lang-switch">
            <button id="btn-cv-fr" class="btn btn-secondary" type="button">CV Français</button>
            <button id="btn-cv-en" class="btn btn-secondary" type="button">CV Anglais</button>
        </div> -->
    </section>

    <div class="cv-container">
        <!-- Section Profil -->
        <section class="cv-section">
            <h2 data-translate="cv_profile_title">Profil</h2>
            <div class="profile-content">
                <div class="profile-text">
                    <p data-translate="cv_profile_text">Développeur web passionné par la création d'applications innovantes et performantes. 
                    Spécialisé dans le développement full-stack avec une expertise particulière en PHP, JavaScript et Python.</p>
                </div>
            </div>
        </section>

        <!-- Section Compétences -->
        <section class="cv-section">
            <h2 data-translate="cv_skills_title">Compétences Techniques</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3 data-translate="cv_languages_title">Langages de Programmation</h3>
                    <ul>
                        <li>PHP</li>
                        <li>JavaScript</li>
                        <li>Python</li>
                        <li>C#</li>
                        <li>Golang</li>
                        <li>HTML/CSS</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3 data-translate="cv_frameworks_title">Frameworks & Outils</h3>
                    <ul>
                        <li>MySQL</li>
                        <li>Blazor</li>
                        <li>Canvas API</li>
                        <li>Tailwind CSS</li>
                        <li>Git</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3 data-translate="cv_infrastructure_title">Infrastructure</h3>
                    <ul>
                        <li>Virtualisation (VirtualBox)</li>
                        <li>GNS3</li>
                        <li>Apache/Nginx</li>
                        <li>Windows Server</li>
                        <li>Linux</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section Projets Clés -->
        <section class="cv-section">
            <h2 data-translate="cv_projects_title">Projets Clés</h2>
            <div class="projects-list">
                <div class="cv-project">
                    <h3 data-translate="cv_project1_title">FabLab - Digitalisation des Commandes</h3>
                    <p data-translate="cv_project1_desc">Application web de gestion des commandes d'impressions 3D, développée en PHP et MySQL.</p>
                </div>
                <div class="cv-project">
                    <h3 data-translate="cv_project2_title">Jeu de Dames en Ligne</h3>
                    <p data-translate="cv_project2_desc">Application web interactive utilisant Canvas API et WebSocket pour un jeu multijoueur en temps réel.</p>
                </div>
                <div class="cv-project">
                    <h3 data-translate="cv_project3_title">Infrastructure Client-Serveur</h3>
                    <p data-translate="cv_project3_desc">Conception et implémentation d'une architecture réseau complète pour une petite entreprise.</p>
                </div>
            </div>
        </section>

        <!-- Section Formation -->
        <section class="cv-section">
            <h2 data-translate="cv_education_title">Formation</h2>
            <div class="education-list">
                <div class="education-item">
                    <h3 data-translate="cv_education1_title">Formation en Développement Web, Réseau et Cybersécurité</h3>
        </section>

        <!-- Intégration du PDF -->
        <section class="cv-section pdf-preview">
            <h2 data-translate="cv_pdf_title">Version PDF</h2>
            <div class="pdf-container">
                <iframe id="cv-pdf-frame" src="<?= $cvFile ?>" width="100%" height="800px"></iframe>
            </div>
        </section>
    </div>
    <script>
    // Changement dynamique du PDF selon la langue
    document.addEventListener('DOMContentLoaded', function() {
        function updateCvPdf(lang) {
            // Si lang n'est pas passé, le récupérer du localStorage
            if (!lang) {
                lang = localStorage.getItem('language') || 'fr';
            }
            console.log('[CV] Mise à jour du PDF vers langue :', lang);
            const frame = document.getElementById('cv-pdf-frame');
            const btn = document.getElementById('cv-download-btn');
            if (lang === 'en') {
                frame.src = '/assets/cv/cv2026-en.pdf';
                btn.href = '/assets/cv/cv2026-en.pdf';
                btn.innerHTML = '<i class="fas fa-download"></i> Download CV (PDF)';
            } else {
                frame.src = '/assets/cv/cv2026-fr.pdf';
                btn.href = '/assets/cv/cv2026-fr.pdf';
                btn.innerHTML = '<i class="fas fa-download"></i> Télécharger le CV (PDF)';
            }
        }
        
        // Appliquer au chargement
        updateCvPdf();
        
        // Écouter les clics sur les boutons de langue FR et EN
        const frBtn = document.getElementById('lang-fr');
        const enBtn = document.getElementById('lang-en');
        
        if (frBtn) {
            frBtn.addEventListener('click', function() {
                console.log('[CV] Clic sur FR');
                updateCvPdf('fr');
            });
        }
        
        if (enBtn) {
            enBtn.addEventListener('click', function() {
                console.log('[CV] Clic sur EN');
                updateCvPdf('en');
            });
        }
        
        // Sur changement de langue via storage (autre onglet)
        window.addEventListener('storage', function(e) {
            if (e.key === 'language') {
                updateCvPdf(e.newValue);
            }
        });
    });
    </script>
</main>