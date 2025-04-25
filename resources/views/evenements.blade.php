@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <section class="relative py-20 bg-emerald-900">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/scrabble-bg.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/95 to-emerald-800/90"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Événements FISF</h1>
                <p class="text-xl text-white/90 mb-8">Découvrez tous les événements du Scrabble francophone</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#upcoming" class="inline-flex items-center px-6 py-3 bg-white text-emerald-900 rounded-lg hover:bg-emerald-50 transition-colors">
                        Événements à venir
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <a href="#calendar" class="inline-flex items-center px-6 py-3 border-2 border-white text-white rounded-lg hover:bg-white/10 transition-colors">
                        Voir le calendrier complet
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtres et Recherche -->
    <section class="py-8 bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap items-center gap-4">
                    <button class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">
                        Tous les événements
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                        Championnats
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                        Festivals
                    </button>
                    <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                        Tournois
                    </button>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Rechercher un événement..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Événements à Venir -->
    <section id="upcoming" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Événements à venir</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Événement Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img/event1.jpg') }}" alt="Championnat" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-emerald-500 text-white text-sm font-semibold rounded-full">
                                Championnat
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-emerald-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            15-20 Juillet 2024
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Championnat du Monde 2024</h3>
                        <p class="text-gray-600 mb-4">Le plus grand événement de l'année réunissant les meilleurs joueurs mondiaux.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Paris, France
                            </span>
                            <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Événement Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img/event2.jpg') }}" alt="Festival" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500 text-white text-sm font-semibold rounded-full">
                                Festival
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-emerald-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            1-5 Septembre 2024
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Festival International de Vichy</h3>
                        <p class="text-gray-600 mb-4">Une semaine de compétitions et d'animations dans un cadre exceptionnel.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Vichy, France
                            </span>
                            <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Événement Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all hover:-translate-y-1 hover:shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img/event3.jpg') }}" alt="Tournoi" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-purple-500 text-white text-sm font-semibold rounded-full">
                                Tournoi
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-emerald-600 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            20-21 Octobre 2024
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Open de Bruxelles</h3>
                        <p class="text-gray-600 mb-4">Tournoi international au cœur de l'Europe, ouvert à tous les niveaux.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Bruxelles, Belgique
                            </span>
                            <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendrier des Événements -->
    <section id="calendar" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Calendrier des événements</h2>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-12 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                        <!-- Navigation des mois -->
                        <div class="md:col-span-3 p-6 bg-gray-50">
                            <div class="space-y-2">
                                <button class="w-full text-left px-4 py-2 rounded-lg bg-emerald-100 text-emerald-700 font-medium">Juillet 2024</button>
                                <button class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">Août 2024</button>
                                <button class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">Septembre 2024</button>
                                <button class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors">Octobre 2024</button>
                            </div>
                        </div>

                        <!-- Liste des événements -->
                        <div class="md:col-span-9 p-6">
                            <div class="space-y-6">
                                <!-- Événement -->
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0 w-16 text-center">
                                        <span class="block text-sm text-gray-500">JUL</span>
                                        <span class="block text-2xl font-bold text-gray-900">15</span>
                                    </div>
                                    <div class="flex-grow">
                                        <h3 class="text-lg font-semibold text-gray-900">Championnat du Monde 2024</h3>
                                        <p class="text-gray-600 mb-2">Paris, France</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-sm rounded">6 jours</span>
                                            <span class="text-sm text-gray-500">09:00 - 18:00</span>
                                        </div>
                                    </div>
                                    <a href="#" class="flex-shrink-0 text-emerald-600 hover:text-emerald-700">
                                        Détails →
                                    </a>
                                </div>

                                <hr class="border-gray-200">

                                <!-- Autre événement -->
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0 w-16 text-center">
                                        <span class="block text-sm text-gray-500">JUL</span>
                                        <span class="block text-2xl font-bold text-gray-900">22</span>
                                    </div>
                                    <div class="flex-grow">
                                        <h3 class="text-lg font-semibold text-gray-900">Festival d'été</h3>
                                        <p class="text-gray-600 mb-2">Nice, France</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-sm rounded">3 jours</span>
                                            <span class="text-sm text-gray-500">10:00 - 17:00</span>
                                        </div>
                                    </div>
                                    <a href="#" class="flex-shrink-0 text-emerald-600 hover:text-emerald-700">
                                        Détails →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Ne manquez aucun événement</h2>
                <p class="text-xl text-white/90 mb-8">Inscrivez-vous à notre newsletter pour recevoir les dernières actualités</p>
                <form class="max-w-md mx-auto flex gap-4">
                    <input type="email" placeholder="Votre email" class="flex-1 px-4 py-3 rounded-lg focus:ring-2 focus:ring-emerald-500">
                    <button type="submit" class="px-6 py-3 bg-white text-emerald-900 rounded-lg hover:bg-emerald-50 transition-colors">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection 