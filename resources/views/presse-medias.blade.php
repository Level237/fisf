@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section Dynamique -->
    <section class="relative min-h-[60vh] flex items-center bg-emerald-900">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/95 to-emerald-800/90"></div>
            <div class="absolute inset-0 bg-[url('/assets/img/pattern.svg')] opacity-20"></div>
            <!-- Grille animée -->
            <div class="absolute inset-0 grid grid-cols-3 md:grid-cols-6">
                @for ($i = 0; $i < 18; $i++)
                <div class="border-[0.5px] border-white/10"></div>
                @endfor
            </div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl">
                <span class="inline-block px-4 py-2 bg-emerald-800/50 text-emerald-100 rounded-full text-sm font-medium mb-6">
                    Espace Presse & Médias
                </span>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">Centre de Presse FISF</h1>
                <p class="text-xl text-white/90 mb-8 max-w-2xl">Découvrez notre actualité, nos communiqués de presse et notre présence médiatique.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact-presse" class="inline-flex items-center px-6 py-3 bg-white text-emerald-900 rounded-lg hover:bg-emerald-50 transition-colors">
                        Contact Presse
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#mediatheque" class="inline-flex items-center px-6 py-3 border-2 border-white text-white rounded-lg hover:bg-white/10 transition-colors">
                        Accéder à la médiathèque
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Derniers Communiqués de Presse -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Communiqués de Presse</h2>
                    <p class="text-gray-600 mt-2">Les dernières actualités de la FISF</p>
                </div>
                <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                    Voir tous les communiqués →
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Communiqué 1 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-sm font-medium rounded-full">Actualité</span>
                            <time class="text-sm text-gray-500 ml-4">12 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            La FISF annonce le Championnat du Monde 2024
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Paris accueillera le prochain Championnat du Monde de Scrabble francophone...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium inline-flex items-center">
                            Lire le communiqué
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Communiqué 2 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-medium rounded-full">Partenariat</span>
                            <time class="text-sm text-gray-500 ml-4">5 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Nouveau partenariat stratégique
                        </h3>
                        <p class="text-gray-600 mb-4">
                            La FISF signe un accord majeur pour le développement du Scrabble...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium inline-flex items-center">
                            Lire le communiqué
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Communiqué 3 -->
                <article class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-1 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-sm font-medium rounded-full">Innovation</span>
                            <time class="text-sm text-gray-500 ml-4">1 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            Lancement de la plateforme digitale
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Une nouvelle ère pour le Scrabble francophone avec notre plateforme...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium inline-flex items-center">
                            Lire le communiqué
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Revue de Presse -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">La FISF dans les Médias</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/img/media1.jpg') }}" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/lemonde-logo.png') }}" alt="Le Monde" class="h-6">
                            <time class="text-sm text-gray-500 ml-4">15 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            "Le Scrabble francophone en pleine expansion"
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Un article détaillé sur l'évolution du Scrabble francophone...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Lire l'article →</a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="aspect-video">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/tv5-logo.png') }}" alt="TV5" class="h-6">
                            <time class="text-sm text-gray-500 ml-4">10 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            "Le Scrabble, plus qu'un jeu"
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Reportage exclusif sur l'impact culturel du Scrabble...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Voir le reportage →</a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('assets/img/media3.jpg') }}" alt="Article" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/rtbf-logo.png') }}" alt="RTBF" class="h-6">
                            <time class="text-sm text-gray-500 ml-4">5 Mai 2024</time>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            "La nouvelle génération du Scrabble"
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Focus sur les jeunes champions qui révolutionnent...
                        </p>
                        <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">Lire l'article →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kit Média -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="bg-emerald-50 rounded-2xl p-8 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Kit Média</h2>
                            <p class="text-gray-600 mb-6">
                                Téléchargez notre kit média contenant logos, photos haute résolution et informations essentielles sur la FISF.
                            </p>
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                                Télécharger le kit
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-lg shadow">
                                <svg class="w-8 h-8 text-emerald-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <h3 class="font-semibold text-gray-900">Photos HD</h3>
                                <p class="text-sm text-gray-600">Images officielles</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow">
                                <svg class="w-8 h-8 text-emerald-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                <h3 class="font-semibold text-gray-900">Dossier de presse</h3>
                                <p class="text-sm text-gray-600">PDF détaillé</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow">
                                <svg class="w-8 h-8 text-emerald-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <h3 class="font-semibold text-gray-900">Logos</h3>
                                <p class="text-sm text-gray-600">Formats vectoriels</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow">
                                <svg class="w-8 h-8 text-emerald-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                <h3 class="font-semibold text-gray-900">Vidéos</h3>
                                <p class="text-sm text-gray-600">Clips promotionnels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Presse -->
    <section id="contact-presse" class="py-20 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('assets/img/pattern-bg.png') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-8">Contact Presse</h2>
                <p class="text-xl text-white/90 mb-12">
                    Notre équipe de communication est à votre disposition pour toute demande d'information ou d'interview.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-white">
                        <h3 class="text-xl font-semibold mb-4">Relations Presse</h3>
                        <p class="mb-4">Marie Dupont</p>
                        <a href="mailto:presse@fisf.net" class="text-emerald-300 hover:text-emerald-200">presse@fisf.net</a>
                        <p class="mt-2">+33 1 23 45 67 89</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 text-white">
                        <h3 class="text-xl font-semibold mb-4">Communication</h3>
                        <p class="mb-4">Jean Martin</p>
                        <a href="mailto:communication@fisf.net" class="text-emerald-300 hover:text-emerald-200">communication@fisf.net</a>
                        <p class="mt-2">+33 1 23 45 67 90</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 