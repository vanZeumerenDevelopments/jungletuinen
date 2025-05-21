import './bootstrap';
import Glider from 'glider-js';
import 'glider-js/glider.min.css';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.glider');
    if (slider) {
        new Glider(slider, {
            slidesToShow: 1,
            slidesToScroll: 1,
            scrollLock: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 576, // kleine telefoons
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1,
                        scrollLock: true
                    }
                },
                {
                    breakpoint: 768, // tablets
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 992, // laptops
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1200, // desktops
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
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
    const jungleBox = document.querySelector('.jungle-box');

    if (toggleBtn && menu) {
        toggleBtn.addEventListener('click', function () {
            const isOpen = menu.classList.toggle('show');

            [backgroundSection, jungleBox].forEach(el => {
                if (el) {
                    el.classList.remove(isOpen ? 'z-3' : 'z-2');
                    el.classList.add(isOpen ? 'z-2' : 'z-3');
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (e.target?.id === 'menuClose' || (e.target.tagName === 'A' && menu.classList.contains('show'))) {
                menu.classList.remove('show');

                [backgroundSection, jungleBox].forEach(el => {
                    if (el) {
                        el.classList.remove('z-2');
                        el.classList.add('z-3');
                    }
                });
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
