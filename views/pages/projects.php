<?php
$projects = [
    [
        'name' => 'NoSQL Cyber Graph',
        'image' => 'cyber-graph.webp',
        'altFr' => 'Cartographie visuelle de chemins d’attaque dans un réseau',
        'altEn' => 'Visual map of attack paths through a network',
        'descriptionFr' => 'Application Neo4j de cartographie d’un système d’information : chemins d’attaque, ressources critiques, vulnérabilités, matrice de risque et simulation de segmentation.',
        'descriptionEn' => 'Neo4j application for information-system mapping: attack paths, critical assets, vulnerabilities, risk matrix and segmentation simulation.',
        'tags' => ['Neo4j', 'Cypher', 'Python', 'FastAPI', 'Docker'],
        'featured' => true,
    ],
    [
        'name' => 'Y-Tech DevOps',
        'image' => 'devops-infrastructure.webp',
        'altFr' => 'Pipeline DevOps reliant des conteneurs, une application documentaire et PostgreSQL',
        'altEn' => 'DevOps pipeline connecting containers, a documentation platform and PostgreSQL',
        'descriptionFr' => 'Industrialisation d’une base documentaire Wiki.js avec PostgreSQL, Docker, persistance, sauvegarde, restauration et pipeline GitLab CI/CD.',
        'descriptionEn' => 'Industrialized Wiki.js documentation platform with PostgreSQL, Docker, persistence, backup, restore and a GitLab CI/CD pipeline.',
        'tags' => ['Docker', 'PostgreSQL', 'GitLab CI/CD', 'Shell'],
        'featured' => true,
    ],
    [
        'name' => 'FabLab Operations',
        'image' => 'fablab-operations.webp',
        'altFr' => 'Imprimante 3D connectée à un tableau de suivi des commandes',
        'altEn' => '3D printer connected to an order tracking dashboard',
        'descriptionFr' => 'Plateforme de gestion des commandes d’impression 3D, de la disponibilité des imprimantes, de la planification et du suivi d’avancement.',
        'descriptionEn' => 'Platform for managing 3D printing orders, printer availability, scheduling and progress tracking.',
        'tags' => ['PHP', 'MySQL', 'MariaDB', 'JavaScript'],
        'featured' => false,
    ],
    [
        'name' => 'Jeu de dames en ligne',
        'image' => 'online-checkers.webp',
        'altFr' => 'Plateau de dames connecté entre deux joueurs',
        'altEn' => 'Connected checkers board between two players',
        'descriptionFr' => 'Jeu de dames international avec authentification, matchmaking, mode contre une IA, plateau interactif et suivi des parties.',
        'descriptionEn' => 'International checkers game with authentication, matchmaking, AI mode, interactive board and game tracking.',
        'tags' => ['PHP', 'MySQL', 'JavaScript', 'Canvas'],
        'featured' => false,
    ],
    [
        'name' => 'Go Music API',
        'image' => 'go-music-api.webp',
        'altFr' => 'Passerelle API transformant des données musicales en cartes et formes d’onde',
        'altEn' => 'API gateway transforming music data into cards and waveforms',
        'descriptionFr' => 'Projet Go autour d’une API musicale, avec requêtes HTTP, OAuth, récupération d’albums et affichage de détails de pistes.',
        'descriptionEn' => 'Go project built around a music API with HTTP requests, OAuth, album retrieval and track-detail rendering.',
        'tags' => ['Go', 'Gin', 'OAuth 2.0', 'API REST'],
        'featured' => false,
    ],
    [
        'name' => 'YJamesRun',
        'image' => 'unity-arcade.webp',
        'altFr' => 'Deux personnages abstraits dans un jeu de course d’arcade',
        'altEn' => 'Two abstract characters in an arcade running game',
        'descriptionFr' => 'Jeu de course versus à deux joueurs conçu sous Unity pour une borne d’arcade, avec obstacles et progression en temps limité.',
        'descriptionEn' => 'Two-player versus runner built in Unity for an arcade cabinet, with obstacles and time-based progression.',
        'tags' => ['Unity', 'C#', '3D', 'Arcade'],
        'featured' => false,
    ],
];
?>

<main id="main-content">
    <section class="page-hero section projects-hero">
        <div class="shell page-hero-grid">
            <div data-reveal>
                <span class="eyebrow"><span lang="fr">Réalisations</span><span lang="en">Selected work</span> · 2023—2026</span>
                <h1><span lang="fr">Des systèmes, des applications et beaucoup de travail en privé.</span><span lang="en">Systems, applications and a lot of private work.</span></h1>
            </div>
            <div class="page-intro" data-reveal>
                <p lang="fr">La majorité de mes dépôts contient des applications mobiles, des sites et des expérimentations qui restent privés. Cette sélection publique évolue avec mon GitHub.</p>
                <p lang="en">Most of my repositories contain mobile applications, websites and experiments that remain private. This public selection evolves with my GitHub.</p>
            </div>
        </div>
        <div class="shell repository-summary" data-reveal>
            <div><strong>37</strong><span><span lang="fr">dépôts</span><span lang="en">repositories</span></span></div>
            <div><strong>14</strong><span><span lang="fr">publics</span><span lang="en">public</span></span></div>
            <div><strong>23</strong><span><span lang="fr">privés</span><span lang="en">private</span></span></div>
            <p><span lang="fr">Instantané vérifié le 18 juillet 2026. Aucun jeton GitHub ni appel API n’est utilisé sur ce site.</span><span lang="en">Snapshot verified on July 18, 2026. No GitHub token or API call is used on this website.</span></p>
        </div>
    </section>

    <section class="section section-contrast">
        <div class="shell project-grid">
            <?php foreach ($projects as $index => $project): ?>
                <article class="project-card<?= $project['featured'] ? ' project-featured' : '' ?>" data-reveal>
                    <div class="project-media">
                        <img src="/assets/images/projects/<?= escape($project['image']) ?>" width="1280" height="720" loading="lazy" alt="<?= escape($project['altFr']) ?>">
                        <span class="project-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                    </div>
                    <div class="project-content">
                        <div class="project-title-row"><h2><?= escape($project['name']) ?></h2><span class="project-visibility"><span lang="fr">Public</span><span lang="en">Public</span></span></div>
                        <p lang="fr"><?= escape($project['descriptionFr']) ?></p>
                        <p lang="en"><?= escape($project['descriptionEn']) ?></p>
                        <ul class="inline-tags" aria-label="Technologies">
                            <?php foreach ($project['tags'] as $tag): ?><li><?= escape($tag) ?></li><?php endforeach; ?>
                        </ul>
                        <div class="project-actions">
                            <button class="button button-primary" type="button" data-copy="ramenmakidaki" data-copy-label="Discord copié">Discord · ramenmakidaki</button>
                            <a class="button button-secondary" href="https://github.com/MentalOfCrow" target="_blank" rel="noopener noreferrer">GitHub <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>

            <article class="project-card project-featured project-future" data-reveal>
                <div class="project-media">
                    <img src="/assets/images/projects/future-cyber-mobile-v2.webp" width="1280" height="720" loading="lazy" alt="Application mobile confidentielle représentée par un parcours de décisions et de sécurité">
                    <span class="project-number">07</span>
                </div>
                <div class="project-content">
                    <div class="project-title-row"><h2><span lang="fr">Futur projet cyber</span><span lang="en">Upcoming cyber project</span></h2><span class="project-visibility project-private"><span lang="fr">Privé</span><span lang="en">Private</span></span></div>
                    <p lang="fr">Application mobile dans la cybersécurité. Un nouveau projet arrive prochainement ; je ne peux pas donner plus de détails pour le moment.</p>
                    <p lang="en">A mobile application in cybersecurity. A new project is coming soon; I cannot share more details yet.</p>
                    <ul class="inline-tags"><li>Flutter</li><li>Dart</li><li>Android</li></ul>
                    <span class="text-link text-link-muted"><span lang="fr">Lien Play Store bientôt</span><span lang="en">Play Store link coming soon</span></span>
                    <div class="project-actions">
                        <button class="button button-primary" type="button" data-copy="ramenmakidaki" data-copy-label="Discord copié">Discord · ramenmakidaki</button>
                        <a class="button button-secondary" href="https://github.com/MentalOfCrow" target="_blank" rel="noopener noreferrer">GitHub <span aria-hidden="true">↗</span></a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="shell private-work" data-reveal>
            <div><span class="eyebrow"><span lang="fr">Travaux privés</span><span lang="en">Private work</span></span><h2><span lang="fr">Le GitHub public n’est qu’une partie du parcours.</span><span lang="en">Public GitHub is only part of the journey.</span></h2></div>
            <div>
                <p lang="fr">Plusieurs applications mobiles, sites web, prototypes et projets d’infrastructure ne sont pas accessibles publiquement. Pour une collaboration sérieuse, je peux présenter le contexte et les choix techniques sans exposer le code ni les informations sensibles.</p>
                <p lang="en">Several mobile applications, websites, prototypes and infrastructure projects are not publicly accessible. For a serious collaboration, I can present their context and technical decisions without exposing code or sensitive information.</p>
                <div class="button-row"><button class="button button-primary" type="button" data-copy="ramenmakidaki" data-copy-label="Discord copié"><span lang="fr">Discord · ramenmakidaki</span><span lang="en">Discord · ramenmakidaki</span></button><a class="button button-secondary" href="https://github.com/MentalOfCrow" target="_blank" rel="noopener noreferrer">GitHub <span aria-hidden="true">↗</span></a></div>
            </div>
        </div>
    </section>
</main>
