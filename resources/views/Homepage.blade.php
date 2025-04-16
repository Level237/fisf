@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Section -->
   

    <!-- Événements phares -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Événements à venir</h2>
                <p class="text-xl text-gray-600">Découvrez les prochains événements majeurs de la FISF</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Carte Événement 1 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-emerald-800 opacity-90"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">15-17 Juin 2024</span>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                                <span class="text-white text-xs font-medium">Paris, France</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Championnat du Monde</h3>
                        <p class="text-white/90 mb-4">Le plus grand événement de Scrabble francophone au monde.</p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-emerald-200 transition-colors">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs">500+ participants</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte Événement 2 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-600 opacity-90"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">22-24 Juillet 2024</span>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                                <span class="text-white text-xs font-medium">Bruxelles, Belgique</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Coupe d'Europe</h3>
                        <p class="text-white/90 mb-4">Compétition européenne de Scrabble francophone.</p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-yellow-200 transition-colors">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs">300+ participants</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte Événement 3 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
                    <div class="relative p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">10-12 Août 2024</span>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                                <span class="text-white text-xs font-medium">Montréal, Canada</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Tournoi International</h3>
                        <p class="text-white/90 mb-4">Tournoi ouvert à tous les joueurs internationaux.</p>
                        <div class="flex items-center justify-between">
                            <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-blue-200 transition-colors">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                            <div class="flex space-x-2">
                                <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-white text-xs">400+ participants</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISF en chiffres -->
    <section class="py-16 bg-gradient-to-br from-[#00723e] via-[#00723e] to-emerald-400 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAgTSAwIDIwIEwgNDAgMjAgTSAyMCAwIEwgMjAgNDAgTSAwIDMwIEwgNDAgMzAgTSAzMCAwIEwgMzAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZiIgb3BhY2l0eT0iMC4xIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white mb-3">La FISF en chiffres</h2>
                <p class="text-xl text-white/80">Découvrez l'impact de la FISF à travers le monde</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Carte Chiffre 1 -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-5xl font-bold text-white">50+</div>
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Pays membres</h3>
                    <p class="text-white/80">À travers le monde francophone</p>
                </div>

                <!-- Carte Chiffre 2 -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-5xl font-bold text-white">1000+</div>
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Tournois annuels</h3>
                    <p class="text-white/80">Organisés dans le monde entier</p>
                </div>

                <!-- Carte Chiffre 3 -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-5xl font-bold text-white">50000+</div>
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Joueurs actifs</h3>
                    <p class="text-white/80">Engagés dans la communauté</p>
                </div>

                <!-- Carte Chiffre 4 -->
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-5xl font-bold text-white">30+</div>
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Années d'existence</h3>
                    <p class="text-white/80">De promotion du Scrabble</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Nos partenaires</h2>
                <p class="text-xl text-gray-600">Ils nous soutiennent dans notre mission</p>
            </div>

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

    <!-- Réseaux sociaux -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Suivez-nous</h2>
                <p class="text-xl text-gray-600">Restez connectés avec la communauté FISF</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Post Facebook -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/mission1.jpg') }}" alt="Facebook" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">FISF Officiel</h3>
                                <p class="text-sm text-gray-500">Il y a 2 heures</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Découvrez les photos du dernier tournoi international ! Une compétition intense et des moments inoubliables.</p>
                        <div class="aspect-w-16 aspect-h-9 mb-4">
                            <img src="{{ asset('assets/img/mission1.jpg') }}" alt="Post Facebook" class="rounded-lg object-cover">
                        </div>
                        <div class="flex items-center justify-between text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                                <span>245</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                </svg>
                                <span>32</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post Twitter -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/yves.jpg') }}" alt="Twitter" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">@FISF_Scrabble</h3>
                                <p class="text-sm text-gray-500">Il y a 5 heures</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Les inscriptions pour le Championnat du Monde 2024 sont ouvertes ! Ne manquez pas cette opportunité unique. #Scrabble #FISF</p>
                        <div class="aspect-w-16 aspect-h-9 mb-4">
                            <img src="{{ asset('assets/img/mission1.jpg') }}" alt="Post Facebook" class="rounded-lg object-cover">
                        </div>
                        <div class="flex items-center justify-between text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                                <span>189</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                </svg>
                                <span>24</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post Instagram -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/yves.jpg') }}" alt="Instagram" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">fisf_scrabble</h3>
                                <p class="text-sm text-gray-500">Il y a 1 jour</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-700 mb-4">Moment de partage et de convivialité lors de notre dernier atelier de formation. Le Scrabble rassemble !</p>
                        <div class="aspect-w-1 aspect-h-1 mb-4">
                            <img src="{{ asset('assets/img/mission1.jpg') }}" alt="Post Instagram" class="rounded-lg object-cover">
                        </div>
                        <div class="flex items-center justify-between text-gray-500">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                </svg>
                                <span>312</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                                </svg>
                                <span>45</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection