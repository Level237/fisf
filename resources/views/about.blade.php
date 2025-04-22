@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-b from-emerald-900 to-emerald-800 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgb3BhY2l0eT0iMC4xIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-5xl font-bold text-white mb-6">À propos de la FISF</h1>
                <p class="text-xl text-white/90">Découvrez notre mission et notre organisation au service du Scrabble francophone</p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-emerald-600 font-medium text-sm uppercase tracking-wider">Notre mission</span>
                    <h2 class="text-4xl font-bold text-gray-900 mt-2">Promouvoir le Scrabble francophone</h2>
                </div>
                <div class="prose prose-lg mx-auto">
                    <p class="text-gray-600 leading-relaxed">
                        La Fédération Internationale de Scrabble Francophone (FISF) a pour mission de promouvoir et développer la pratique du Scrabble en langue française à travers le monde. Nous œuvrons pour rassembler les passionnés, organiser des compétitions internationales et favoriser les échanges culturels autour de notre langue.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Organes Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-emerald-600 font-medium text-sm uppercase tracking-wider">Notre organisation</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2 mb-3">Les organes de la FISF</h2>
                <p class="text-xl text-gray-600">Une structure démocratique au service du Scrabble</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- AG Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Assemblée Générale (AG)</h3>
                    <p class="text-gray-600">L'organe suprême de la FISF, réunissant les représentants de toutes les fédérations nationales pour les décisions majeures.</p>
                </div>

                <!-- CA Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Conseil d'Administration (CA)</h3>
                    <p class="text-gray-600">Organe exécutif chargé de la gestion et de l'administration de la fédération.</p>
                </div>

                <!-- CD Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Comité Directeur (CD)</h3>
                    <p class="text-gray-600">Responsable de la direction opérationnelle et de la mise en œuvre des décisions du CA.</p>
                </div>

                <!-- CT Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Commission Technique (CT)</h3>
                    <p class="text-gray-600">Veille à l'application des règles du jeu et gère les aspects techniques des compétitions.</p>
                </div>

                <!-- CR-ODS Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Commission du Règlement et de l'ODS (CR-ODS)</h3>
                    <p class="text-gray-600">Responsable de l'évolution des règles et de la mise à jour de l'Officiel du Scrabble.</p>
                </div>

                <!-- CIE Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Commission Internationale des Équipes (CIE)</h3>
                    <p class="text-gray-600">Gère les compétitions par équipes et coordonne les échanges entre les équipes nationales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Rejoignez la communauté FISF</h2>
                <p class="text-xl text-white/90 mb-8">Participez à l'aventure du Scrabble francophone international</p>
                <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors duration-300">
                    Devenir membre
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection 