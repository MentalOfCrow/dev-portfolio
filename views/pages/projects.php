<?php
$title = "Projets";
$current_page = "projects";
?>

<main class="container">
    <section class="page-header">
        <h1 data-translate="projects_title">Mes Projets</h1>
        <p data-translate="projects_subtitle">Découvrez mes réalisations et projets personnels</p>
    </section>

    <div class="projects-grid">
        <?php
        // Structure pour chaque projet
        $projects = [
            [
                'id' => 'projet-red',
                'title' => 'Projet Red',
                'description' => 'Un projet ambitieux explorant de nouvelles approches en développement web avec des fonctionnalités avancées.',
                'tags' => ['HTML', 'CSS', 'JavaScript', 'MySQL'],
                'thumbnail' => '/assets/images/projects/1.jpg',
                'images' => ['/assets/images/projects/1.jpg'],
                'full_description' => 'Le projet Red est un projet ambitieux qui m\'a permis d\'explorer de nouvelles approches en développement web. Ce projet a été conçu pour mettre en œuvre des fonctionnalités avancées et renforcer mes compétences en programmation et en gestion de bases de données. J\'ai utilisé HTML, CSS, JavaScript, et MySQL pour structurer l\'application et assurer une gestion efficace des données. L\'objectif était de proposer une interface intuitive et une expérience utilisateur fluide tout en garantissant une sécurité optimale. Ce projet m\'a permis de travailler sur des aspects techniques tels que l\'optimisation des performances, la gestion des utilisateurs et l\'intégration de fonctionnalités dynamiques adaptées aux besoins spécifiques des utilisateurs.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'MySQL']
            ],
            [
                'id' => 'boutique-en-ligne',
                'title' => 'Boutique en Ligne',
                'description' => 'Un site e-commerce complet avec gestion des produits, utilisateurs et commandes.',
                'tags' => ['HTML', 'CSS', 'JavaScript', 'MySQL'],
                'thumbnail' => '/assets/images/projects/2.jpg',
                'images' => ['/assets/images/projects/2.jpg'],
                'full_description' => 'La création d\'une boutique en ligne a été l\'un des derniers projets de ma formation, et aussi l\'un des plus exigeants. Ce projet avait pour but de développer un site e-commerce complet, capable de gérer des produits, des utilisateurs et des commandes, tout en assurant une sécurité optimale des transactions. Pour ce projet, j\'ai utilisé une combinaison de technologies, notamment HTML, CSS, JavaScript pour le front-end, ainsi que MySQL pour la base de données. Ce projet a été un véritable défi, car il demandait une gestion rigoureuse des fonctionnalités avancées telles que l\'intégration de passerelles de paiement, la gestion des stocks en temps réel, et l\'optimisation des performances pour offrir une expérience utilisateur de haute qualité.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'MySQL', 'Système de paiement']
            ],
            [
                'id' => 'blog',
                'title' => 'Création d\'un Blog',
                'description' => 'Un blog complet avec système de publication d\'articles et gestion des utilisateurs.',
                'tags' => ['HTML', 'CSS', 'JavaScript', 'MySQL'],
                'thumbnail' => '/assets/images/projects/3.jpg',
                'images' => ['/assets/images/projects/3.jpg'],
                'full_description' => 'Le projet de création d\'un blog, réalisé vers la fin de ma formation, a été l\'un des projets les plus complexes que j\'ai entrepris. Ce projet nécessitait de mobiliser toutes les compétences acquises tout au long de l\'année. L\'objectif était de développer un site web complet, de A à Z, qui fonctionne comme un véritable blog. J\'ai utilisé HTML, CSS, et JavaScript pour le développement front-end, et MySQL pour la gestion de la base de données. Le projet incluait la création d\'un système de publication d\'articles, de gestion des utilisateurs, et de modération des commentaires.',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'MySQL', 'Système de commentaires']
            ],
            [
                'id' => 'golanta',
                'title' => 'Golanta',
                'description' => 'Un jeu de survie et d\'aventure avec création et personnalisation d\'aventuriers.',
                'tags' => ['Golang', 'HTML', 'CSS', 'JavaScript'],
                'thumbnail' => '/assets/images/projects/4.jpg',
                'images' => ['/assets/images/projects/4.jpg'],
                'full_description' => 'Golanta est un projet inspiré des jeux de survie et d\'aventure où les participants doivent créer un aventurier et le personnaliser pour affronter divers défis. Ce projet met l\'accent sur l\'originalité du personnage, la gestion des ressources et l\'aspect gamifié de l\'expérience utilisateur. J\'ai utilisé Golang pour la gestion du back-end et l\'interaction avec les données, combiné à des technologies web pour l\'affichage et l\'interactivité. Le projet incluait un formulaire dynamique pour la création des aventuriers, ainsi qu\'une page de profil détaillée pour visualiser les caractéristiques du personnage.',
                'technologies' => ['Golang', 'HTML', 'CSS', 'JavaScript', 'Base de données']
            ],
            [
                'id' => 'infrastructure',
                'title' => 'Infrastructure Architecture Client-Serveur',
                'description' => 'Conception et mise en place d\'un système d\'information pour une petite entreprise.',
                'tags' => ['Virtualisation', 'Réseaux', 'Sécurité'],
                'thumbnail' => '/assets/images/projects/5.jpg',
                'images' => ['/assets/images/projects/5.jpg'],
                'full_description' => 'Le projet Architecture Client-Serveur vise à concevoir et mettre en place un système d\'information (SI) pour une petite entreprise. Il s\'inscrit dans le cadre de la formation en Infrastructure et Systèmes d\'Information. Le projet nécessitait l\'utilisation de machines virtuelles, la mise en place d\'un plan d\'adressage réseau, la gestion des règles de filtrage et l\'automatisation des sauvegardes. Un site web fonctionnel hébergé sur Apache ou Nginx devait également être intégré, détaillant l\'architecture et les configurations mises en place.',
                'technologies' => ['VirtualBox', 'GNS3', 'Apache/Nginx', 'Windows Server', 'Linux']
            ],
            [
                'id' => 'analyse-python',
                'title' => 'Analyse et Manipulation de Données avec Python',
                'description' => 'Projet d\'analyse de données utilisant Python et ses bibliothèques scientifiques.',
                'tags' => ['Python', 'Pandas', 'NumPy', 'SciPy'],
                'thumbnail' => '/assets/images/projects/6.jpg',
                'images' => ['/assets/images/projects/6.jpg'],
                'full_description' => 'L\'analyse et la manipulation de données avec Python ont constitué un projet clé permettant d\'explorer, de traiter et d\'analyser des ensembles de données complexes. J\'ai notamment réalisé l\'exploration et le nettoyage des données, des analyses statistiques avancées, la visualisation des tendances et distributions, l\'application de techniques d\'apprentissage automatique et l\'utilisation de la transformée de Fourier rapide (FFT) pour détecter des tendances saisonnières.',
                'technologies' => ['Python', 'Pandas', 'NumPy', 'SciPy', 'Matplotlib']
            ],
            [
                'id' => 'mini-projets-csharp',
                'title' => 'Mini-Projets C#',
                'description' => 'Série de mini-projets en C# incluant une calculatrice, météo, morpion, quiz et jeu de cartes.',
                'tags' => ['C#', 'Blazor', '.NET'],
                'thumbnail' => '/assets/images/projects/7.jpg',
                'images' => ['/assets/images/projects/7.jpg'],
                'full_description' => 'Le projet C# consistait en la réalisation de plusieurs mini-projets permettant d\'explorer différentes fonctionnalités du langage. Les projets incluaient une calculatrice interactive, une application météo avec API, un jeu de morpion, un système de quiz interactif et un projet de manipulation de cartes à jouer. Ce projet m\'a permis de renforcer mes compétences en programmation orientée objet et en développement d\'interfaces utilisateur.',
                'technologies' => ['C#', 'Blazor', '.NET', 'API REST']
            ],
            [
                'id' => 'fablab',
                'title' => 'FabLab - Digitalisation des Commandes',
                'description' => 'Application de gestion des commandes d\'impressions 3D pour un FabLab.',
                'tags' => ['PHP', 'MySQL', 'JavaScript'],
                'thumbnail' => '/assets/images/projects/8.jpg',
                'images' => ['/assets/images/projects/8.jpg'],
                'full_description' => 'Le projet FabLab avait pour objectif de moderniser la gestion des commandes d\'impressions 3D en remplaçant un système manuel par une application numérique performante. Le projet incluait la gestion des commandes, le suivi des imprimantes, un tableau de bord avec statistiques, l\'export des données et un système de notifications. Le projet s\'est déroulé sur 5 jours avec une planification rigoureuse.',
                'technologies' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
            ],
            [
                'id' => 'jeu-dames',
                'title' => 'Jeu de Dames',
                'description' => 'Développement d\'un jeu de dames en ligne avec gestion des parties et des joueurs.',
                'tags' => ['PHP', 'MySQL', 'JavaScript', 'Canvas'],
                'thumbnail' => '/assets/images/projects/9.jpg',
                'images' => ['/assets/images/projects/9.jpg'],
                'full_description' => 'Le projet Fil Rouge consistait à développer un jeu de Dames en ligne utilisant des technologies web modernes. Le projet utilise PHP pour la logique du jeu, MySQL pour le stockage des données, Canvas API pour l\'affichage du plateau, et JavaScript pour l\'interactivité. Les fonctionnalités incluent la gestion des joueurs, un plateau interactif, la sauvegarde des parties et une interface responsive.',
                'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Canvas API', 'Tailwind CSS']
            ],
            [
                'id' => 'fridgevision',
                'title' => 'FridgeVision',
                'description' => "Application mobile Flutter basée sur l'IA pour réduire le gaspillage alimentaire, détecter les aliments et générer des recettes personnalisées.",
                'tags' => ['Flutter', 'IA', 'Open Food Facts', 'Node.js/Express', 'API REST', 'Notifications'],
                'thumbnail' => '/assets/images/projects/10.png',
                'images' => ['/assets/images/projects/10.png'],
                'full_description' => "FridgeVision est une application mobile Flutter basée sur l'IA qui aide à réduire le gaspillage alimentaire en détectant les aliments présents dans votre réfrigérateur et en générant des recettes personnalisées en temps réel.\n\nFonctionnalités principales :\n- Détection des aliments par vision par ordinateur ou saisie manuelle\n- Recherche mondiale de produits via l'API Open Food Facts\n- Génération automatique de recettes adaptées aux ingrédients disponibles\n- Notifications intelligentes sur les dates de péremption et suggestions d'utilisation\n- Historique des aliments et des recettes\n- Interface intuitive et moderne\n\nStack technique :\nFlutter (Dart), API Open Food Facts, Backend Node.js/Express ou Firebase, IA (TensorFlow Lite, ML Kit), Notifications push.",
                'technologies' => ['Flutter', 'Dart', 'Open Food Facts API', 'Node.js/Express', 'Firebase', 'TensorFlow Lite', 'ML Kit', 'Notifications push']
            ]
        ];

        foreach ($projects as $project): ?>
            <article class="project-card" data-project-id="<?= $project['id'] ?>">
                <div class="project-thumbnail">
                    <img src="<?= $project['thumbnail'] ?>" alt="<?= $project['title'] ?>">
                </div>
                <div class="project-info">
                    <h3><?= $project['title'] ?></h3>
                    <div class="project-tags">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <span class="project-tag"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                    <p><?= $project['description'] ?></p>
                    <button class="btn btn-primary view-project" data-project-id="<?= $project['id'] ?>">
                        <span data-translate="projects_view_btn">Voir le projet</span>
                    </button>
                </div>
            </article>
        <?php endforeach; ?>
        <!-- Projet à venir -->
        <article class="project-card project-coming-soon" style="opacity:0.7; background:#f3f3f3; display:flex; align-items:center; justify-content:center; flex-direction:column; border:2px dashed #bbb; min-height:280px;">
            <div style="font-size:3em; color:#bbb; margin-bottom:0.5em;">
                <svg xmlns='http://www.w3.org/2000/svg' width='48' height='48' fill='none' viewBox='0 0 24 24'><circle cx='12' cy='12' r='10' stroke='#bbb' stroke-width='2'/><path d='M12 7v5l3 3' stroke='#bbb' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/></svg>
            </div>
            <h3 style="color:#888;">Bientôt disponible...</h3>
            <p style="color:#aaa;">Un nouveau projet arrive prochainement !</p>
        </article>
    </div>
</main>

<!-- Modal pour la vue détaillée -->
<div class="project-modal" id="projectModal">
    <div class="modal-content">
        <button class="modal-close">&times;</button>
        <div id="modalContent">
            <!-- Le contenu sera injecté dynamiquement via JavaScript -->
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const projects = <?= json_encode($projects) ?>;
    const modal = document.getElementById('projectModal');
    const modalContent = document.getElementById('modalContent');
    const closeBtn = document.querySelector('.modal-close');
    const translations = {
        'fr': {
            // Les traductions françaises sont déjà dans le tableau $projects
        },
        'en': {
            'projet-red': {
                'title': 'Project Red',
                'full_description': 'Project Red is an ambitious project that allowed me to explore new approaches in web development. This project was designed to implement advanced features and strengthen my programming and database management skills. I used HTML, CSS, JavaScript, and MySQL to structure the application and ensure efficient data management. The goal was to provide an intuitive interface and a fluid user experience while ensuring optimal security. This project allowed me to work on technical aspects such as performance optimization, user management, and the integration of dynamic features adapted to the specific needs of users.'
            },
            'boutique-en-ligne': {
                'title': 'Online Shop',
                'full_description': 'Creating an online store was one of the last projects of my training, and also one of the most demanding. This project aimed to develop a complete e-commerce site, capable of managing products, users, and orders, while ensuring optimal transaction security. For this project, I used a combination of technologies, including HTML, CSS, JavaScript for the front-end, and MySQL for the database. This project was a real challenge as it required rigorous management of advanced features such as payment gateway integration, real-time inventory management, and performance optimization to deliver a high-quality user experience.'
            },
            'blog': {
                'title': 'Blog Creation',
                'full_description': 'The blog creation project, completed towards the end of my training, was one of the most complex projects I undertook. This project required mobilizing all the skills acquired throughout the year. The objective was to develop a complete website, from A to Z, that functions as a real blog. I used HTML, CSS, and JavaScript for front-end development, and MySQL for database management. The project included creating an article publishing system, user management, and comment moderation.'
            },
            'golanta': {
                'title': 'Golanta',
                'full_description': 'Golanta is a project inspired by survival and adventure games where participants must create an adventurer and customize them to face various challenges. This project emphasizes character originality, resource management, and the gamified aspect of the user experience. I used Golang for back-end management and data interaction, combined with web technologies for display and interactivity. The project included a dynamic form for creating adventurers, as well as a detailed profile page to view the character\'s characteristics.'
            },
            'infrastructure': {
                'title': 'Client-Server Architecture Infrastructure',
                'full_description': 'The Client-Server Architecture project aims to design and implement an information system (IS) for a small business. It is part of the Infrastructure and Information Systems training. The project required the use of virtual machines, setting up a network addressing plan, managing filtering rules, and automating backups. A functional website hosted on Apache or Nginx also had to be integrated, detailing the architecture and configurations implemented.'
            },
            'analyse-python': {
                'title': 'Data Analysis and Manipulation with Python',
                'full_description': 'Data analysis and manipulation with Python was a key project enabling the exploration, processing, and analysis of complex data sets. I particularly carried out data exploration and cleaning, advanced statistical analyses, visualization of trends and distributions, application of machine learning techniques, and the use of Fast Fourier Transform (FFT) to detect seasonal trends.'
            },
            'mini-projets-csharp': {
                'title': 'C# Mini-Projects',
                'full_description': 'The C# project consisted of creating several mini-projects to explore different features of the language. The projects included an interactive calculator, a weather application with API, a tic-tac-toe game, an interactive quiz system, and a playing card manipulation project. This project allowed me to strengthen my object-oriented programming skills and user interface development.'
            },
            'fablab': {
                'title': 'FabLab - Order Digitalization',
                'full_description': 'The FabLab project aimed to modernize the management of 3D printing orders by replacing a manual system with a powerful digital application. The project included order management, printer tracking, a dashboard with statistics, data export, and a notification system. The project took place over 5 days with rigorous planning.'
            },
            'jeu-dames': {
                'title': 'Checkers Game',
                'full_description': 'The Red Thread project involved developing an online checkers game using modern web technologies. The project uses PHP for game logic, MySQL for data storage, Canvas API for board display, and JavaScript for interactivity. Features include player management, an interactive board, game saving, and a responsive interface.'
            },
            'fridgevision': {
                'title': 'FridgeVision',
                'full_description': "FridgeVision is a Flutter-based mobile application that helps reduce food waste by detecting the food items present in your refrigerator and generating personalized recipes in real-time.\n\nMain features:\n- Food detection via computer vision or manual input\n- Global product search via the Open Food Facts API\n- Automatic recipe generation based on available ingredients\n- Intelligent notifications on expiration dates and usage suggestions\n- Food and recipe history\n- Intuitive and modern interface\n\nTechnical stack:\nFlutter (Dart), Open Food Facts API, Backend Node.js/Express or Firebase, AI (TensorFlow Lite, ML Kit), Push notifications."
            }
        }
    };

    // Ouvrir la modal
    document.querySelectorAll('.view-project').forEach(button => {
        button.addEventListener('click', function() {
            const projectId = this.dataset.projectId;
            const project = projects.find(p => p.id === projectId);
            
            if (project) {
                // Récupérer la langue actuelle au moment de l'ouverture
                const currentLang = localStorage.getItem('language') || 'fr';
                
                // Détermine le titre et la description en fonction de la langue
                let title = project.title;
                let description = project.full_description;
                
                // Si on est en anglais et qu'une traduction existe
                if (currentLang === 'en' && translations.en[projectId]) {
                    title = translations.en[projectId].title || title;
                    description = translations.en[projectId].full_description || description;
                }
                
                // Génère le contenu HTML avec la nouvelle structure
                let content = `
                    <div class="modal-header">
                        <h2>${title}</h2>
                        <div class="modal-tech-tags">
                            ${Array.isArray(project.technologies) ? project.technologies.map(tech => 
                                `<span class="modal-tech-tag">${tech}</span>`
                            ).join('') : ''}
                        </div>
                    </div>
                    
                    <div class="modal-body">
                        <div class="modal-image-container">
                            <img src="${project.thumbnail}" alt="${title}">
                        </div>
                        
                        <div class="modal-description">
                            ${description.replace(/\n/g, '<br>')}
                        </div>
                        
                        <div class="modal-features">
                            <h3 data-translate="projects_key_features">${currentLang === 'en' ? 'Key Features' : 'Fonctionnalités clés'}</h3>
                            <ul>
                                <li>${currentLang === 'en' ? 'Modern and responsive user interface' : 'Interface utilisateur moderne et responsive'}</li>
                                <li>${currentLang === 'en' ? 'Performance optimization' : 'Optimisation des performances'}</li>
                                <li>${currentLang === 'en' ? 'Scalable and maintainable architecture' : 'Architecture scalable et maintenable'}</li>
                                <li>${currentLang === 'en' ? 'Testing and quality validation' : 'Tests et validation qualité'}</li>
                            </ul>
                        </div>
                        
                        <div class="modal-actions">
                            <a href="#" class="modal-btn" onclick="alert('${currentLang === 'en' ? 'Demo not available for this project' : 'Demo non disponible pour ce projet'}')">
                                <i class="fas fa-eye"></i>
                                <span data-translate="projects_view_demo">${currentLang === 'en' ? 'View Demo' : 'Voir la démo'}</span>
                            </a>
                            <a href="#" class="modal-btn" onclick="alert('${currentLang === 'en' ? 'Source code not publicly available' : 'Code source non disponible publiquement'}')">
                                <i class="fab fa-github"></i>
                                <span data-translate="projects_view_code">${currentLang === 'en' ? 'View Code' : 'Voir le code'}</span>
                            </a>
                        </div>
                    </div>
                `;
                
                modalContent.innerHTML = content;
                modal.classList.add('active');
            }
        });
    });

    // Fermer la modal
    closeBtn.addEventListener('click', () => {
        modal.classList.remove('active');
    });

    // Fermer la modal en cliquant en dehors
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });
});
</script> 