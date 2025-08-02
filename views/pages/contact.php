<?php
$title = "Contact";
$current_page = "contact";
?>

<main class="contact-page">
    <div class="container">
        <h1 data-translate="contact_title">Contactez-moi</h1>
        <p class="lead" data-translate="contact_lead">N'hésitez pas à me contacter pour toute question ou proposition de collaboration.</p>

        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <h3 data-translate="contact_email">Email</h3>
                <p><a href="mailto:hugo.bisserier.pro@gmail.com">hugo.bisserier.pro@gmail.com</a></p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <h3 data-translate="contact_phone">Téléphone</h3>
                <p><a href="tel:+33682861309">06 82 86 13 09</a></p>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3 data-translate="contact_address">Adresse</h3>
                <p>2 Rue de la Fourane<br>13090 Aix-en-Provence<br>France</p>
            </div>
        </div>

        <div class="contact-form">
            <h2 data-translate="contact_form_title">Envoyez-moi un message</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name" data-translate="contact_form_name">Nom complet</label>
                    <input type="text" id="name" name="name" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" data-translate="contact_form_email">Email</label>
                    <input type="email" id="email" name="email" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="subject" data-translate="contact_form_subject">Sujet</label>
                    <input type="text" id="subject" name="subject" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="message" data-translate="contact_form_message">Message</label>
                    <textarea id="message" name="message" required class="form-control" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" data-translate="contact_form_send">
                    <i class="fas fa-paper-plane"></i> Envoyer le message
                </button>
            </form>
        </div>

        <div class="social-links">
            <h3 data-translate="contact_social">Retrouvez-moi aussi sur</h3>
            <div class="social-icons">
                <a href="https://github.com/MentalOfCrow" target="_blank" title="GitHub">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/hugo-bisserier-a67327324/" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</main> 