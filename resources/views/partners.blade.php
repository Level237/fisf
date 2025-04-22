@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-b from-emerald-900 to-emerald-800 overflow-hidden">
        <div class="absolute inset-0 bg-pattern opacity-30"></div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-5xl font-bold text-white mb-6">Nos Partenaires</h1>
                <p class="text-xl text-white/90">Ils nous accompagnent dans le développement du Scrabble francophone</p>
            </div>
        </div>
    </section>

    <!-- Partenaires Principaux -->
     <!-- Partenaires -->
     <section class="py-16 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
           
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Logo Partenaire 1 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/Mattel_Scrabble.jpg') }}" alt="Partenaire 1" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 2 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/Moi_Mon_Cerveau_logo.jpg') }}" alt="Partenaire 2" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 3 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/Neurodon_logo.jpg') }}" alt="Partenaire 3" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 4 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/Lexibook.jpg') }}" alt="Partenaire 4" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 5 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/logo_Larousse.jpg') }}" alt="Partenaire 5" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 6 -->
                <div class="flex items-center justify-center p-6 bg-white rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg group">
                    <img src="{{ asset('assets/img/Jooble_Logo.png') }}" alt="Partenaire 6" class="h-12 w-auto opacity-60 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages des Partenaires -->
    <section class="py-20 bg-emerald-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce que disent nos partenaires</h2>
                <p class="text-xl text-gray-600">Découvrez les expériences de collaboration avec la FISF</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Mattel France</h4>
                            <p class="text-gray-600">Partenaire historique</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">"Notre collaboration avec la FISF a toujours été fructueuse. Ensemble, nous contribuons à promouvoir le Scrabble et à enrichir la culture francophone à travers le monde."</p>
                </div>

                <!-- Témoignage 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Larousse</h4>
                            <p class="text-gray-600">Partenaire éditorial</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">"La FISF est un partenaire clé dans notre mission de promotion de la langue française. Notre collaboration permet de maintenir l'excellence lexicale du Scrabble."</p>
                </div>

                <!-- Témoignage 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Lexibook</h4>
                            <p class="text-gray-600">Partenaire technologique</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed">"Notre partenariat avec la FISF nous permet d'innover dans le domaine des jeux éducatifs numériques tout en préservant l'essence du Scrabble."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-2/3 text-left mb-8 md:mb-0 md:pr-12">
                    <h2 class="text-3xl font-bold text-white mb-4">Devenez partenaire de la FISF</h2>
                    <p class="text-xl text-white/90">Rejoignez notre réseau de partenaires et contribuez au développement du Scrabble francophone à l'international. Ensemble, créons des opportunités uniques.</p>
                </div>
                <div class="md:w-1/3 flex flex-col items-center">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="mr-2">Devenir partenaire</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <p class="text-white/70 mt-4 text-sm">Découvrez nos offres de partenariat</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 