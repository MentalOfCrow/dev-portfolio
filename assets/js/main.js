'use strict';

const root = document.documentElement;
root.classList.add('js');

const storage = {
    get(key) {
        try {
            return window.localStorage.getItem(key);
        } catch {
            return null;
        }
    },
    set(key, value) {
        try {
            window.localStorage.setItem(key, value);
        } catch {
            // The preference simply remains active for the current page.
        }
    },
};

function setTheme(theme) {
    const nextTheme = theme === 'light' ? 'light' : 'dark';
    root.dataset.theme = nextTheme;
    document.querySelector('meta[name="theme-color"]')?.setAttribute('content', nextTheme === 'light' ? '#edf3f8' : '#08111f');

    const toggle = document.querySelector('[data-theme-toggle]');
    if (toggle) {
        toggle.setAttribute('aria-label', nextTheme === 'dark' ? 'Activer le thème clair' : 'Activer le thème sombre');
    }
}

function setLanguage(language) {
    const nextLanguage = language === 'en' ? 'en' : 'fr';
    root.dataset.language = nextLanguage;
    root.lang = nextLanguage;

    const label = document.querySelector('[data-language-label]');
    const toggle = document.querySelector('[data-language-toggle]');
    if (label) {
        label.textContent = nextLanguage.toUpperCase();
    }
    if (toggle) {
        toggle.setAttribute('aria-label', nextLanguage === 'fr' ? 'FR — Display the website in English' : 'EN — Afficher le site en français');
    }
}

const savedTheme = storage.get('portfolio-theme');
setTheme(savedTheme || 'dark');
setLanguage(storage.get('portfolio-language') || 'fr');

document.querySelector('[data-theme-toggle]')?.addEventListener('click', () => {
    const nextTheme = root.dataset.theme === 'dark' ? 'light' : 'dark';
    setTheme(nextTheme);
    storage.set('portfolio-theme', nextTheme);
});

document.querySelector('[data-language-toggle]')?.addEventListener('click', () => {
    const nextLanguage = root.dataset.language === 'fr' ? 'en' : 'fr';
    setLanguage(nextLanguage);
    storage.set('portfolio-language', nextLanguage);
});

const navToggle = document.querySelector('[data-nav-toggle]');
const navigation = document.querySelector('[data-nav]');

function closeNavigation() {
    if (!navToggle || !navigation) return;
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.setAttribute('aria-label', 'Ouvrir le menu');
    navigation.classList.remove('is-open');
}

navToggle?.addEventListener('click', () => {
    if (!navigation) return;
    const willOpen = navToggle.getAttribute('aria-expanded') !== 'true';
    navToggle.setAttribute('aria-expanded', String(willOpen));
    navToggle.setAttribute('aria-label', willOpen ? 'Fermer le menu' : 'Ouvrir le menu');
    navigation.classList.toggle('is-open', willOpen);
});

navigation?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeNavigation));

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeNavigation();
});

window.matchMedia('(min-width: 901px)').addEventListener('change', (event) => {
    if (event.matches) closeNavigation();
});

const header = document.querySelector('[data-header]');
function updateHeader() {
    header?.classList.toggle('is-scrolled', window.scrollY > 12);
}
updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

const toast = document.querySelector('[data-toast]');
let toastTimer;

function showToast(message) {
    if (!toast) return;
    toast.textContent = message;
    toast.classList.add('is-visible');
    window.clearTimeout(toastTimer);
    toastTimer = window.setTimeout(() => toast.classList.remove('is-visible'), 2200);
}

async function copyText(value) {
    if (navigator.clipboard && window.isSecureContext) {
        await navigator.clipboard.writeText(value);
        return;
    }

    const input = document.createElement('textarea');
    input.value = value;
    input.setAttribute('readonly', '');
    input.style.position = 'fixed';
    input.style.opacity = '0';
    document.body.appendChild(input);
    input.select();
    document.execCommand('copy');
    input.remove();
}

document.querySelectorAll('[data-copy]').forEach((button) => {
    button.addEventListener('click', async () => {
        const value = button.getAttribute('data-copy');
        if (!value) return;
        try {
            await copyText(value);
            const message = root.dataset.language === 'en' ? `Copied: ${value}` : `${button.getAttribute('data-copy-label') || 'Copié'} : ${value}`;
            showToast(message);
        } catch {
            showToast(root.dataset.language === 'en' ? `Copy manually: ${value}` : `Copiez manuellement : ${value}`);
        }
    });
});

const revealItems = [...document.querySelectorAll('[data-reveal]')];
const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (reducedMotion || !('IntersectionObserver' in window)) {
    revealItems.forEach((item) => item.classList.add('is-visible'));
} else {
    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            currentObserver.unobserve(entry.target);
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

    revealItems.forEach((item) => observer.observe(item));

    // Keep every section accessible to full-page captures and unusual viewport behavior.
    window.setTimeout(() => {
        revealItems.forEach((item) => {
            item.classList.add('is-visible');
            observer.unobserve(item);
        });
    }, 2200);
}
