<?php
$title = "À Propos";
$current_page = "about";
?>

<main class="container">
    <section class="page-header">
        <h1 data-translate="about_title">À Propos de Moi</h1>
        <p class="subtitle" data-translate="about_subtitle">Développeur Web Passionné</p>
    </section>

    <div class="about-container">
        <!-- Section Présentation -->
        <section class="about-section">
            <div class="about-content">
                <div class="about-image">
                    <img src="/assets/images/profile.jpg" alt="Photo de profil" class="profile-image">
                </div>
                <div class="about-text">
                    <h2 data-translate="about_who_title">Qui suis-je ?</h2>
                    <p data-translate="about_who_text1">Actuellement en B2 Informatique à Ynov, je suis passionné par le développement web et les nouvelles technologies. Mon parcours m'a permis de développer une expertise variée, allant du développement front-end au back-end, en passant par l'infrastructure et la gestion de bases de données.</p>
                    <p data-translate="about_who_text2">Je m'intéresse particulièrement à la création d'applications web innovantes et à l'optimisation des performances. Ma formation et mes projets personnels m'ont permis de développer une approche méthodique et créative de la résolution de problèmes.</p>
                </div>
            </div>
        </section>

        <!-- Section Parcours -->
        <section class="about-section">
            <h2 data-translate="about_path_title">Mon Parcours</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date" data-translate="about_timeline_date">2023 - Présent</div>
                    <div class="timeline-content">
                        <h3 data-translate="about_timeline_title">B2 Informatique</h3>
                        <p data-translate="about_timeline_school">Ynov Campus</p>
                        <ul>
                            <li data-translate="about_timeline_item1">Développement web avancé</li>
                            <li data-translate="about_timeline_item2">Architecture logicielle</li>
                            <li data-translate="about_timeline_item3">Gestion de projets</li>
                        </ul>
                    </div>
                </div>
                <!-- Ajoutez d'autres éléments de parcours ici -->
            </div>
        </section>

        <!-- Section Compétences -->
        <section class="about-section">
            <h2 data-translate="about_skills_title">Mes Compétences</h2>
            <div class="skills-container">
                <div class="skills-category">
                    <h3 data-translate="about_webdev_title">Développement Web</h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <span class="skill-name">HTML/CSS</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">PHP</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills-category">
                    <h3 data-translate="about_tech_title">Autres Technologies</h3>
                    <div class="skills-list">
                        <div class="skill-item">
                            <span class="skill-name">Python</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">C#</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Golang</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills-category">
                    <h3 data-translate="about_soft_title">Soft Skills</h3>
                    <div class="soft-skills">
                        <span class="soft-skill" data-translate="about_soft_teamwork">Travail d'équipe</span>
                        <span class="soft-skill" data-translate="about_soft_problem">Résolution de problèmes</span>
                        <span class="soft-skill" data-translate="about_soft_comm">Communication</span>
                        <span class="soft-skill" data-translate="about_soft_auto">Autonomie</span>
                        <span class="soft-skill" data-translate="about_soft_adapt">Adaptabilité</span>
                        <span class="soft-skill" data-translate="about_soft_org">Organisation</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Centres d'intérêt -->
        <section class="about-section">
            <h2 data-translate="about_interests_title">Centres d'Intérêt</h2>
            <div class="interests-grid">
                <div class="interest-item">
                    <i class="fas fa-code"></i>
                    <h3 data-translate="about_interest1_title">Programmation</h3>
                    <p data-translate="about_interest1_desc">Exploration de nouveaux langages et frameworks</p>
                </div>
                <div class="interest-item">
                    <i class="fas fa-laptop-code"></i>
                    <h3 data-translate="about_interest2_title">Technologies Web</h3>
                    <p data-translate="about_interest2_desc">Veille technologique et expérimentation</p>
                </div>
                <div class="interest-item">
                    <i class="fas fa-project-diagram"></i>
                    <h3 data-translate="about_interest3_title">Architecture Logicielle</h3>
                    <p data-translate="about_interest3_desc">Conception de systèmes évolutifs</p>
                </div>
            </div>
        </section>
    </div>
</main> 