<!-- Hero Section -->
<section class="relative h-screen">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1: Présentation FISF -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/80 to-emerald-800/60"></div>
                <div class="absolute inset-0 bg-[url('{{ asset('assets/img/fisf-bg.jpg') }}')] bg-cover bg-center"></div>
                <div class="relative h-full flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl">
                            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                                Fédération Internationale de Scrabble Francophone
                            </h1>
                            <p class="text-xl text-white/90 mb-8">
                                Promouvoir le Scrabble francophone à travers le monde et organiser des compétitions internationales d'excellence.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-semibold hover:bg-emerald-50 transition-colors">
                                    Découvrir la FISF
                                </a>
                                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition-colors">
                                    Nos compétitions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: ODS -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/80 to-emerald-800/60"></div>
                <div class="absolute inset-0 bg-[url('{{ asset('assets/img/ods-bg.jpg') }}')] bg-cover bg-center"></div>
                <div class="relative h-full flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl">
                            <h2 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                                L'Officiel du Scrabble
                            </h2>
                            <p class="text-xl text-white/90 mb-8">
                                La référence incontournable pour tous les joueurs de Scrabble francophone. Découvrez les règles officielles et améliorez votre jeu.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="bg-white text-emerald-600 px-8 py-4 rounded-lg font-semibold hover:bg-emerald-50 transition-colors">
                                    Consulter l'ODS
                                </a>
                                <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white/10 transition-colors">
                                    Règles du jeu
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
}

.hero-swiper .swiper-button-next:hover,
.hero-swiper .swiper-button-prev:hover {
    background: rgba(0, 0, 0, 0.5);
}

.hero-swiper .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: #ffffff;
    opacity: 0.5;
    transition: all 0.3s ease;
}

.hero-swiper .swiper-pagination-bullet-active {
    opacity: 1;
    transform: scale(1.2);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.hero-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
</script> 