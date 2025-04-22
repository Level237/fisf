<!-- Hero Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper  h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1: Présentation FISF -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 via-emerald-800/70 to-emerald-900/90"></div>
                <div class="absolute inset-0 bg-[url('{{ asset('assets/img/fisf-bg.jpg') }}')] bg-cover bg-center transform scale-110 transition-transform duration-700 ease-out group-hover:scale-100"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,0,0,0.2)_0%,rgba(0,0,0,0.4)_100%)]"></div>
                <div class="relative h-full flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl transform transition-all duration-700 ease-out translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="inline-block bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                                <span class="text-white text-sm font-medium">Bienvenue à la FISF</span>
                            </div>
                            <h1 class="text-5xl md:text-5xl font-bold text-white mb-6 leading-tight">
                                Fédération Internationale de Scrabble Francophone
                            </h1>
                            <p class="text-xl text-white/90 mb-8">
                                Promouvoir le Scrabble francophone à travers le monde et organiser des compétitions internationales d'excellence.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="group bg-white text-emerald-600 px-8 py-4 rounded-lg font-semibold hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    <span class="flex items-center">
                                        Découvrir la FISF
                                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                                <a href="#" class="group border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                                    <span class="flex items-center">
                                        Nos compétitions
                                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: ODS -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 via-emerald-800/70 to-emerald-900/90"></div>
                <div class="absolute inset-0 bg-[url('{{ asset('assets/img/ods-bg.jpg') }}')] bg-cover bg-center transform scale-110 transition-transform duration-700 ease-out group-hover:scale-100"></div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,0,0,0.2)_0%,rgba(0,0,0,0.4)_100%)]"></div>
                <div class="relative h-full flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl transform transition-all duration-700 ease-out translate-y-8 opacity-0 group-hover:translate-y-0 group-hover:opacity-100">
                            <div class="inline-block bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                                <span class="text-white text-sm font-medium">L'Officiel du Scrabble</span>
                            </div>
                            <h2 class="text-5xl md:text-5xl font-bold text-white mb-6 leading-tight">
                                La référence du Scrabble francophone
                            </h2>
                            <p class="text-xl text-white/90 mb-8">
                                Découvrez les règles officielles, améliorez votre jeu et devenez un expert du Scrabble.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="group bg-white text-emerald-600 px-8 py-4 rounded-lg font-semibold hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    <span class="flex items-center">
                                        Consulter l'ODS
                                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                                <a href="#" class="group border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                                    <span class="flex items-center">
                                        Règles du jeu
                                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
            <div class="scroll-down-indicator">
                <span class="scroll-down-text text-white text-sm font-medium mb-2 block">Défiler vers le bas</span>
                <div class="scroll-down-arrow"></div>
            </div>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 w-full">
        <svg class="w-full h-24" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 256L48 240C96 224 192 192 288 186.7C384 181 480 203 576 202.7C672 203 768 181 864 160C960 139 1056 117 1152 122.7C1248 128 1344 160 1392 176L1440 192V320H1392C1344 320 1248 320 1152 320C1056 320 960 320 864 320C768 320 672 320 576 320C480 320 384 320 288 320C192 320 96 320 48 320H0V256Z" fill="#059669"/>
        </svg>
    </div>
</section>

<style>
.hero-swiper {
    --swiper-navigation-size: 30px;
    --swiper-navigation-color: #ffffff;
    --swiper-pagination-color: #ffffff;
    --swiper-pagination-bullet-size: 12px;
    --swiper-pagination-bullet-inactive-color: rgba(255, 255, 255, 0.5);
    --swiper-pagination-bullet-inactive-opacity: 1;
}

.hero-swiper .swiper-button-next,
.hero-swiper .swiper-button-prev {
    background: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 50%;
    transition: all 0.3s ease;
    backdrop-filter: blur(4px);
}

.hero-swiper .swiper-button-next:hover,
.hero-swiper .swiper-button-prev:hover {
    background: rgba(0, 0, 0, 0.5);
    transform: scale(1.1);
}

.hero-swiper .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: #ffffff;
    opacity: 0.5;
    transition: all 0.3s ease;
    backdrop-filter: blur(4px);
}

.hero-swiper .swiper-pagination-bullet-active {
    opacity: 1;
    transform: scale(1.2);
    background: #ffffff;
}

.scroll-down-indicator {
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: bounce 2s infinite;
}

.scroll-down-arrow {
    width: 20px;
    height: 20px;
    border-right: 2px solid white;
    border-bottom: 2px solid white;
    transform: rotate(45deg);
    animation: arrow-pulse 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

@keyframes arrow-pulse {
    0% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

.swiper-slide {
    transition: transform 0.7s ease-out;
}

.swiper-slide-active .transform {
    transform: translateY(0) !important;
    opacity: 1 !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        on: {
            init: function() {
                this.slides[this.activeIndex].classList.add('group');
            },
            slideChange: function() {
                this.slides.forEach(slide => slide.classList.remove('group'));
                this.slides[this.activeIndex].classList.add('group');
            }
        }
    });

    // Scroll down indicator click handler
    document.querySelector('.scroll-down-indicator').addEventListener('click', function() {
        window.scrollTo({
            top: window.innerHeight,
            behavior: 'smooth'
        });
    });
});
</script>