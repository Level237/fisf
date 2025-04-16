import './bootstrap';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Initialize GSAP ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Header animation on scroll
const header = document.getElementById('main-header');
if (header) {
    ScrollTrigger.create({
        start: 'top -80',
        onUpdate: (self) => {
            if (self.direction === 1) {
                header.classList.add('bg-white', 'shadow-lg');
                header.classList.remove('bg-transparent');
                // Change text color to dark when header has background
                const links = header.querySelectorAll('a');
                links.forEach(link => {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-800');
                });
            } else {
                header.classList.remove('bg-white', 'shadow-lg');
                header.classList.add('bg-transparent');
                // Change text color back to white when header is transparent
                const links = header.querySelectorAll('a');
                links.forEach(link => {
                    link.classList.add('text-white');
                    link.classList.remove('text-gray-800');
                });
            }
        }
    });
}

// Initialize Swiper
const swiper = new Swiper('.main-slider', {
    modules: [Navigation, Pagination, Autoplay],
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChange: () => {
            // Animate slide content
            const activeSlide = document.querySelector('.swiper-slide-active');
            if (activeSlide) {
                const title = activeSlide.querySelector('[data-gsap="title"]');
                const subtitle = activeSlide.querySelector('[data-gsap="subtitle"]');
                const button = activeSlide.querySelector('[data-gsap="button"]');

                gsap.fromTo([title, subtitle, button],
                    {
                        opacity: 0,
                        y: 20
                    },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        stagger: 0.2,
                        ease: 'power2.out'
                    }
                );
            }
        }
    }
});
