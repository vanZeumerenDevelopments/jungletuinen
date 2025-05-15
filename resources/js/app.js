import './bootstrap';
import Glider from 'glider-js';
import 'glider-js/glider.min.css';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.glider');
    if (slider) {
        new Glider(slider, {
            slidesToShow: 1,
            slidesToScroll: 1,
            scrollLock: false,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('hamburgerToggle');
    const menu = document.getElementById('navMenu');
    const backgroundSection = document.getElementById('backgroundSection');

    if (toggleBtn && menu && backgroundSection) {
        toggleBtn.addEventListener('click', function () {
            const isOpen = menu.classList.toggle('show');

            // Wissel tussen z-3 en z-2 via classList
            backgroundSection.classList.remove(isOpen ? 'z-3' : 'z-2');
            backgroundSection.classList.add(isOpen ? 'z-2' : 'z-3');
        });

        document.addEventListener('click', function (e) {
            if (e.target?.id === 'menuClose' || (e.target.tagName === 'A' && menu.classList.contains('show'))) {
                menu.classList.remove('show');
                backgroundSection.classList.remove('z-2');
                backgroundSection.classList.add('z-3');
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Lightbox logica
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.querySelector('.lightbox-close');

    document.querySelectorAll('.slider-thumb').forEach(img => {
        img.addEventListener('click', (e) => {
            const fullImg = e.currentTarget.getAttribute('data-full');
            lightboxImg.src = fullImg;
            lightbox.classList.remove('hidden');
        });
    });

    closeBtn.addEventListener('click', () => {
        lightbox.classList.add('hidden');
        lightboxImg.src = '';
    });

    // Optioneel: sluiten op achtergrondklik
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.add('hidden');
            lightboxImg.src = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const glider = document.querySelector('.glider');

    if (glider) {
        glider.addEventListener('wheel', (e) => {
            e.preventDefault();
            glider.scrollLeft += e.deltaY;
        });
    }
});
