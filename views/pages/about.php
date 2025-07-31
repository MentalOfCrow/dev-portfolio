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

    <!-- Section Soft Skills -->
    <section class="about-soft-skills">
        <div class="soft-skills-container">
            <h2 data-translate="about_soft_skills_title">Mes Qualités Humaines</h2>
            <p class="soft-skills-intro" data-translate="about_soft_skills_intro">
                Au-delà de mes compétences techniques, je cultive des qualités humaines essentielles pour réussir en équipe et mener à bien des projets complexes.
            </p>
            <div class="soft-skills-grid">
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 data-translate="about_soft_teamwork">Travail d'équipe</h3>
                    <p data-translate="about_soft_teamwork_desc">Collaboration efficace et communication constructive</p>
                </div>
                
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 data-translate="about_soft_problem">Résolution de problèmes</h3>
                    <p data-translate="about_soft_problem_desc">Approche analytique et créative face aux défis</p>
                </div>
                
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 data-translate="about_soft_comm">Communication</h3>
                    <p data-translate="about_soft_comm_desc">Expression claire et écoute active</p>
                </div>
                
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3 data-translate="about_soft_auto">Autonomie</h3>
                    <p data-translate="about_soft_auto_desc">Initiative et prise de décision responsable</p>
                </div>
                
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 data-translate="about_soft_adapt">Adaptabilité</h3>
                    <p data-translate="about_soft_adapt_desc">Flexibilité face aux changements et nouveaux défis</p>
                </div>
                
                <div class="soft-skill-item">
                    <div class="soft-skill-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 data-translate="about_soft_org">Organisation</h3>
                    <p data-translate="about_soft_org_desc">Gestion efficace du temps et des priorités</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Unifiée : Centres d'Intérêt & Infrastructure -->
    <section class="about-unified-section">
        <div class="unified-container">
            <!-- Centres d'Intérêt -->
            <div class="section-block">
                <h2 data-translate="about_interests_title">Centres d'Intérêt</h2>
                <div class="interests-grid">
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Programmation, Technologies Web & Architecture</h3>
                        <div class="interest-content">
                            <p><strong>Exploration de nouveaux langages et frameworks</strong></p>
                            <p><strong>Veille technologique et expérimentation</strong></p>
                            <p><strong>Conception de systèmes évolutifs</strong></p>
                        </div>
                    </div>
                    
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 data-translate="about_interest4_title">Cybersécurité</h3>
                        <div class="interest-content">
                            <p data-translate="about_interest4_desc">
                                J'approfondis la cybersécurité à travers la création et la résolution de challenges CTF.<br>
                                <strong>1ère année :</strong> Création de challenges pour <a href="https://hackin.fr" target="_blank" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;">Hack'In</a> (ex-Hacky'nov).<br>
                                <strong>2ème année :</strong> Participation à plusieurs CTF (Hack'In, Ynov Aix-en-Provence, etc.).<br>
                                Apprentissage continu en sécurité offensive et sensibilisation à la protection des données.
                            </p>
                        </div>
                    </div>
                    
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Développement Mobile</h3>
                        <div class="interest-content">
                            <p>
                                Je souhaite développer et publier à l'avenir des applications mobiles sur le Play Store, en utilisant Flutter ou React Native, pour explorer de nouvelles idées et technologies.<br><br>
                                <strong>Vous avez un projet ou souhaitez collaborer ?</strong><br>
                                Contactez-moi à l'adresse suivante :<br>
                                <a href="mailto:hugo.bisserier.dev@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;word-break:break-all;overflow-wrap:anywhere;">hugo.bisserier.dev@gmail.com</a><br>
                                pour échanger et travailler ensemble sur des applications innovantes.
                            </p>
                        </div>
                    </div>
                    
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 data-translate="about_interest_innovation_title">Veille & Innovation</h3>
                        <div class="interest-content">
                            <p data-translate="about_interest_innovation_desc">
                                Passionné par l'<strong>innovation</strong>, je teste régulièrement de <strong>nouveaux outils, technologies et concepts</strong> pour rester à la pointe et nourrir ma créativité. Cette <strong>curiosité</strong> me permet d'<strong>anticiper les évolutions du secteur</strong> et d'apporter des <strong>solutions modernes</strong> à mes projets.
                            </p>
                        </div>
                    </div>
                    
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-chess"></i>
                        </div>
                        <h3 data-translate="about_interest_chess_title">Jeux d'Échecs</h3>
                        <div class="interest-content">
                            <p data-translate="about_interest_chess_desc">
                                Passionné par les échecs, j'apprécie ce jeu pour sa <strong>dimension stratégique et logique</strong>. 
                                La <strong>réflexion</strong>, l'<strong>anticipation</strong> et l'<strong>analyse des positions</strong> développent des compétences 
                                transversales utiles en <strong>programmation</strong> et <strong>résolution de problèmes complexes</strong>.
                            </p>
                        </div>
                    </div>
                    
                    <div class="interest-item">
                        <div class="interest-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h3 data-translate="about_interest_tech_news_title">Actualités Technologiques</h3>
                        <div class="interest-content">
                            <p data-translate="about_interest_tech_news_desc">
                                <strong>Suivi quotidien</strong> des actualités tech, des <strong>nouvelles versions de frameworks</strong>, 
                                des <strong>innovations en IA et cybersécurité</strong>. Cette <strong>veille constante</strong> me permet de rester 
                                informé des évolutions du secteur et d'<strong>anticiper les technologies de demain</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Séparateur visuel -->
            <div class="section-divider">
                <div class="divider-line"></div>
                <div class="divider-icon">
                    <i class="fas fa-code-branch"></i>
                </div>
                <div class="divider-line"></div>
            </div>

            <!-- Infrastructure & Cloud -->
            <div class="section-block">
                <h2 data-translate="about_infrastructure_title">Infrastructure & Cloud</h2>
                <div class="infrastructure-intro">
                    <p data-translate="about_infrastructure_intro">
                        Ma vision transversale me permet d'assurer la cohérence entre développement, infrastructure et sécurité. 
                        Je conçois des solutions complètes qui répondent aux besoins métier tout en garantissant performance, sécurité et maintenabilité.
                    </p>
                </div>
                
                <div class="infrastructure-skills">
                    <div class="skill-category">
                        <div class="category-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 data-translate="about_infra_systems_title">Systèmes & Virtualisation</h3>
                        <div class="skill-tags">
                            <span class="skill-tag">Hyper-V</span>
                            <span class="skill-tag">VMware</span>
                            <span class="skill-tag">VirtualBox</span>
                            <span class="skill-tag">Windows Server</span>
                            <span class="skill-tag">Linux</span>
                        </div>
                    </div>
                    
                    <div class="skill-category">
                        <div class="category-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 data-translate="about_infra_cloud_title">Cloud & DevOps</h3>
                        <div class="skill-tags">
                            <span class="skill-tag">AWS</span>
                            <span class="skill-tag">Azure</span>
                            <span class="skill-tag">Google Cloud</span>
                            <span class="skill-tag">Docker</span>
                            <span class="skill-tag">CI/CD</span>
                        </div>
                    </div>
                    
                    <div class="skill-category">
                        <div class="category-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 data-translate="about_infra_security_title">Réseaux & Cybersécurité</h3>
                        <div class="skill-tags">
                            <span class="skill-tag">TCP/IP</span>
                            <span class="skill-tag">VPN</span>
                            <span class="skill-tag">Pare-feu</span>
                            <span class="skill-tag">Pentest</span>
                            <span class="skill-tag">Audit</span>
                        </div>
                    </div>
                </div>
                
                <div class="infrastructure-highlight">
                    <i class="fas fa-rocket"></i>
                    <p data-translate="about_infra_highlight">
                        <strong>De l'infrastructure au code :</strong> Je maîtrise l'ensemble de la stack technique, 
                        du déploiement serveur à l'application finale, en passant par la sécurisation et l'optimisation des performances.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
