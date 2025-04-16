@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Swiper -->
    <div class="swiper main-slider h-screen">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1591635566278-624c4b54bd7e" alt="Scrabble" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4 opacity-0 translate-y-10" data-gsap="title">
                            Bienvenue à la FISF
                        </h1>
                        <p class="text-xl md:text-2xl mb-8 opacity-0 translate-y-10" data-gsap="subtitle">
                            La passion du Scrabble francophone
                        </p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition-colors opacity-0 translate-y-10" data-gsap="button">
                            Découvrir
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative">
                <img src="https://images.unsplash.com/photo-1591635567477-877510eafd1a" alt="Competition" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white">
                        <h2 class="text-4xl md:text-6xl font-bold mb-4 opacity-0 translate-y-10" data-gsap="title">
                            Compétitions Internationales
                        </h2>
                        <p class="text-xl md:text-2xl mb-8 opacity-0 translate-y-10" data-gsap="subtitle">
                            Participez aux plus grands tournois
                        </p>
                        <a href="#" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition-colors opacity-0 translate-y-10" data-gsap="button">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
@endsection