@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section Interactive -->
    <section class="relative min-h-[70vh] flex items-center bg-emerald-900">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/competition-bg.jpg') }}" alt="Compétition de Scrabble" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/95 via-emerald-800/90 to-emerald-900/95"></div>
            <!-- Motif géométrique animé -->
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgb3BhY2l0eT0iMC4xIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-20 animate-pulse"></div>
            </div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl">
                <span class="inline-block px-4 py-2 bg-emerald-800/50 text-emerald-100 rounded-full text-sm font-medium mb-6">
                    Compétitions FISF
                </span>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">Nos Épreuves</h1>
                <p class="text-xl text-white/90 mb-8 max-w-2xl">
                    Découvrez l'excellence du Scrabble francophone à travers nos compétitions internationales.
                </p>
            </div>
        </div>
    </section>

    <!-- Navigation des types d'épreuves -->
    <section class="sticky top-20 bg-white shadow-md z-30">
        <div class="container mx-auto px-4">
            <div class="flex overflow-x-auto no-scrollbar py-4 gap-4">
                <button class="px-6 py-2 bg-emerald-600 text-white rounded-full whitespace-nowrap hover:bg-emerald-700 transition-colors">
                    Tous les formats
                </button>
                <button class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Championnats
                </button>
                <button class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Festivals
                </button>
                <button class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Grand Chelem
                </button>
                <button class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Simultanés
                </button>
            </div>
        </div>
    </section>

    <!-- Championnats Majeurs -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Championnats Majeurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Championnat du Monde -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('assets/img/championnat-monde.jpg') }}" alt="Championnat du Monde" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="px-3 py-1 bg-emerald-500 text-white text-sm font-semibold rounded-full">
                                Élite
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Championnat du Monde</h3>
                        <p class="text-gray-600 mb-4">La plus prestigieuse compétition de Scrabble francophone.</p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Juillet-Août
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                International
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Festival International -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('assets/img/festival.jpg') }}" alt="Festival International" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="px-3 py-1 bg-blue-500 text-white text-sm font-semibold rounded-full">
                                Festival
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Festival International</h3>
                        <p class="text-gray-600 mb-4">Une semaine de compétitions et d'animations.</p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Mai
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Aix-les-Bains, France
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Simultanés Mondiaux -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="relative h-48">
                        <img src="{{ asset('assets/img/simultanes.jpg') }}" alt="Simultanés Mondiaux" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="px-3 py-1 bg-purple-500 text-white text-sm font-semibold rounded-full">
                                Simultanés
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Simultanés Mondiaux</h3>
                        <p class="text-gray-600 mb-4">Jouez simultanément partout dans le monde.</p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Toute l'année
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                                Mondial
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-medium">
                                En savoir plus
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formats de Jeu -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Formats de Jeu</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Duplicate -->
                <div class="bg-emerald-50 rounded-2xl p-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Scrabble Duplicate</h3>
                            <p class="text-gray-600 mb-4">Format officiel des compétitions où tous les joueurs disposent des mêmes lettres.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Équité maximale
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Compétitions officielles
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Classique -->
                <div class="bg-emerald-50 rounded-2xl p-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Scrabble Classique</h3>
                            <p class="text-gray-600 mb-4">Format traditionnel en face à face avec stratégie et tactique.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Duel stratégique
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    Tournois spécifiques
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendrier des Épreuves -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap items-center justify-between mb-12">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Calendrier des Épreuves</h2>
                        <p class="text-gray-600 mt-2">Planifiez votre saison de compétition</p>
                    </div>
                    <a href="#" class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                        Voir tout le calendrier
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <!-- Timeline des événements -->
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-emerald-200"></div>
                    <div class="space-y-12">
                        <!-- Événement Timeline -->
                        <div class="relative">
                            <div class="flex items-center justify-between">
                                <div class="w-5/12">
                                    <div class="bg-white p-6 rounded-xl shadow-lg">
                                        <span class="text-emerald-600 font-medium">15-20 Juillet 2024</span>
                                        <h3 class="text-lg font-bold text-gray-900 mt-1">Championnat du Monde</h3>
                                        <p class="text-gray-600 mt-2">Paris, France</p>
                                    </div>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-emerald-500 rounded-full border-4 border-white"></div>
                                <div class="w-5/12"></div>
                            </div>
                        </div>

                        <!-- Autre événement Timeline -->
                        <div class="relative">
                            <div class="flex items-center justify-between">
                                <div class="w-5/12"></div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-emerald-500 rounded-full border-4 border-white"></div>
                                <div class="w-5/12">
                                    <div class="bg-white p-6 rounded-xl shadow-lg">
                                        <span class="text-emerald-600 font-medium">1-5 Septembre 2024</span>
                                        <h3 class="text-lg font-bold text-gray-900 mt-1">Festival International</h3>
                                        <p class="text-gray-600 mt-2">Vichy, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('assets/img/pattern-bg.png') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Prêt à participer ?</h2>
                <p class="text-xl text-white/90 mb-8">
                    Rejoignez les compétitions de Scrabble francophone et mesurez-vous aux meilleurs joueurs.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors">
                        S'inscrire aux compétitions
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 transition-colors">
                        Consulter le règlement
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
@endsection 