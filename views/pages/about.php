<?php
$title = "À Propos";
$current_page = "about";
?>

<!-- Lien vers le CSS spécifique pour la page About -->
<link rel="stylesheet" href="/assets/css/about.css">

<main class="about-container">
    <section class="about-header">
        <h1 data-translate="about_title">À Propos de Moi</h1>
        <p class="subtitle" data-translate="about_subtitle">Développeur Web Passionné</p>
    </section>

    <!-- Section Présentation -->
    <section class="about-presentation">
        <div class="profile-image-container">
            <img src="/assets/images/profile.jpg" alt="Photo de profil" class="profile-image">
        </div>
        <div class="about-bio">
            <h2 data-translate="about_who_title">Qui suis-je ?</h2>
            <p data-translate="about_who_text1">Actuellement en B2 Informatique à Ynov, je suis passionné par le développement web et les nouvelles technologies. Mon parcours m'a permis de développer une expertise variée, allant du développement front-end au back-end, en passant par l'infrastructure et la gestion de bases de données.</p>
            <p data-translate="about_who_text2">Je m'intéresse particulièrement à la création d'applications web innovantes et à l'optimisation des performances. Ma formation et mes projets personnels m'ont permis de développer une approche méthodique et créative de la résolution de problèmes.</p>
        </div>
    </section>

    <!-- Section Parcours -->
    <section class="about-parcours">
        <div class="parcours-container">
            <h2 data-translate="about_path_title">Mon Parcours</h2>
            <div class="parcours-item">
                <h3 data-translate="about_timeline_date">2023 - Présent</h3>
                <h4 data-translate="about_timeline_title">B2 Informatique</h4>
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
                    <h3 data-translate="about_interest1_title">Programmation</h3>
                    <p data-translate="about_interest1_desc">Exploration de nouveaux langages et frameworks</p>
                </div>
                <div class="interet-item">
                    <i class="fas fa-laptop-code"></i>
                    <h3 data-translate="about_interest2_title">Technologies Web</h3>
                    <p data-translate="about_interest2_desc">Veille technologique et expérimentation</p>
                </div>
                <div class="interet-item">
                    <i class="fas fa-project-diagram"></i>
                    <h3 data-translate="about_interest3_title">Architecture Logicielle</h3>
                    <p data-translate="about_interest3_desc">Conception de systèmes évolutifs</p>
                </div>
            </div>
        </div>
    </section>
</main> 