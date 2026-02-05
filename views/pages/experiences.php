<?php
$title = "Expériences";
$current_page = "experiences";
?>

<main class="container">
    <section class="page-header">
        <h1 data-translate="experiences_title">Expériences</h1>
        <p class="subtitle" data-translate="experiences_subtitle">Stages et expériences professionnelles</p>
        <p data-translate="experiences_intro">
            Aperçu concis de mes expériences. Chaque stage est résumé en quelques lignes,
            avec un lien direct pour télécharger le rapport complet au format PDF.
        </p>
    </section>

    <section id="experiences" class="experiences">

    <!-- SHF (2024–2025) -->
    <article class="experience-card" aria-labelledby="exp-shf">
        <h3 id="exp-shf" data-translate="shf_title">S.H.F. Informatique — Stage 2024–2025</h3>
        <p data-translate="shf_company_line"><strong>Entreprise :</strong> S.H.F. Informatique — Marseille</p>
        <p class="exp-summary" data-translate="shf_summary">
            Administration systèmes & réseaux : AD/DNS/DHCP/GPO, laboratoire Hyper-V et procédures.
            Maquette Fortinet, POC IDS (SELKS/Suricata) et standardisation pour réduire les incidents.
            Documentation opérationnelle et mini-formations internes.
        </p>
        <p class="exp-tags" data-translate="shf_tags">Windows Server · Hyper-V · GPO · Fortinet · Suricata/SELKS</p>
        <p>
            <a class="btn pdf" href="/assets/docs/Rapport_Stage_SHF_2024-2025.pdf" target="_blank" rel="noopener" download data-translate="pdf_download_fr_only">
                📄 Télécharger le rapport (PDF — uniquement en français)
            </a>
        </p>
    </article>

    <!-- MEB (2023–2024) -->
    <article class="experience-card" aria-labelledby="exp-meb">
        <h3 id="exp-meb" data-translate="meb_title">MEB — Stage 2023–2024</h3>
        <p data-translate="meb_company_line"><strong>Entreprise :</strong> MEB (Mobilité Énergie Bâtiment) — Bègles</p>
        <p class="exp-summary" data-translate="meb_summary">
            Immersion en économie de la construction : suivi de projets, coordination des intervenants,
            participation aux réceptions de travaux et mise à jour des tableaux de bord.
            Découverte des outils métier (MS Project, AutoCAD/Revit) et des processus DO.
        </p>
        <p class="exp-tags" data-translate="meb_tags">Gestion de projet · Suivi chantier · Bureautique pro</p>
        <p>
            <a class="btn pdf" href="/assets/docs/Rapport_Stage_MEB_2023-2024.pdf" target="_blank" rel="noopener" download data-translate="pdf_download_fr_only">
                📄 Télécharger le rapport (PDF — uniquement en français)
            </a>
        </p>
    </article>

    <!-- Sicomin (2025–2026) -->
    <article class="experience-card" aria-labelledby="exp-sicomin">
        <h3 id="exp-sicomin" data-translate="sicomin_title">Sicomin — Stage 2025–2026</h3>
        <p data-translate="sicomin_company_line"><strong>Entreprise :</strong> Sicomin — Châteauneuf-les-Martigues</p>
        <p class="exp-summary" data-translate="sicomin_summary">
            Stage de 4 mois (octobre 2025 – janvier 2026) en informatique.
            Missions en Data et Business Intelligence, cybersécurité et administration système.
            Travail sur site au sein d'une entreprise spécialisée dans les résines époxy et matériaux composites.
        </p>
        <p class="exp-tags" data-translate="sicomin_tags">Data & BI · Cybersécurité · Administration système</p>
        <p>
            <span class="badge" data-translate="sicomin_badge">Stage terminé</span>
        </p>
    </article>

    <!-- Recherche alternance 2026 -->
    <article class="experience-card soon" aria-labelledby="exp-recherche">
        <h3 id="exp-recherche" data-translate="recherche_title">2026 — Recherche d'alternance</h3>
        <p class="exp-summary" data-translate="recherche_summary">
            Recherche active d'une alternance dans tous les domaines de l'informatique : systèmes, réseaux, cybersécurité, développement, infrastructure cloud.
            Disponible dès maintenant et jusqu'à septembre 2026. Ouvert à toutes les opportunités.
        </p>
        <p class="exp-tags" data-translate="recherche_tags">Tous domaines IT · Cybersécurité · Infrastructure · Développement</p>
        <p>
            <span class="badge" data-translate="recherche_badge">En recherche</span>
        </p>
    </article>
    </section>
</main>
