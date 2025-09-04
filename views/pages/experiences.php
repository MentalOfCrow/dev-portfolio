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

    <!-- À venir (2025–2026) -->
    <article class="experience-card soon" aria-labelledby="exp-soon">
        <h3 id="exp-soon" data-translate="experiences_soon_title">À venir — 2025–2026</h3>
        <p class="exp-summary" data-translate="soon_summary">
            Expérience en préparation dans le domaine des systèmes, réseaux et cybersécurité.
            Périmètre encore en cours de définition ; plus d’informations seront ajoutées prochainement.
        </p>
        <p class="exp-tags" data-translate="soon_tags">Systèmes & Réseaux · Cybersécurité · Observabilité</p>
        <p>
            <span class="badge" data-translate="soon_badge">En préparation</span>
        </p>
    </article>
    </section>
</main>
