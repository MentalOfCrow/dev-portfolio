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
            <a href="/cv" class="btn btn-primary" style="font-size:1.1em;" data-translate="about_cv_button">Voir mon CV</a>
            <span style="margin-left:1.5em; font-size:0.95em; color:#aaa;" data-translate="about_cv_note">(PDF bilingue disponible)</span>
        </div>
    </section>

    <!-- Section Présentation -->
    <section class="about-presentation">
        <div class="profile-image-container">
            <img src="/assets/images/profile.jpg" alt="Photo de profil" class="profile-image">
        </div>
        <div class="about-bio">
            <h2 data-translate="about_who_title">Qui suis-je ?</h2>
            <p data-translate="about_who_text1"><strong>Admis en B3 Informatique à Ynov (rentrée fin septembre 2025)</strong>, je suis passionné par le développement web, les réseaux et la cybersécurité. Mon parcours académique et mes expériences personnelles m'ont permis d'acquérir une expertise polyvalente, couvrant l'ensemble du numérique : du front-end et back-end à l'administration système, en passant par l'architecture réseau et la sécurité informatique.</p>
            <p data-translate="about_who_text2">Au fil de ma formation, j'ai :
                <ul style="margin-left:1em;">
                    <li data-translate="about_who_list1"><strong>Développé des applications web</strong> modernes et performantes (HTML, CSS, JavaScript, PHP, Node.js, Flutter…).</li>
                    <li data-translate="about_who_list2"><strong>Mis en place et sécurisé des infrastructures réseau</strong> (gestion des accès, virtualisation, serveurs Linux/Windows, supervision du trafic).</li>
                    <li data-translate="about_who_list3"><strong>Approfondi la cybersécurité</strong> (mitigation XSS/CSRF, gestion des droits, sécurisation des données, sensibilisation).</li>
                </ul>
            </p>
            <p data-translate="about_who_text3">Je m'intéresse particulièrement à :
                <ul style="margin-left:1em;">
                    <li data-translate="about_who_interest1">La <strong>création de solutions innovantes</strong> (applications web, mobiles, outils d'automatisation).</li>
                    <li data-translate="about_who_interest2">L'<strong>optimisation des performances et de la sécurité</strong>, du code à l'infrastructure.</li>
                    <li data-translate="about_who_interest3">La <strong>résolution de problèmes complexes</strong> avec une approche méthodique, créative et orientée résultats.</li>
                </ul>
            </p>
            <p data-translate="about_who_text4"><strong>Curieux, rigoureux et toujours en veille</strong>, je souhaite contribuer à des projets à forte valeur ajoutée en développement, réseau et cybersécurité.</p>
        </div>
    </section>

    <!-- Section Parcours -->
    <section class="about-parcours">
        <div class="parcours-container">
            <h2 data-translate="about_path_title">Mon Parcours</h2>
            <p class="parcours-intro" data-translate="about_path_intro">
                <strong>Ynov Campus — Cycle Bachelor Informatique (admis en B3, rentrée fin sept. 2025)</strong><br>
                2023 – Présent<br><br>
                <strong>Modules :</strong> Développeur Full Stack • Architecture logicielle • Gestion de projets • Infrastructure • Cybersécurité
            </p>
            <div class="parcours-objectives">
                <h3 data-translate="about_path_objectives_title">Objectifs de parcours :</h3>
                <div class="objective-item">
                    <h4 data-translate="about_path_obj1_title">2025–2026 :</h4>
                    <p data-translate="about_path_obj1_desc">valider le Bac+3 en alternance, développer mes compétences en conditions réelles et créer de la valeur mesurable pour l'entreprise d'accueil (qualité, performance, sécurité, fiabilité), avec une volonté de continuité au sein de la même structure.</p>
                </div>
                <div class="objective-item">
                    <h4 data-translate="about_path_obj2_title">À partir de 2026 :</h4>
                    <p data-translate="about_path_obj2_desc">poursuivre un Bac+5 (Mastère), idéalement en alternance, dans une voie généraliste en informatique, avec consolidation selon les besoins de l'entreprise (développement, infrastructure/Cloud, cybersécurité/SecOps), en privilégiant la poursuite au sein de la même entreprise lorsque possible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact & Disponibilité -->
    <section class="about-contact-availability">
        <div class="contact-container">
            <h2 data-translate="about_contact_title">Contact & Disponibilité</h2>
            <div class="contact-content">
                <p data-translate="about_contact_intro">Ouvert aux échanges et à l'étude de vos besoins (développement web, cybersécurité, infrastructure).</p>
                <p data-translate="about_contact_availability">Recherche une alternance à partir de fin septembre 2025, dans les Bouches-du-Rhône ou le Var (toute ville de ces départements).</p>
                <div class="contact-highlight">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:hugo.bisserier.pro@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;" data-translate="about_contact_email">hugo.bisserier.pro@gmail.com</a>
                </div>
            </div>
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
                        <h3 data-translate="about_programming_title">Programmation, Technologies Web & Architecture</h3>
                        <div class="interest-content">
                            <p data-translate="about_programming_desc1"><strong>Exploration de nouveaux langages et frameworks</strong></p>
                            <p data-translate="about_programming_desc2"><strong>Veille technologique et expérimentation</strong></p>
                            <p data-translate="about_programming_desc3"><strong>Conception de systèmes évolutifs</strong></p>
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
                        <h3 data-translate="about_mobile_dev_title">Développement Mobile</h3>
                        <div class="interest-content">
                            <p data-translate="about_mobile_dev_desc">
                                Je souhaite développer et publier à l'avenir des applications mobiles sur le Play Store, en utilisant Flutter ou React Native, pour explorer de nouvelles idées et technologies.<br><br>
                                <strong>Vous avez un projet ou souhaitez collaborer ?</strong><br>
                                Contactez-moi à l'adresse suivante :<br>
                                <a href="mailto:hugo.bisserier.pro@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;word-break:break-all;overflow-wrap:anywhere;">hugo.bisserier.pro@gmail.com</a><br>
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
