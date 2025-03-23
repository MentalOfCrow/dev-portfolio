<?php
$title = "Compétences";
$current_page = "skills";
?>

<main class="container">
    <section class="page-header">
        <h1 data-translate="skills_title">Mes Compétences</h1>
        <p class="subtitle" data-translate="skills_subtitle">Expertise technique et outils maîtrisés</p>
    </section>

    <div class="skills-container">
        <!-- Langages de Programmation -->
        <section class="skill-section">
            <h2 data-translate="skills_languages_title"><i class="fas fa-code"></i> Langages de Programmation</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-php"></i>
                        <h3>PHP</h3>
                    </div>
                    <div class="skill-level" data-level="80">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_php_1">Développement Backend</li>
                        <li data-translate="skills_php_2">API REST</li>
                        <li data-translate="skills_php_3">Gestion BDD</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-js"></i>
                        <h3>JavaScript</h3>
                    </div>
                    <div class="skill-level" data-level="85">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_js_1">ES6+</li>
                        <li data-translate="skills_js_2">DOM Manipulation</li>
                        <li data-translate="skills_js_3">Asynchrone</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-python"></i>
                        <h3>Python</h3>
                    </div>
                    <div class="skill-level" data-level="75">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_python_1">Data Analysis</li>
                        <li data-translate="skills_python_2">Pandas & NumPy</li>
                        <li data-translate="skills_python_3">Automatisation</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-golang"></i>
                        <h3>Golang</h3>
                    </div>
                    <div class="skill-level" data-level="65">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_go_1">Backend Development</li>
                        <li data-translate="skills_go_2">Concurrence</li>
                        <li data-translate="skills_go_3">APIs</li>
                    </ul>
                </div>
                
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-windows"></i>
                        <h3>C#</h3>
                    </div>
                    <div class="skill-level" data-level="70">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_csharp_1">Développement .NET</li>
                        <li data-translate="skills_csharp_2">Blazor</li>
                        <li data-translate="skills_csharp_3">Applications Windows</li>
                    </ul>
                </div>
                
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-java"></i>
                        <h3>Java</h3>
                    </div>
                    <div class="skill-level" data-level="65">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_java_1">POO</li>
                        <li data-translate="skills_java_2">Spring Boot</li>
                        <li data-translate="skills_java_3">Applications Android</li>
                    </ul>
                </div>
                
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-react"></i>
                        <h3>React Native</h3>
                    </div>
                    <div class="skill-level" data-level="60">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_reactnative_1">Applications mobiles</li>
                        <li data-translate="skills_reactnative_2">Navigation</li>
                        <li data-translate="skills_reactnative_3">Hooks</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Technologies Web -->
        <section class="skill-section">
            <h2 data-translate="skills_web_title"><i class="fas fa-globe"></i> Technologies Web</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-html5"></i>
                        <h3>HTML5/CSS3</h3>
                    </div>
                    <div class="skill-level" data-level="90">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_html_1">Responsive Design</li>
                        <li data-translate="skills_html_2">Flexbox/Grid</li>
                        <li data-translate="skills_html_3">Animations</li>
                    </ul>
                </div>

                <div class="skill-card">
                    <div class="skill-header">
                        <i class="fab fa-css3"></i>
                        <h3>Frameworks CSS</h3>
                    </div>
                    <div class="skill-level" data-level="85">
                        <div class="level-bar"></div>
                    </div>
                    <ul class="skill-details">
                        <li data-translate="skills_css_1">Tailwind CSS</li>
                        <li data-translate="skills_css_2">Bootstrap</li>
                        <li data-translate="skills_css_3">SASS/SCSS</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Outils et Environnements -->
        <section class="skill-section">
            <h2 data-translate="skills_tools_title"><i class="fas fa-tools"></i> Outils et Environnements</h2>
            <div class="tools-grid">
                <div class="tool-card">
                    <i class="fab fa-git-alt"></i>
                    <h3 data-translate="skills_git_title">Contrôle de Version</h3>
                    <ul>
                        <li>Git</li>
                        <li>GitHub</li>
                        <li>GitLab</li>
                    </ul>
                </div>

                <div class="tool-card">
                    <i class="fas fa-database"></i>
                    <h3 data-translate="skills_db_title">Bases de Données</h3>
                    <ul>
                        <li>MySQL</li>
                        <li>PostgreSQL</li>
                        <li>MongoDB</li>
                    </ul>
                </div>

                <div class="tool-card">
                    <i class="fas fa-server"></i>
                    <h3 data-translate="skills_server_title">Serveurs & Déploiement</h3>
                    <ul>
                        <li>Apache</li>
                        <li>Nginx</li>
                        <li>Linux</li>
                    </ul>
                </div>

                <div class="tool-card">
                    <i class="fas fa-code-branch"></i>
                    <h3 data-translate="skills_dev_title">Outils de Développement</h3>
                    <ul>
                        <li>VS Code</li>
                        <li>Docker</li>
                        <li>Postman</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des barres de niveau
    const skillLevels = document.querySelectorAll('.skill-level');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const level = entry.target.dataset.level;
                entry.target.querySelector('.level-bar').style.width = `${level}%`;
            }
        });
    }, { threshold: 0.5 });

    skillLevels.forEach(level => observer.observe(level));
});
</script> 