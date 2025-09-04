// Version ultra-simple du script principal
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initialisation du script');
    
    // MENU MOBILE
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }
    
    // THÈME JOUR/NUIT
    const themeToggle = document.querySelector('.theme-toggle');
    console.log('THEME TOGGLE FOUND:', themeToggle);
    
    if (themeToggle) {
        // Appliquer le thème sauvegardé
        const savedTheme = localStorage.getItem('theme');
        console.log('SAVED THEME:', savedTheme);
        if (savedTheme === 'light') {
            document.body.classList.add('light-theme');
            document.body.classList.remove('dark-theme');
            console.log('APPLIED LIGHT THEME');
        } else {
            // Par défaut dark
            document.body.classList.add('dark-theme');
            document.body.classList.remove('light-theme');
            console.log('APPLIED DARK THEME');
        }
        
        // Changer le thème au clic
        themeToggle.addEventListener('click', function() {
            console.log('BUTTON CLICKED!');
            if (document.body.classList.contains('light-theme')) {
                document.body.classList.remove('light-theme');
                document.body.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
                console.log('SWITCHED TO DARK');
            } else {
                document.body.classList.remove('dark-theme');
                document.body.classList.add('light-theme');
                localStorage.setItem('theme', 'light');
                console.log('SWITCHED TO LIGHT');
            }
            console.log('BODY CLASSES:', document.body.classList);
        });
    } else {
        console.log('THEME TOGGLE NOT FOUND!');
    }
    
    // ANIMATION DES BARRES DE COMPÉTENCES
    const skillLevels = document.querySelectorAll('.skill-level');
    
    if (skillLevels.length > 0) {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const level = entry.target.getAttribute('data-level');
                    const levelBar = entry.target.querySelector('.level-bar');
                    if (levelBar) {
                        levelBar.style.width = level + '%';
                    }
                }
            });
        }, { threshold: 0.5 });
        
        skillLevels.forEach(function(level) {
            observer.observe(level);
        });
    }
    
    // SYSTÈME DE TRADUCTION ULTRA-SIMPLE
    
    // 1. Dictionnaire de traduction
    const translations = {
        'fr': {
            // Navigation
            'nav_home': 'Accueil',
            'nav_about': 'À propos',
            'nav_skills': 'Compétences',
            'nav_experiences': 'Expériences',
            'nav_projects': 'Projets',
            'nav_contact': 'Contact',
            'nav_cv': 'CV',
            
            // Page d'accueil
            'hero_subtitle': 'Développeur Full Stack • Infrastructure & Cloud • Cybersécurité',
            'hero_description': 'Passionné par les technologies, je conçois des solutions complètes :<br><br>• Interfaces web modernes et expériences utilisateurs soignées<br>• Back-ends robustes et pipelines DevOps automatisés<br>• Environnements serveurs sécurisés, audits de vulnérabilités et bonnes pratiques SecOps<br><br>Cette polyvalence me permet d\'adapter l\'architecture et la sécurité de chaque projet aux besoins réels des utilisateurs comme des équipes.',
            'hero_projects_btn': 'Voir mes projets',
            'hero_contact_btn': 'Me contacter',
            
            // Page À propos
            'about_title': 'À Propos de Moi',
            'about_subtitle': 'Développeur Web Passionné',
            'about_cv_button': 'Voir mon CV',
            'about_cv_note': '(PDF bilingue disponible)',
            'about_who_title': 'Qui suis-je ?',
            'about_who_text1': '<strong>Admis en B3 Informatique à Ynov (rentrée fin septembre 2025)</strong>, je suis passionné par le développement web, les réseaux et la cybersécurité. Mon parcours académique et mes expériences personnelles m\'ont permis d\'acquérir une expertise polyvalente, couvrant l\'ensemble du numérique : du front-end et back-end à l\'administration système, en passant par l\'architecture réseau et la sécurité informatique.',
            'about_who_text2': 'Au fil de ma formation, j\'ai :',
            'about_who_list1': '<strong>Développé des applications web</strong> modernes et performantes (HTML, CSS, JavaScript, PHP, Node.js, Flutter…).',
            'about_who_list2': '<strong>Mis en place et sécurisé des infrastructures réseau</strong> (gestion des accès, virtualisation, serveurs Linux/Windows, supervision du trafic).',
            'about_who_list3': '<strong>Approfondi la cybersécurité</strong> (mitigation XSS/CSRF, gestion des droits, sécurisation des données, sensibilisation).',
            'about_who_text3': 'Je m\'intéresse particulièrement à :',
            'about_who_interest1': 'La <strong>création de solutions innovantes</strong> (applications web, mobiles, outils d\'automatisation).',
            'about_who_interest2': 'L\'<strong>optimisation des performances et de la sécurité</strong>, du code à l\'infrastructure.',
            'about_who_interest3': 'La <strong>résolution de problèmes complexes</strong> avec une approche méthodique, créative et orientée résultats.',
            'about_who_text4': '<strong>Curieux, rigoureux et toujours en veille</strong>, je souhaite contribuer à des projets à forte valeur ajoutée en développement, réseau et cybersécurité.',
            'about_path_title': 'Mon Parcours',
            'about_path_intro': '<strong>Ynov Campus — Cycle Bachelor Informatique (admis en B3, rentrée fin sept. 2025)</strong><br>2023 – Présent<br><br><strong>Modules :</strong> Développeur Full Stack • Architecture logicielle • Gestion de projets • Infrastructure • Cybersécurité',
            'about_path_objectives_title': 'Objectifs de parcours :',
            'about_path_obj1_title': '2025–2026 :',
            'about_path_obj1_desc': 'valider le Bac+3 en alternance, développer mes compétences en conditions réelles et créer de la valeur mesurable pour l\'entreprise d\'accueil (qualité, performance, sécurité, fiabilité), avec une volonté de continuité au sein de la même structure.',
            'about_path_obj2_title': 'À partir de 2026 :',
            'about_path_obj2_desc': 'poursuivre un Bac+5 (Mastère), idéalement en alternance, dans une voie généraliste en informatique, avec consolidation selon les besoins de l\'entreprise (développement, infrastructure/Cloud, cybersécurité/SecOps), en privilégiant la poursuite au sein de la même entreprise lorsque possible.',
            'about_contact_title': 'Contact & Disponibilité',
            'about_contact_intro': 'Ouvert aux échanges et à l\'étude de vos besoins (développement web, cybersécurité, infrastructure).',
            'about_contact_availability': 'Recherche une alternance à partir de fin septembre 2025, dans les Bouches-du-Rhône ou le Var (toute ville de ces départements).',
            'about_contact_email': 'hugo.bisserier.pro@gmail.com',
            'about_timeline_date': '2023 - 2025',
            'about_timeline_title': 'B3 Informatique',
            'about_timeline_school': 'Ynov Campus',
            'about_timeline_item1': 'Développement web avancé',
            'about_timeline_item2': 'Architecture logicielle',
            'about_timeline_item3': 'Gestion de projets',
            'about_timeline_item4': 'Infrastructure',
            'about_timeline_item5': 'Cybersécurité',
            'about_skills_title': 'Mes Compétences',
            'about_webdev_title': 'Développement Web',
            'about_tech_title': 'Autres Technologies',
            'about_soft_title': 'Soft Skills',
            'about_soft_skills_title': 'Mes Qualités Humaines',
            'about_soft_skills_intro': 'Au-delà de mes compétences techniques, je cultive des qualités humaines essentielles pour réussir en équipe et mener à bien des projets complexes.',
            'about_soft_teamwork': 'Travail d\'équipe',
            'about_soft_teamwork_desc': 'Collaboration efficace et communication constructive',
            'about_soft_problem': 'Résolution de problèmes',
            'about_soft_problem_desc': 'Approche analytique et créative face aux défis',
            'about_soft_comm': 'Communication',
            'about_soft_comm_desc': 'Expression claire et écoute active',
            'about_soft_auto': 'Autonomie',
            'about_soft_auto_desc': 'Initiative et prise de décision responsable',
            'about_soft_adapt': 'Adaptabilité',
            'about_soft_adapt_desc': 'Flexibilité face aux changements et nouveaux défis',
            'about_soft_org': 'Organisation',
            'about_soft_org_desc': 'Gestion efficace du temps et des priorités',
            
            // Infrastructure & Cloud
            'about_infrastructure_title': 'Infrastructure & Cloud',
            'about_infrastructure_intro': 'Ma vision transversale me permet d\'assurer la cohérence entre développement, infrastructure et sécurité. Je conçois des solutions complètes qui répondent aux besoins métier tout en garantissant performance, sécurité et maintenabilité.',
            'about_infra_systems_title': 'Systèmes & Virtualisation',
            'about_infra_cloud_title': 'Cloud & DevOps',
            'about_infra_security_title': 'Réseaux & Cybersécurité',
            'about_infra_highlight': '<strong>De l\'infrastructure au code :</strong> Je maîtrise l\'ensemble de la stack technique, du déploiement serveur à l\'application finale, en passant par la sécurisation et l\'optimisation des performances.',
            
            'about_interests_title': 'Centres d\'Intérêt',
            'about_programming_title': 'Programmation, Technologies Web & Architecture',
            'about_programming_desc1': '<strong>Exploration de nouveaux langages et frameworks</strong>',
            'about_programming_desc2': '<strong>Veille technologique et expérimentation</strong>',
            'about_programming_desc3': '<strong>Conception de systèmes évolutifs</strong>',
            'about_mobile_dev_title': 'Développement Mobile',
            'about_mobile_dev_desc': 'Je souhaite développer et publier à l\'avenir des applications mobiles sur le Play Store, en utilisant Flutter ou React Native, pour explorer de nouvelles idées et technologies.<br><br><strong>Vous avez un projet ou souhaitez collaborer ?</strong><br>Contactez-moi à l\'adresse suivante :<br><a href="mailto:hugo.bisserier.pro@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;word-break:break-all;overflow-wrap:anywhere;">hugo.bisserier.pro@gmail.com</a><br>pour échanger et travailler ensemble sur des applications innovantes.',
            'about_interest1_title': 'Programmation',
            'about_interest1_desc': 'Exploration de nouveaux langages et frameworks',
            'about_interest2_title': 'Technologies Web',
            'about_interest2_desc': 'Veille technologique et expérimentation',
            'about_interest3_title': 'Architecture Logicielle',
            'about_interest3_desc': 'Conception de systèmes évolutifs',
            'about_interest4_title': 'Cybersécurité',
            'about_interest4_desc': 'J\'approfondis la cybersécurité à travers la création et la résolution de challenges CTF.<br><strong>1ère année :</strong> Création de challenges pour <a href="https://hackin.fr" target="_blank" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;">Hack\'In</a> (ex-Hacky\'nov).<br><strong>2ème année :</strong> Participation à plusieurs CTF (Hack\'In, Ynov Aix-en-Provence, etc.).<br>Apprentissage continu en sécurité offensive et sensibilisation à la protection des données.',
            'about_interest_innovation_title': 'Veille & Innovation',
            'about_interest_innovation_desc': 'Passionné par l\'<strong>innovation</strong>, je teste régulièrement de <strong>nouveaux outils, technologies et concepts</strong> pour rester à la pointe et nourrir ma créativité. Cette <strong>curiosité</strong> me permet d\'<strong>anticiper les évolutions du secteur</strong> et d\'apporter des <strong>solutions modernes</strong> à mes projets.',
            'about_interest_chess_title': 'Jeux d\'Échecs',
            'about_interest_chess_desc': 'Passionné par les échecs, j\'apprécie ce jeu pour sa <strong>dimension stratégique et logique</strong>. La <strong>réflexion</strong>, l\'<strong>anticipation</strong> et l\'<strong>analyse des positions</strong> développent des compétences transversales utiles en <strong>programmation</strong> et <strong>résolution de problèmes complexes</strong>.',
            'about_interest_tech_news_title': 'Actualités Technologiques',
            'about_interest_tech_news_desc': '<strong>Suivi quotidien</strong> des actualités tech, des <strong>nouvelles versions de frameworks</strong>, des <strong>innovations en IA et cybersécurité</strong>. Cette <strong>veille constante</strong> me permet de rester informé des évolutions du secteur et d\'<strong>anticiper les technologies de demain</strong>.',
            
            // Page Compétences
            'skills_title': 'Mes Compétences',
            'skills_subtitle': 'Expertise technique et outils maîtrisés',
            'skills_languages_title': 'Langages de Programmation',
            'skills_php_1': 'Développement Backend',
            'skills_php_2': 'API REST',
            'skills_php_3': 'Gestion BDD',
            'skills_js_1': 'ES6+',
            'skills_js_2': 'DOM Manipulation',
            'skills_js_3': 'Asynchrone',
            'skills_python_1': 'Data Analysis',
            'skills_python_2': 'Pandas & NumPy',
            'skills_python_3': 'Automatisation',
            'skills_go_1': 'Backend Development',
            'skills_go_2': 'Concurrence',
            'skills_go_3': 'APIs',
            'skills_csharp_1': 'Développement .NET',
            'skills_csharp_2': 'Blazor',
            'skills_csharp_3': 'Applications Windows',
            'skills_java_1': 'POO',
            'skills_java_2': 'Spring Boot',
            'skills_java_3': 'Applications Android',
            'skills_reactnative_1': 'Applications mobiles',
            'skills_reactnative_2': 'Navigation',
            'skills_reactnative_3': 'Hooks',
            'skills_web_title': 'Technologies Web',
            'skills_html_1': 'Responsive Design',
            'skills_html_2': 'Flexbox/Grid',
            'skills_html_3': 'Animations',
            'skills_css_1': 'Tailwind CSS',
            'skills_css_2': 'Bootstrap',
            'skills_css_3': 'SASS/SCSS',
            'skills_infra_title': 'Infrastructure & Cloud • Cybersécurité',
            'skills_virt_1': 'Hyper-V',
            'skills_virt_2': 'VirtualBox',
            'skills_virt_3': 'VMware',
            'skills_os_1': 'Windows Server',
            'skills_os_2': 'Linux (Ubuntu, CentOS)',
            'skills_os_3': 'Administration système',
            'skills_network_1': 'Configuration réseau',
            'skills_network_2': 'Routage et switching',
            'skills_network_3': 'Firewall et sécurité',
            'skills_security_1': 'Analyse de vulnérabilités',
            'skills_security_2': 'Durcissement système',
            'skills_security_3': 'Monitoring et audit',
            'skills_devops_1': 'Docker',
            'skills_devops_2': 'CI/CD Pipelines',
            'skills_devops_3': 'Automatisation',
            'skills_cloud_1': 'Architecture cloud',
            'skills_cloud_2': 'Services web',
            'skills_cloud_3': 'Haute disponibilité',
            'skills_tools_title': 'Outils et Environnements',
            'skills_git_title': 'Contrôle de Version',
            'skills_db_title': 'Bases de Données',
            'skills_server_title': 'Serveurs & Déploiement',
            'skills_dev_title': 'Outils de Développement',
            
            // Page Projets
            // Page Expériences
            'experiences_title': 'Expériences',
            'experiences_subtitle': 'Stages et expériences professionnelles',
            'experiences_intro': 'Aperçu concis de mes expériences. Chaque stage est résumé en quelques lignes, avec un lien direct pour télécharger le rapport complet au format PDF.',
            // Page Expériences – blocs détaillés
            'meb_title': 'MEB — Stage 2023–2024',
            'meb_company_line': '<strong>Entreprise :</strong> MEB (Mobilité Énergie Bâtiment) — Bègles',
            'meb_summary': 'Immersion en économie de la construction : suivi de projets, coordination des intervenants, participation aux réceptions de travaux et mise à jour des tableaux de bord. Découverte des outils métier (MS Project, AutoCAD/Revit) et des processus DO.',
            'meb_tags': 'Gestion de projet · Suivi chantier · Bureautique pro',
            'shf_title': 'S.H.F. Informatique — Stage 2024–2025',
            'shf_company_line': '<strong>Entreprise :</strong> S.H.F. Informatique — Marseille',
            'shf_summary': 'Administration systèmes & réseaux : AD/DNS/DHCP/GPO, laboratoire Hyper-V et procédures. Maquette Fortinet, POC IDS (SELKS/Suricata) et standardisation pour réduire les incidents. Documentation opérationnelle et mini-formations internes.',
            'shf_tags': 'Windows Server · Hyper-V · GPO · Fortinet · Suricata/SELKS',
            'experiences_soon_title': 'À venir — 2025–2026',
            'soon_summary': 'Expérience en préparation dans le domaine des systèmes, réseaux et cybersécurité. Périmètre encore en cours de définition ; plus d’informations seront ajoutées prochainement.',
            'soon_tags': 'Systèmes & Réseaux · Cybersécurité · Observabilité',
            'soon_badge': 'En préparation',
            'pdf_download_fr_only': '📄 Télécharger le rapport (PDF — uniquement en français)',
            'experiences_b1_title': 'Stage – 2023–2024 (B1)',
            'experiences_b1_company': 'M.E.B.',
            'experiences_b1_period': 'Année 2023–2024',
            'experiences_b1_download': 'Télécharger le rapport complet (PDF)',
            'experiences_b2_title': 'Stage – Administrateur Systèmes, Réseaux & Cybersécurité',
            'experiences_b2_company': 'S.H.F. Informatique (Marseille)',
            'experiences_b2_period': '13 juin 2025 – 7 août 2025',
            'experiences_b2_supervisor': 'Encadrant : Alain Dadourian',
            'experiences_missions': 'Missions',
            'experiences_tools': 'Technos / Outils',
            'experiences_b2_download': 'Télécharger le rapport complet (PDF)',
            'experiences_coming_soon': 'D’autres expériences (B1, B3, alternance) seront ajoutées prochainement.',
            'experiences_soon_title': '2025–2026 — À venir',
            'experiences_reports_title': 'Rapports de stage',
            'experiences_b1_report_btn': 'Rapport de stage B1 (M.E.B.)',
            'experiences_b2_report_btn': 'Rapport de stage B2 (S.H.F. Marseille)',
            'projects_title': 'Mes Projets',
            'projects_subtitle': 'Découvrez mes réalisations et projets personnels',
            'projects_view_btn': 'Voir le projet',
            'projects_technologies': 'Technologies',
            'projects_key_features': 'Fonctionnalités clés',
            'projects_view_demo': 'Voir la démo',
            'projects_view_code': 'Voir le code',
            'project1_title': 'Projet Red',
            'project1_desc': 'Un projet ambitieux explorant de nouvelles approches en développement web avec des fonctionnalités avancées.',
            'project2_title': 'Boutique en Ligne',
            'project2_desc': 'Un site e-commerce complet avec gestion des produits, utilisateurs et commandes.',
            'project3_title': 'Création d\'un Blog',
            'project3_desc': 'Un blog complet avec système de publication d\'articles et gestion des utilisateurs.',
            'project4_title': 'Golanta',
            'project4_desc': 'Un jeu de survie et d\'aventure avec création et personnalisation d\'aventuriers.',
            'project5_title': 'Infrastructure Architecture Client-Serveur',
            'project5_desc': 'Conception et mise en place d\'un système d\'information pour une petite entreprise.',
            'project6_title': 'Analyse et Manipulation de Données avec Python',
            'project6_desc': 'Projet d\'analyse de données utilisant Python et ses bibliothèques scientifiques.',
            'project7_title': 'Mini-Projets C#',
            'project7_desc': 'Série de mini-projets en C# incluant une calculatrice, météo, morpion, quiz et jeu de cartes.',
            'project8_title': 'FabLab - Digitalisation des Commandes',
            'project8_desc': 'Application de gestion des commandes d\'impressions 3D pour un FabLab.',
            'project9_title': 'Jeu de Dames',
            'project9_desc': 'Développement d\'un jeu de dames en ligne avec gestion des parties et des joueurs.',
            'project10_title': 'FridgeVision',
            'project10_desc': 'Application mobile Flutter basée sur l\'IA pour réduire le gaspillage alimentaire, détecter les aliments et générer des recettes personnalisées.',
            
            // Page Contact
            'contact_title': 'Contactez-moi',
            'contact_lead': 'N\'hésitez pas à me contacter pour toute question ou proposition de collaboration.',
            'contact_email': 'Email',
            'contact_phone': 'Téléphone',
            'contact_address': 'Adresse',
            'contact_form_title': 'Envoyez-moi un message',
            'contact_form_name': 'Nom complet',
            'contact_form_email': 'Email',
            'contact_form_subject': 'Sujet',
            'contact_form_message': 'Message',
            'contact_form_send': 'Envoyer le message',
            'contact_social': 'Retrouvez-moi aussi sur',
            
            // CV
            'cv_title': 'Mon CV',
            'cv_download': 'Télécharger le CV (PDF)',
            'cv_profile_title': 'Profil',
            'cv_profile_text': 'Développeur web passionné par la création d\'applications innovantes et performantes. Spécialisé dans le développement full-stack avec une expertise particulière en PHP, JavaScript et Python.',
            'cv_skills_title': 'Compétences Techniques',
            'cv_languages_title': 'Langages de Programmation',
            'cv_frameworks_title': 'Frameworks & Outils',
            'cv_infrastructure_title': 'Infrastructure',
            'cv_projects_title': 'Projets Clés',
            'cv_project1_title': 'FabLab - Digitalisation des Commandes',
            'cv_project1_desc': 'Application web de gestion des commandes d\'impressions 3D, développée en PHP et MySQL.',
            'cv_project2_title': 'Jeu de Dames en Ligne',
            'cv_project2_desc': 'Application web interactive utilisant Canvas API et WebSocket pour un jeu multijoueur en temps réel.',
            'cv_project3_title': 'Infrastructure Client-Serveur',
            'cv_project3_desc': 'Conception et implémentation d\'une architecture réseau complète pour une petite entreprise.',
            'cv_education_title': 'Formation',
            'cv_education1_title': 'Formation en Développement Web, Réseau et Cybersécurité',
            'cv_education1_desc': 'Ynov – B2 Informatique (B3 Informatique en septembre 2025)<br>Objectif : Bac+5 (Master)',
            'cv_pdf_title': 'Version PDF',
            
            // Footer
            'footer_description': 'Développeur Web passionné par la création d\'applications web modernes et performantes.',
            'footer_quick_nav': 'Navigation rapide',
            'footer_contact': 'Me contacter',
            'footer_social': 'Réseaux sociaux',
            'footer_social_text': 'Retrouvez-moi sur les plateformes professionnelles pour suivre mon parcours et mes contributions dans le domaine du développement web et de la cybersécurité.',
            'footer_rights': 'Tous droits réservés.',
            'footer_legal': 'Mentions légales',
            'footer_privacy': 'Politique de confidentialité',

            // Mentions légales
            'legal_title': 'Mentions Légales',
            'legal_subtitle': 'Informations légales concernant ce site web',
            'legal_editor_title': 'Éditeur du site',
            'legal_editor_text': 'Ce site web est édité par Hugo Bisserier, étudiant en B3 Informatique à Ynov, résidant à Aix-en-Provence, France.',
            'legal_hosting_title': 'Hébergement',
            'legal_hosting_text': 'Ce site est hébergé par Hugo Bisserier (B3 Informatique), 2 rue de la fougasse, Aix en Provence.',
            'legal_property_title': 'Propriété intellectuelle',
            'legal_property_text1': 'L\'ensemble du contenu de ce site (textes, images, vidéos, etc.) est la propriété exclusive de Hugo Bisserier, sauf mention contraire.',
            'legal_property_text2': 'Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, par quelque procédé que ce soit, sans l\'autorisation expresse écrite de Hugo Bisserier, est strictement interdite et constituerait une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la Propriété Intellectuelle.',
            'legal_cookies_title': 'Utilisation des cookies',
            'legal_cookies_text1': 'Ce site utilise des cookies pour améliorer l\'expérience utilisateur. Les cookies sont de petits fichiers texte stockés sur votre ordinateur qui permettent d\'analyser l\'utilisation du site.',
            'legal_cookies_text2': 'Les cookies utilisés sur ce site servent uniquement à mémoriser vos préférences de thème (clair/sombre) et de langue. Aucune donnée personnelle n\'est collectée via ces cookies.',
            'legal_data_title': 'Données personnelles',
            'legal_data_text1': 'Conformément à la loi « Informatique et Libertés » du 6 janvier 1978 modifiée et au Règlement européen n°2016/679/UE du 27 avril 2016, vous bénéficiez d\'un droit d\'accès, de rectification, de portabilité et d\'effacement de vos données ou encore de limitation du traitement.',
            'legal_data_text2': 'Pour toute information ou exercice de vos droits sur les traitements de données personnelles, vous pouvez contacter Hugo Bisserier à l\'adresse email suivante : hugo.bisserier.pro@gmail.com.',
            'legal_links_title': 'Liens hypertextes',
            'legal_links_text': 'Ce site contient des liens hypertextes vers d\'autres sites internet. Hugo Bisserier n\'a pas la possibilité de vérifier le contenu de ces sites et n\'assumera aucune responsabilité quant aux contenus de ces sites tiers.',
            'legal_applicable_title': 'Droit applicable',
            'legal_applicable_text': 'Les présentes mentions légales sont régies par le droit français. En cas de litige, les tribunaux français seront compétents.',
            'legal_back': 'Retour à l\'accueil',

            // Politique de confidentialité
            'privacy_title': 'Politique de Confidentialité',
            'privacy_subtitle': 'Protection de vos données personnelles',
            'privacy_intro_title': 'Introduction',
            'privacy_intro_text1': 'Hugo Bisserier attache une grande importance à la protection de vos données personnelles et au respect de votre vie privée. La présente politique de confidentialité vous informe sur la manière dont vos données personnelles sont collectées et traitées lorsque vous visitez ce site web.',
            'privacy_intro_text2': 'Cette politique est conforme au Règlement Général sur la Protection des Données (RGPD) et à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée.',
            'privacy_collector_title': 'Responsable de traitement',
            'privacy_collector_text': 'Les données personnelles collectées sur ce site sont traitées par :',
            'privacy_data_title': 'Données collectées',
            'privacy_data_text1': 'Ce site web collecte les données personnelles suivantes :',
            'privacy_data_item1': 'Lorsque vous utilisez le formulaire de contact : votre nom, adresse email, et le contenu de votre message.',
            'privacy_data_item2': 'Lorsque vous naviguez sur le site : préférences de thème et de langue via des cookies.',
            'privacy_data_text2': 'Aucune autre donnée personnelle n\'est collectée lorsque vous visitez ce site web.',
            'privacy_purpose_title': 'Finalités du traitement',
            'privacy_purpose_text': 'Les données personnelles collectées sont utilisées aux fins suivantes :',
            'privacy_purpose_item1': 'Répondre à vos demandes de contact',
            'privacy_purpose_item2': 'Améliorer votre expérience utilisateur en mémorisant vos préférences',
            'privacy_purpose_item3': 'Analyser l\'utilisation du site à des fins d\'amélioration (statistiques anonymes)',
            'privacy_recipients_title': 'Destinataires des données',
            'privacy_recipients_text1': 'Les données personnelles collectées sont destinées uniquement à Hugo Bisserier et ne sont en aucun cas transmises à des tiers sans votre consentement préalable, sauf obligation légale.',
            'privacy_recipients_text2': 'Certains outils techniques utilisés par ce site peuvent avoir accès à certaines données (service d\'hébergement, outils d\'analyse). Ces prestataires sont soumis à des obligations de confidentialité.',
            'privacy_duration_title': 'Durée de conservation',
            'privacy_duration_text': 'Les données personnelles collectées via le formulaire de contact sont conservées pendant une durée de 3 ans à compter de notre dernier contact. Les cookies de préférence sont conservés pendant 12 mois.',
            'privacy_rights_title': 'Vos droits',
            'privacy_rights_text1': 'Conformément à la réglementation en vigueur, vous disposez des droits suivants concernant vos données personnelles :',
            'privacy_rights_item1': 'Droit d\'accès à vos données',
            'privacy_rights_item2': 'Droit de rectification',
            'privacy_rights_item3': 'Droit à l\'effacement (droit à l\'oubli)',
            'privacy_rights_item4': 'Droit à la limitation du traitement',
            'privacy_rights_item5': 'Droit à la portabilité de vos données',
            'privacy_rights_item6': 'Droit d\'opposition',
            'privacy_rights_text2': 'Pour exercer ces droits ou pour toute question relative au traitement de vos données, vous pouvez contacter Hugo Bisserier à l\'adresse email suivante : hugo.bisserier.pro@gmail.com.',
            'privacy_rights_text3': 'Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.',
            'privacy_cookies_title': 'Gestion des cookies',
            'privacy_cookies_text1': 'Ce site utilise uniquement des cookies techniques essentiels à son fonctionnement et des cookies de préférence pour mémoriser vos choix (thème, langue).',
            'privacy_cookies_text2': 'Vous pouvez à tout moment désactiver ces cookies en modifiant les paramètres de votre navigateur. Cependant, cela pourrait affecter certaines fonctionnalités du site.',
            'privacy_security_title': 'Sécurité des données',
            'privacy_security_text': 'Hugo Bisserier met en œuvre toutes les mesures techniques et organisationnelles appropriées pour protéger vos données personnelles contre la destruction, la perte, l\'altération, la divulgation non autorisée ou l\'accès non autorisé à ces données.',
            'privacy_modification_title': 'Modification de la politique de confidentialité',
            'privacy_modification_text': 'Cette politique de confidentialité peut être mise à jour à tout moment. La date de la dernière mise à jour est indiquée en bas de cette page. Nous vous invitons à consulter régulièrement cette politique afin de vous tenir informé des éventuelles modifications.',
            'privacy_update': 'Dernière mise à jour :',
            'privacy_back': 'Retour à l\'accueil'
        },
        'en': {
            // Navigation
            'nav_home': 'Home',
            'nav_about': 'About',
            'nav_skills': 'Skills',
            'nav_projects': 'Projects',
            'nav_experiences': 'Experiences',
            // Experiences page
            'experiences_title': 'Experiences',
            'experiences_subtitle': 'Internships and professional experience',
            'experiences_intro': 'A concise overview of my experiences. Each internship is summarized in a few lines, with a direct link to download the full report in PDF.',
            // Experiences – detailed blocks
            'meb_title': 'MEB — Internship 2023–2024',
            'meb_company_line': '<strong>Company:</strong> MEB (Mobilité Énergie Bâtiment) — Bègles',
            'meb_summary': 'Immersion in construction economics: project tracking, coordination of stakeholders, participation in work acceptance, and dashboard updates. Discovery of industry tools (MS Project, AutoCAD/Revit) and DO processes.',
            'meb_tags': 'Project management · Site monitoring · Office tools',
            'shf_title': 'S.H.F. Informatique — Internship 2024–2025',
            'shf_company_line': '<strong>Company:</strong> S.H.F. Informatique — Marseille',
            'shf_summary': 'Systems & network administration: AD/DNS/DHCP/GPO, Hyper‑V lab and procedures. Fortinet mockup, IDS POC (SELKS/Suricata) and standardization to reduce incidents. Operational documentation and internal mini-trainings.',
            'shf_tags': 'Windows Server · Hyper‑V · GPO · Fortinet · Suricata/SELKS',
            'experiences_soon_title': '2025–2026 — Coming soon',
            'soon_summary': 'Experience in preparation in the field of systems, networks and cybersecurity. Scope still being defined; more information will be added soon.',
            'soon_tags': 'Systems & Networks · Cybersecurity · Observability',
            'soon_badge': 'In preparation',
            'pdf_download_fr_only': '📄 Download the report (PDF — French only)',
            'experiences_b1_title': 'Internship – 2023–2024 (B1)',
            'experiences_b1_company': 'M.E.B.',
            'experiences_b1_period': 'Year 2023–2024',
            'experiences_b1_download': 'Download full report (PDF)',
            'experiences_b2_title': 'Intern – Systems, Networks & Cybersecurity',
            'experiences_b2_company': 'S.H.F. Informatique (Marseille)',
            'experiences_b2_period': 'June 13, 2025 – Aug 7, 2025',
            'experiences_b2_supervisor': 'Supervisor: Alain Dadourian',
            'experiences_missions': 'Missions',
            'experiences_tools': 'Tech / Tools',
            'experiences_b2_download': 'Download full report (PDF)',
            'experiences_coming_soon': 'Other experiences (B1, B3, apprenticeship) will be added soon.',
            'experiences_soon_title': '2025–2026 — Coming soon',
            'experiences_reports_title': 'Internship reports',
            'experiences_b1_report_btn': 'B1 Internship Report (M.E.B.)',
            'experiences_b2_report_btn': 'B2 Internship Report (S.H.F. Marseille)',
            'nav_contact': 'Contact',
            'nav_cv': 'Resume',
            
            // Home page
            'hero_subtitle': 'Full Stack Developer • Infrastructure & Cloud • Cybersecurity',
            'hero_description': 'Passionate about technology, I design comprehensive solutions:<br><br>• Modern web interfaces and polished user experiences<br>• Robust back-ends and automated DevOps pipelines<br>• Secure server environments, vulnerability audits and SecOps best practices<br><br>This versatility allows me to adapt the architecture and security of each project to the real needs of users and teams.',
            'hero_projects_btn': 'View my projects',
            'hero_contact_btn': 'Contact me',
            
            // About page
            'about_title': 'About Me',
            'about_subtitle': 'Passionate Web Developer',
            'about_cv_button': 'View my CV',
            'about_cv_note': '(Bilingual PDF available)',
            'about_who_title': 'Who am I?',
            'about_who_text1': '<strong>Admitted to B3 Computer Science at Ynov (term starting late September 2025)</strong>, I am passionate about web development, networks, and cybersecurity. My academic background and personal experience have given me versatile expertise across the digital spectrum: from front-end and back-end development to systems administration, through network architecture and information security.',
            'about_who_text2': 'Throughout my training, I have:',
            'about_who_list1': '<strong>Developed modern, high-performance web applications</strong> (HTML, CSS, JavaScript, PHP, Node.js, Flutter).',
            'about_who_list2': '<strong>Deployed and secured network infrastructures</strong> (access management, virtualization, Linux/Windows servers, traffic monitoring).',
            'about_who_list3': '<strong>Deepened cybersecurity skills</strong> (XSS/CSRF mitigation, access control, data protection, awareness and training).',
            'about_who_text3': 'I am particularly interested in:',
            'about_who_interest1': '<strong>Building innovative solutions</strong> (web and mobile applications, automation tools).',
            'about_who_interest2': '<strong>Optimizing performance and security</strong>—from code to infrastructure.',
            'about_who_interest3': '<strong>Solving complex problems</strong> with a methodical, creative, results-oriented approach.',
            'about_who_text4': '<strong>Curious, rigorous, and always learning</strong>, I aim to contribute to high-value projects in development, networking, and cybersecurity.',
            'about_path_title': 'My Journey',
            'about_path_intro': '<strong>Ynov Campus — Bachelor in Computer Science (admitted to B3, term starting late Sept. 2025)</strong><br>2023 – Present<br><br><strong>Modules:</strong> Full Stack Developer • Software Architecture • Project Management • Infrastructure • Cybersecurity',
            'about_path_objectives_title': 'Path Objectives:',
            'about_path_obj1_title': '2025–2026:',
            'about_path_obj1_desc': 'complete Bac+3 as a work-study/apprenticeship, develop skills in real-world conditions, and create measurable value for the host company (quality, performance, security, reliability), with a view to continuity within the same organization.',
            'about_path_obj2_title': 'From 2026 onward:',
            'about_path_obj2_desc': 'pursue a Bac+5 (Master\'s), ideally as a work-study/apprenticeship, in a generalist Computer Science track, strengthening skills according to company needs (development, infrastructure/Cloud, cybersecurity/SecOps), with a preference for continuing within the same company where possible.',
            'about_contact_title': 'Contact & Availability',
            'about_contact_intro': 'Open to discussions and to assessing your needs (web development, cybersecurity, infrastructure).',
            'about_contact_availability': 'Seeking a work-study/apprenticeship from late September 2025, in any city within Bouches-du-Rhône or Var.',
            'about_contact_email': 'hugo.bisserier.pro@gmail.com',
            'about_timeline_date': '2023 - 2025',
            'about_timeline_title': 'B3 Computer Science',
            'about_timeline_school': 'Ynov Campus',
            'about_timeline_item1': 'Advanced web development',
            'about_timeline_item2': 'Software architecture',
            'about_timeline_item3': 'Project management',
            'about_timeline_item4': 'Infrastructure',
            'about_timeline_item5': 'Cybersecurity',
            'about_skills_title': 'My Skills',
            'about_webdev_title': 'Web Development',
            'about_tech_title': 'Other Technologies',
            'about_soft_title': 'Soft Skills',
            'about_soft_skills_title': 'My Human Qualities',
            'about_soft_skills_intro': 'Beyond my technical skills, I cultivate essential human qualities to succeed as a team and carry out complex projects.',
            'about_soft_teamwork': 'Teamwork',
            'about_soft_teamwork_desc': 'Effective collaboration and constructive communication',
            'about_soft_problem': 'Problem solving',
            'about_soft_problem_desc': 'Analytical and creative approach to challenges',
            'about_soft_comm': 'Communication',
            'about_soft_comm_desc': 'Clear expression and active listening',
            'about_soft_auto': 'Autonomy',
            'about_soft_auto_desc': 'Initiative and responsible decision making',
            'about_soft_adapt': 'Adaptability',
            'about_soft_adapt_desc': 'Flexibility facing changes and new challenges',
            'about_soft_org': 'Organization',
            'about_soft_org_desc': 'Efficient time and priority management',
            
            // Infrastructure & Cloud
            'about_infrastructure_title': 'Infrastructure & Cloud',
            'about_infrastructure_intro': 'My cross-functional vision allows me to ensure consistency between development, infrastructure and security. I design complete solutions that meet business needs while ensuring performance, security and maintainability.',
            'about_infra_systems_title': 'Systems & Virtualization',
            'about_infra_cloud_title': 'Cloud & DevOps',
            'about_infra_security_title': 'Networks & Cybersecurity',
            'about_infra_highlight': '<strong>From infrastructure to code:</strong> I master the entire technical stack, from server deployment to the final application, including security and performance optimization.',
            
            'about_interests_title': 'Interests',
            'about_programming_title': 'Programming, Web Technologies & Architecture',
            'about_programming_desc1': '<strong>Exploration of new languages and frameworks</strong>',
            'about_programming_desc2': '<strong>Technology watch and experimentation</strong>',
            'about_programming_desc3': '<strong>Design of scalable systems</strong>',
            'about_mobile_dev_title': 'Mobile Development',
            'about_mobile_dev_desc': 'I want to develop and publish mobile applications on the Play Store in the future, using Flutter or React Native, to explore new ideas and technologies.<br><br><strong>Do you have a project or want to collaborate?</strong><br>Contact me at the following address:<br><a href="mailto:hugo.bisserier.pro@gmail.com" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;word-break:break-all;overflow-wrap:anywhere;">hugo.bisserier.pro@gmail.com</a><br>to exchange and work together on innovative applications.',
            'about_interest1_title': 'Programming',
            'about_interest1_desc': 'Exploration of new languages and frameworks',
            'about_interest2_title': 'Web Technologies',
            'about_interest2_desc': 'Technology watch and experimentation',
            'about_interest3_title': 'Software Architecture',
            'about_interest3_desc': 'Design of scalable systems',
            'about_interest4_title': 'Cybersecurity',
            'about_interest4_desc': 'I deepen cybersecurity through creating and solving CTF challenges.<br><strong>1st year:</strong> Creating challenges for <a href="https://hackin.fr" target="_blank" style="color:#ff4ecb;text-decoration:underline;font-weight:bold;">Hack\'In</a> (ex-Hacky\'nov).<br><strong>2nd year:</strong> Participating in several CTFs (Hack\'In, Ynov Aix-en-Provence, etc.).<br>Continuous learning in offensive security and data protection awareness.',
            'about_interest_innovation_title': 'Watch & Innovation',
            'about_interest_innovation_desc': 'Passionate about <strong>innovation</strong>, I regularly test <strong>new tools, technologies and concepts</strong> to stay at the forefront and nourish my creativity. This <strong>curiosity</strong> allows me to <strong>anticipate sector developments</strong> and bring <strong>modern solutions</strong> to my projects.',
            'about_interest_chess_title': 'Chess Games',
            'about_interest_chess_desc': 'Passionate about chess, I appreciate this game for its <strong>strategic and logical dimension</strong>. <strong>Reflection</strong>, <strong>anticipation</strong> and <strong>position analysis</strong> develop cross-functional skills useful in <strong>programming</strong> and <strong>complex problem solving</strong>.',
            'about_interest_tech_news_title': 'Technology News',
            'about_interest_tech_news_desc': '<strong>Daily monitoring</strong> of tech news, <strong>new framework versions</strong>, <strong>AI and cybersecurity innovations</strong>. This <strong>constant watch</strong> allows me to stay informed about sector developments and <strong>anticipate tomorrow\'s technologies</strong>.',
            
            // Skills page
            'skills_title': 'My Skills',
            'skills_subtitle': 'Technical expertise and mastered tools',
            'skills_languages_title': 'Programming Languages',
            'skills_php_1': 'Backend Development',
            'skills_php_2': 'REST API',
            'skills_php_3': 'Database Management',
            'skills_js_1': 'ES6+',
            'skills_js_2': 'DOM Manipulation',
            'skills_js_3': 'Asynchronous',
            'skills_python_1': 'Data Analysis',
            'skills_python_2': 'Pandas & NumPy',
            'skills_python_3': 'Automation',
            'skills_go_1': 'Backend Development',
            'skills_go_2': 'Concurrency',
            'skills_go_3': 'APIs',
            'skills_csharp_1': '.NET Development',
            'skills_csharp_2': 'Blazor',
            'skills_csharp_3': 'Windows Applications',
            'skills_java_1': 'OOP',
            'skills_java_2': 'Spring Boot',
            'skills_java_3': 'Android Applications',
            'skills_reactnative_1': 'Mobile Applications',
            'skills_reactnative_2': 'Navigation',
            'skills_reactnative_3': 'Hooks',
            'skills_web_title': 'Web Technologies',
            'skills_html_1': 'Responsive Design',
            'skills_html_2': 'Flexbox/Grid',
            'skills_html_3': 'Animations',
            'skills_css_1': 'Tailwind CSS',
            'skills_css_2': 'Bootstrap',
            'skills_css_3': 'SASS/SCSS',
            'skills_infra_title': 'Infrastructure & Cloud • Cybersecurity',
            'skills_virt_1': 'Hyper-V',
            'skills_virt_2': 'VirtualBox',
            'skills_virt_3': 'VMware',
            'skills_os_1': 'Windows Server',
            'skills_os_2': 'Linux (Ubuntu, CentOS)',
            'skills_os_3': 'System Administration',
            'skills_network_1': 'Network Configuration',
            'skills_network_2': 'Routing and Switching',
            'skills_network_3': 'Firewall and Security',
            'skills_security_1': 'Vulnerability Analysis',
            'skills_security_2': 'System Hardening',
            'skills_security_3': 'Monitoring and Audit',
            'skills_devops_1': 'Docker',
            'skills_devops_2': 'CI/CD Pipelines',
            'skills_devops_3': 'Automation',
            'skills_cloud_1': 'Cloud Architecture',
            'skills_cloud_2': 'Web Services',
            'skills_cloud_3': 'High Availability',
            'skills_tools_title': 'Tools and Environments',
            'skills_git_title': 'Version Control',
            'skills_db_title': 'Databases',
            'skills_server_title': 'Servers & Deployment',
            'skills_dev_title': 'Development Tools',
            
            // Projects page
            'projects_title': 'My Projects',
            'projects_subtitle': 'Discover my works and personal projects',
            'projects_view_btn': 'View project',
            'projects_technologies': 'Technologies',
            'projects_key_features': 'Key Features',
            'projects_view_demo': 'View Demo',
            'projects_view_code': 'View Code',
            'project1_title': 'Project Red',
            'project1_desc': 'An ambitious project exploring new approaches in web development with advanced features.',
            'project2_title': 'Online Shop',
            'project2_desc': 'A complete e-commerce site with product, user and order management.',
            'project3_title': 'Blog Creation',
            'project3_desc': 'A complete blog with article publishing system and user management.',
            'project4_title': 'Golanta',
            'project4_desc': 'A survival and adventure game with creation and customization of adventurers.',
            'project5_title': 'Client-Server Architecture Infrastructure',
            'project5_desc': 'Design and implementation of an information system for a small business.',
            'project6_title': 'Data Analysis and Manipulation with Python',
            'project6_desc': 'Data analysis project using Python and its scientific libraries.',
            'project7_title': 'C# Mini-Projects',
            'project7_desc': 'Series of mini-projects in C# including a calculator, weather app, tic-tac-toe, quiz and card game.',
            'project8_title': 'FabLab - Order Digitalization',
            'project8_desc': '3D printing order management application for a FabLab.',
            'project9_title': 'Checkers Game',
            'project9_desc': 'Development of an online checkers game with game and player management.',
            'project10_title': 'FridgeVision',
            'project10_desc': 'Flutter mobile application based on AI to reduce food waste, detect food items and generate personalized recipes.',
            
            // Contact page
            'contact_title': 'Contact Me',
            'contact_lead': 'Feel free to contact me for any questions or collaboration proposals.',
            'contact_email': 'Email',
            'contact_phone': 'Phone',
            'contact_address': 'Address',
            'contact_form_title': 'Send me a message',
            'contact_form_name': 'Full name',
            'contact_form_email': 'Email',
            'contact_form_subject': 'Subject',
            'contact_form_message': 'Message',
            'contact_form_send': 'Send message',
            'contact_social': 'Find me also on',
            
            // CV
            'cv_title': 'My Resume',
            'cv_download': 'Download Resume (PDF)',
            'cv_profile_title': 'Profile',
            'cv_profile_text': 'Web developer passionate about creating innovative and high-performance applications. Specialized in full-stack development with particular expertise in PHP, JavaScript and Python.',
            'cv_skills_title': 'Technical Skills',
            'cv_languages_title': 'Programming Languages',
            'cv_frameworks_title': 'Frameworks & Tools',
            'cv_infrastructure_title': 'Infrastructure',
            'cv_projects_title': 'Key Projects',
            'cv_project1_title': 'FabLab - Order Digitalization',
            'cv_project1_desc': '3D printing order management web application, developed in PHP and MySQL.',
            'cv_project2_title': 'Online Checkers Game',
            'cv_project2_desc': 'Interactive web application using Canvas API and WebSocket for a multiplayer game in real time.',
            'cv_project3_title': 'Client-Server Infrastructure',
            'cv_project3_desc': 'Design and implementation of a complete network architecture for a small business.',
            'cv_education_title': 'Education',
            'cv_education1_title': 'Web Development, Networking and Cybersecurity Training',
            'cv_education1_desc': 'Ynov – B2 Computer Science (B3 in September 2025)<br>Goal: Master\'s degree (Bac+5)',
            'cv_pdf_title': 'PDF Version',
            
            // Footer
            'footer_description': 'Web Developer passionate about creating modern and performant web applications.',
            'footer_quick_nav': 'Quick Navigation',
            'footer_contact': 'Contact Me',
            'footer_social': 'Social Networks',
            'footer_social_text': 'Find me on professional platforms to follow my journey and my contributions in the field of web development and cybersecurity.',
            'footer_rights': 'All rights reserved.',
            'footer_legal': 'Legal Notice',
            'footer_privacy': 'Privacy Policy',

            // Legal notice
            'legal_title': 'Legal Notice',
            'legal_subtitle': 'Legal information about this website',
            'legal_editor_title': 'Website Editor',
            'legal_editor_text': 'This website is edited by Hugo Bisserier, B3 Computer Science student at Ynov, residing in Aix-en-Provence, France.',
            'legal_hosting_title': 'Hosting',
            'legal_hosting_text': 'This site is hosted by Hugo Bisserier (B3 Computer Science), 2 rue de la fougasse, Aix en Provence.',
            'legal_property_title': 'Intellectual Property',
            'legal_property_text1': 'All content on this site (texts, images, videos, etc.) is the exclusive property of Hugo Bisserier, unless otherwise stated.',
            'legal_property_text2': 'Any reproduction, representation, modification, publication, total or partial adaptation of the elements of the site, by any process whatsoever, without the express written authorization of Hugo Bisserier, is strictly prohibited and would constitute an infringement sanctioned by articles L.335-2 and following of the Intellectual Property Code.',
            'legal_cookies_title': 'Use of Cookies',
            'legal_cookies_text1': 'This site uses cookies to improve the user experience. Cookies are small text files stored on your computer that allow the analysis of the site\'s use.',
            'legal_cookies_text2': 'The cookies used on this site are only used to remember your theme (light/dark) and language preferences. No personal data is collected through these cookies.',
            'legal_data_title': 'Personal Data',
            'legal_data_text1': 'In accordance with the "Data Protection Act" of January 6, 1978 as amended and the European Regulation No. 2016/679/EU of April 27, 2016, you have the right to access, rectify, port and delete your data or limit processing.',
            'legal_data_text2': 'For any information or exercise of your rights regarding personal data processing, you can contact Hugo Bisserier at the following email address: hugo.bisserier.pro@gmail.com.',
            'legal_links_title': 'Hypertext Links',
            'legal_links_text': 'This site contains hypertext links to other websites. Hugo Bisserier does not have the ability to verify the content of these sites and assumes no responsibility for the content of these third-party sites.',
            'legal_applicable_title': 'Applicable Law',
            'legal_applicable_text': 'These legal notices are governed by French law. In case of dispute, the French courts will have jurisdiction.',
            'legal_back': 'Back to Home',

            // Privacy Policy
            'privacy_title': 'Privacy Policy',
            'privacy_subtitle': 'Protection of your personal data',
            'privacy_intro_title': 'Introduction',
            'privacy_intro_text1': 'Hugo Bisserier attaches great importance to the protection of your personal data and respect for your privacy. This privacy policy informs you about how your personal data is collected and processed when you visit this website.',
            'privacy_intro_text2': 'This policy complies with the General Data Protection Regulation (GDPR) and the amended "Data Protection Act" of January 6, 1978.',
            'privacy_collector_title': 'Data Controller',
            'privacy_collector_text': 'The personal data collected on this site is processed by:',
            'privacy_data_title': 'Data Collected',
            'privacy_data_text1': 'This website collects the following personal data:',
            'privacy_data_item1': 'When you use the contact form: your name, email address, and the content of your message.',
            'privacy_data_item2': 'When you browse the site: theme and language preferences via cookies.',
            'privacy_data_text2': 'No other personal data is collected when you visit this website.',
            'privacy_purpose_title': 'Processing Purposes',
            'privacy_purpose_text': 'The personal data collected is used for the following purposes:',
            'privacy_purpose_item1': 'Respond to your contact requests',
            'privacy_purpose_item2': 'Improve your user experience by remembering your preferences',
            'privacy_purpose_item3': 'Analyze site usage for improvement purposes (anonymous statistics)',
            'privacy_recipients_title': 'Data Recipients',
            'privacy_recipients_text1': 'The personal data collected is intended exclusively for Hugo Bisserier and is not in any case transmitted to third parties without your prior consent, except legal obligation.',
            'privacy_recipients_text2': 'Some technical tools used by this site may have access to certain data (hosting service, analysis tools). These service providers are subject to confidentiality obligations.',
            'privacy_duration_title': 'Retention Period',
            'privacy_duration_text': 'Personal data collected via the contact form is kept for a period of 3 years from our last contact. Preference cookies are kept for 12 months.',
            'privacy_rights_title': 'Your Rights',
            'privacy_rights_text1': 'In accordance with current regulations, you have the following rights regarding your personal data:',
            'privacy_rights_item1': 'Right of access to your data',
            'privacy_rights_item2': 'Right of rectification',
            'privacy_rights_item3': 'Right to erasure (right to be forgotten)',
            'privacy_rights_item4': 'Right to restriction of processing',
            'privacy_rights_item5': 'Right to data portability',
            'privacy_rights_item6': 'Right to object',
            'privacy_rights_text2': 'To exercise these rights or for any questions relating to the processing of your data, you can contact Hugo Bisserier at the following email address: hugo.bisserier.pro@gmail.com.',
            'privacy_rights_text3': 'If you believe, after contacting us, that your rights are not being respected, you can file a complaint with the CNIL.',
            'privacy_cookies_title': 'Cookie Management',
            'privacy_cookies_text1': 'This site only uses technical cookies essential to its operation and preference cookies to remember your choices (theme, language).',
            'privacy_cookies_text2': 'You can disable these cookies at any time by changing your browser settings. However, this could affect some functionalities of the site.',
            'privacy_security_title': 'Data Security',
            'privacy_security_text': 'Hugo Bisserier implements all appropriate technical and organizational measures to protect your personal data against destruction, loss, alteration, unauthorized disclosure or unauthorized access to this data.',
            'privacy_modification_title': 'Modification of the Privacy Policy',
            'privacy_modification_text': 'This privacy policy may be updated at any time. The date of the last update is indicated at the bottom of this page. We invite you to regularly consult this policy to keep yourself informed of any changes.',
            'privacy_update': 'Last update:',
            'privacy_back': 'Back to Home'
        }
    };
    
    // 2. Langue par défaut
    let currentLang = localStorage.getItem('language') || 'fr';
    
    // 3. Sélecteurs d'éléments
    const langButton = document.querySelector('.current-lang');
    const langDropdown = document.querySelector('.lang-dropdown');
    const frBtn = document.getElementById('lang-fr');
    const enBtn = document.getElementById('lang-en');
    
    // 4. Ouvrir/fermer le menu déroulant des langues
    if (langButton && langDropdown) {
        // Afficher langue actuelle
        langButton.textContent = currentLang.toUpperCase();
        
        // Ouvrir menu déroulant
        langButton.addEventListener('click', function() {
            langDropdown.classList.toggle('active');
        });
        
        // Fermer menu déroulant si clic en dehors
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.language-selector')) {
                langDropdown.classList.remove('active');
            }
        });
    }
    
    // 5. Changement de langue
    if (frBtn) {
        frBtn.addEventListener('click', function(e) {
            e.preventDefault();
            applyTranslation('fr');
            if (langButton) langButton.textContent = 'FR';
            if (langDropdown) langDropdown.classList.remove('active');
            localStorage.setItem('language', 'fr');
        });
    }
    
    if (enBtn) {
        enBtn.addEventListener('click', function(e) {
            e.preventDefault();
            applyTranslation('en');
            if (langButton) langButton.textContent = 'EN';
            if (langDropdown) langDropdown.classList.remove('active');
            localStorage.setItem('language', 'en');
        });
    }
    
    // 6. Fonction de traduction
    function applyTranslation(lang) {
        console.log('Traduction en cours vers:', lang);
        // Traduire tous les éléments avec data-translate
        document.querySelectorAll('[data-translate]').forEach(function(element) {
            const key = element.getAttribute('data-translate');
            console.log('Traduction de clé:', key, 'Élément:', element);
            if (translations[lang] && translations[lang][key]) {
                console.log('Valeur trouvée:', translations[lang][key]);
                // Utilise innerHTML pour supporter les retours à la ligne et balises HTML
                element.innerHTML = translations[lang][key];
            } else {
                console.warn('Traduction non trouvée pour:', key, 'dans la langue:', lang);
            }
        });
        
        // Traiter les cas spéciaux (boutons avec icônes, etc.)
        const sendButton = document.querySelector('.contact-form button[type="submit"]');
        if (sendButton) {
            const icon = sendButton.querySelector('i');
            if (icon) {
                const iconClone = icon.cloneNode(true);
                sendButton.innerHTML = '';
                sendButton.appendChild(iconClone);
                sendButton.appendChild(document.createTextNode(' ' + translations[lang]['contact_form_send']));
            }
        }
        
        // Traiter les titres et descriptions des projets
        const projectEls = document.querySelectorAll('.project-card');
        if (projectEls.length > 0) {
            projectEls.forEach(function(project, index) {
                const titleEl = project.querySelector('h3');
                const descEl = project.querySelector('.project-info > p');
                
                if (titleEl && translations[lang]['project' + (index + 1) + '_title']) {
                    titleEl.textContent = translations[lang]['project' + (index + 1) + '_title'];
                }
                
                if (descEl && translations[lang]['project' + (index + 1) + '_desc']) {
                    descEl.textContent = translations[lang]['project' + (index + 1) + '_desc'];
                }
            });
        }
        
        // Si le modal de projet est visible, mettre à jour son contenu
        const projectModal = document.getElementById('projectModal');
        if (projectModal && projectModal.classList.contains('active')) {
            const viewButtons = document.querySelectorAll('.view-project');
            const activeProjectId = viewButtons.length > 0 ? 
                Array.from(viewButtons).find(btn => 
                    btn.closest('.project-card') && 
                    btn.closest('.project-card').classList.contains('active')
                )?.dataset.projectId : null;
                
            if (activeProjectId) {
                // Simuler un clic sur le bouton pour rouvrir le modal avec la nouvelle langue
                const activeButton = document.querySelector(`.view-project[data-project-id="${activeProjectId}"]`);
                if (activeButton) {
                    activeButton.click();
                }
            }
        }
        
        console.log('Traduction terminée');
    }
    
    // Rendre la fonction applyTranslation globale
    window.applyTranslation = applyTranslation;
    
    // 7. Appliquer la traduction au chargement
    applyTranslation(currentLang);
    
    // 8. Gestion du formulaire de contact
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Récupérer les valeurs du formulaire
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            // Construire le corps du message
            const body = `Bonjour Hugo,

Mon nom : ${name}
Mon email : ${email}

Message :
${message}

Cordialement,
${name}`;
            
            // Construire l'URL mailto avec les bons paramètres
            const mailtoUrl = `mailto:hugo.bisserier.pro@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            
            // Ouvrir le client email
            window.location.href = mailtoUrl;
        });
    }
}); 