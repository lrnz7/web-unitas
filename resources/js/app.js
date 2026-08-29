import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('navbar-toggle-btn');
    const mobileMenu = document.getElementById('mobile-nav-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', () => {
            const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
            toggleBtn.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');

            if (hamburgerIcon && closeIcon) {
                hamburgerIcon.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('block');
                closeIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('block');
            }
        });

        // Close mobile menu on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                toggleBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.add('hidden');
                if (hamburgerIcon && closeIcon) {
                    hamburgerIcon.classList.remove('hidden');
                    hamburgerIcon.classList.add('block');
                    closeIcon.classList.add('hidden');
                    closeIcon.classList.remove('block');
                }
            }
        });
    }
});
