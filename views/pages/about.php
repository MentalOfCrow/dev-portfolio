<?php
$title = "À Propos";
$current_page = "about";

$cvLang = 'fr';
if (isset($_COOKIE['language']) && $_COOKIE['language'] === 'en') {
    $cvLang = 'en';
}
$cvFile = $cvLang === 'en' ? '/assets/cv/cv-en.pdf' : '/assets/cv/cv-fr.pdf';
$cvDownloadLabel = $cvLang === 'en' ? 'Download CV (PDF)' : 'Télécharger le CV (PDF)';
?>

<!-- Lien vers le CSS spécifique pour la page About -->
<link rel="stylesheet" href="/assets/css/about.css">

<main class="about-container">
    <section class="about-header">
        <h1 data-translate="about_title">À Propos de Moi</h1>
        <p class="subtitle" data-translate="about_subtitle">Développeur Web Passionné</p>
        <div style="margin-top:2rem; text-align:center;">
            <a href="/cv" class="btn btn-primary" style="font-size:1.1em;">Voir mon CV</a>
            <span style="margin-left:1.5em; font-size:0.95em; color:#aaa;">(PDF bilingue disponible)</span>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="about-presentation">
        <div class="profile-image-container">
            <img src="/assets/images/profile.jpg" alt="Photo de profil" class="profile-image">
        </div>
        <div class="about-bio">
            <h2 data-translate="about_who_title">Qui suis-je ?</h2>
            <p><strong>Actuellement en B3 Informatique à Ynov</strong>, je suis passionné par le développement web, les réseaux et la cybersécurité. Mon parcours académique et mes expériences personnelles m'ont permis d'acquérir une expertise polyvalente, couvrant l'ensemble des domaines du numérique : du développement front-end et back-end à l'administration système, en passant par l'architecture réseau et la sécurité informatique.</p>
            <p>Au fil de ma formation, j'ai :
                <ul style="margin-left:1em;">
                    <li><strong>Développé des applications web</strong> modernes et performantes, en utilisant les dernières technologies (HTML, CSS, JavaScript, PHP, Node.js, Flutter…)</li>
                    <li><strong>Mis en place et sécurisé des infrastructures réseau</strong>, avec une attention particulière à la gestion des accès, la virtualisation, la configuration de serveurs (Linux/Windows), et la surveillance du trafic</li>
                    <li><strong>Approfondi la cybersécurité</strong>, à travers des projets de protection contre les attaques (XSS, CSRF…), la gestion des droits, la sécurisation des données et la sensibilisation aux bonnes pratiques</li>
                </ul>
            </p>
            <p>Je m'intéresse particulièrement à :
                <ul style="margin-left:1em;">
                    <li>La <strong>création de solutions innovantes</strong> (applications web, mobiles, outils d'automatisation…)</li>
                    <li>L'<strong>optimisation des performances</strong> et de la sécurité, aussi bien côté code que sur l'infrastructure</li>
                    <li>La <strong>résolution de problèmes complexes</strong> grâce à une approche méthodique, créative et orientée résultats</li>
                </ul>
            </p>
            <p><strong>Curieux, rigoureux et toujours en veille technologique</strong>, je cherche à relever de nouveaux défis dans le développement, le réseau et la cybersécurité, afin de contribuer à des projets ambitieux et à forte valeur ajoutée.</p>
        </div>
    </section>

    <!-- Section Parcours -->
    <section class="about-parcours">
        <div class="parcours-container">
            <h2 data-translate="about_path_title">Mon Parcours</h2>
            <p class="parcours-intro">
                Je serai en <strong>B3 Informatique</strong> à Ynov à partir de fin septembre 2025.<br>
                <strong>N'hésitez pas à me contacter</strong> si vous avez besoin d'aide ou de conseils en développement web, cybersécurité, infrastructure, ou tout autre domaine informatique.<br>
                Je suis actuellement <strong>en recherche d'une alternance</strong> dans les Bouches-du-Rhône, le Var, ou autour d'Aix, Marseille, Vitrolles, et environs.
            </p>
            <div class="parcours-item">
                <h3 data-translate="about_timeline_date">2023 - Présent</h3>
                <h4 data-translate="about_timeline_title">B3 Informatique</h4>
                <p data-translate="about_timeline_school">Ynov Campus</p>
                <ul class="competence-list">
                    <li class="competence-item" data-translate="about_timeline_item1">Développement web avancé</li>
                    <li class="competence-item" data-translate="about_timeline_item2">Architecture logicielle</li>
                    <li class="competence-item" data-translate="about_timeline_item3">Gestion de projets</li>
                </ul>
            </div>
            <!-- Vous pouvez ajouter d'autres éléments de parcours ici -->
        </div>
    </section>

    <!-- Section Compétences -->
    <section class="about-competences">
        <div class="competences-container">
            <h2 data-translate="about_skills_title">Mes Compétences</h2>
            <div class="competences-grid">
                <div class="competence-category">
                    <h3 data-translate="about_webdev_title">Développement Web</h3>
                    <ul class="competence-list">
                        <li class="competence-item">HTML/CSS</li>
                        <li class="competence-item">JavaScript</li>
                        <li class="competence-item">PHP</li>
                    </ul>
                </div>

                <div class="competence-category">
                    <h3 data-translate="about_tech_title">Autres Technologies</h3>
                    <ul class="competence-list">
                        <li class="competence-item">Python</li>
                        <li class="competence-item">C#</li>
                        <li class="competence-item">Golang</li>
                        <li class="competence-item">Flutter</li>
                    </ul>
                </div>

                <div class="competence-category">
                    <h3 data-translate="about_soft_title">Soft Skills</h3>
                    <ul class="competence-list">
                        <li class="competence-item" data-translate="about_soft_teamwork">Travail d'équipe</li>
                        <li class="competence-item" data-translate="about_soft_problem">Résolution de problèmes</li>
                        <li class="competence-item" data-translate="about_soft_comm">Communication</li>
                        <li class="competence-item" data-translate="about_soft_auto">Autonomie</li>
                        <li class="competence-item" data-translate="about_soft_adapt">Adaptabilité</li>
                        <li class="competence-item" data-translate="about_soft_org">Organisation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Centres d'intérêt -->
    <section class="about-interets">
        <div class="interets-container">
            <h2 data-translate="about_interests_title">Centres d'Intérêt</h2>
            <div class="interets-grid">
                <div class="interet-item">
                    <i class="fas fa-code"></i>
                    <h3 style="font-weight:bold; font-size:1.5em; margin-bottom:10px;">Programmation, Technologies Web & Architecture</h3>
                    <p style="margin-bottom:8px;"><strong>Exploration de nouveaux langages et frameworks</strong></p>
                    <p style="margin-bottom:8px;"><strong>Veille technologique et expérimentation</strong></p>
                    <p style="margin-bottom:0;"><strong>Conception de systèmes évolutifs</strong></p>
                </div>
                <div class="interet-item">
                    <i class="fas fa-shield-alt"></i>
                    <h3 data-translate="about_interest4_title">Cybersécurité</h3>
                    <p data-translate="about_interest4_desc">
                        J'approfondis la cybersécurité à travers la création et la résolution de challenges CTF.<br>
                        <strong>1ère année :</strong> Création de challenges pour <a href="https://hackin.fr" target="_blank" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;">Hack'In</a> (ex-Hacky'nov).<br>
                        <strong>2ème année :</strong> Participation à plusieurs CTF (Hack'In, Ynov Aix-en-Provence, etc.).<br>
                        Apprentissage continu en sécurité offensive et sensibilisation à la protection des données.
                    </p>
                </div>
                <div class="interet-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Développement Mobile</h3>
                    <p>
                        Je souhaite développer et publier à l'avenir des applications mobiles sur le Play Store, en utilisant Flutter ou React Native, pour explorer de nouvelles idées et technologies.<br><br>
                        <strong>Vous avez un projet ou souhaitez collaborer ?</strong><br>
                        Contactez-moi à l'adresse suivante&nbsp;:<br>
                        <a href="mailto:hugo.bisserier.dev@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;word-break:break-all;overflow-wrap:anywhere;font-size:0.97em;">hugo.bisserier.dev@gmail.com</a><br>
                        pour échanger et travailler ensemble sur des applications innovantes.
                    </p>
                </div>
                <div class="interet-item">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Veille & Innovation</h3>
                    <p>
                        Passionné par l'innovation, je teste régulièrement de nouveaux outils, technologies et concepts pour rester à la pointe et nourrir ma créativité. Cette curiosité me permet d'anticiper les évolutions du secteur et d'apporter des solutions modernes à mes projets.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>