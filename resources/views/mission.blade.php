@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section avec Parallax -->
    <section class="relative h-[60vh] flex items-center bg-emerald-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/scrabble-bg.jpg') }}" alt="Scrabble background" class="w-full h-full object-cover opacity-20 scale-110 transform motion-safe:animate-subtle-zoom">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/95 to-emerald-800/95"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgb3BhY2l0eT0iMC4xIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">Notre Mission</h1>
                <p class="text-xl md:text-2xl text-white/90 leading-relaxed max-w-2xl">Promouvoir et développer le Scrabble francophone à travers le monde</p>
            </div>
        </div>
    </section>

    <!-- Vision et Valeurs -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="space-y-6">
                    <span class="inline-block px-4 py-2 bg-emerald-100 text-emerald-800 rounded-full text-sm font-medium">Notre Vision</span>
                    <h2 class="text-4xl font-bold text-gray-900">Unir les passionnés de la langue française</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">La FISF aspire à créer une communauté mondiale dynamique autour du Scrabble francophone, en favorisant les échanges culturels et linguistiques entre les nations.</p>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-emerald-50 p-6 rounded-2xl">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Inclusion</h3>
                        <p class="text-gray-600">Accueillir tous les passionnés sans distinction</p>
                    </div>
                    <div class="bg-emerald-50 p-6 rounded-2xl">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Excellence</h3>
                        <p class="text-gray-600">Promouvoir le plus haut niveau de jeu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectifs Stratégiques -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-emerald-600 font-medium text-sm uppercase tracking-wider">Nos Objectifs</span>
                <h2 class="text-4xl font-bold text-gray-900 mt-2">Objectifs Stratégiques</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Développement International</h3>
                    <p class="text-gray-600">Étendre la pratique du Scrabble francophone dans de nouveaux pays et régions.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Formation et Éducation</h3>
                    <p class="text-gray-600">Développer des programmes éducatifs et former la nouvelle génération de joueurs.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600">Moderniser la pratique du Scrabble à travers les nouvelles technologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Section -->
    <section class="py-20 bg-emerald-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="{{ asset('assets/img/pattern-bg.png') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Notre engagement pour l'avenir</h2>
                <p class="text-xl text-white/90 mb-12 leading-relaxed">
                    La FISF s'engage à faire évoluer le Scrabble francophone tout en préservant ses valeurs fondamentales et son rôle dans la promotion de la langue française.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors duration-300">
                        Rejoignez-nous
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 transition-colors duration-300">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
@keyframes subtle-zoom {
    0% { transform: scale(1.1); }
    100% { transform: scale(1.15); }
}
.animate-subtle-zoom {
    animation: subtle-zoom 20s ease-in-out infinite alternate;
}
</style>
@endsection 