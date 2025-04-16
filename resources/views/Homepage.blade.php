@extends('layouts.app')

@section('content')

<div class="relative">
    <!-- Hero Section -->
   

    <!-- Événements phares -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Événements à venir</h2>
                <p class="text-xl text-gray-600">Découvrez les prochains événements majeurs de la FISF</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Carte Événement 1 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-emerald-800 opacity-90"></div>
                    <div class="relative p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">15-17 Juin 2024</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Championnat du Monde</h3>
                        <p class="text-white/90 mb-6">Le plus grand événement de Scrabble francophone au monde.</p>
                        <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-emerald-200 transition-colors">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Carte Événement 2 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-600 opacity-90"></div>
                    <div class="relative p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">22-24 Juillet 2024</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Coupe d'Europe</h3>
                        <p class="text-white/90 mb-6">Compétition européenne de Scrabble francophone.</p>
                        <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-yellow-200 transition-colors">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Carte Événement 3 -->
                <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800 opacity-90"></div>
                    <div class="relative p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                <span class="text-white text-sm font-medium">10-12 Août 2024</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Tournoi International</h3>
                        <p class="text-white/90 mb-6">Tournoi ouvert à tous les joueurs internationaux.</p>
                        <a href="#" class="inline-flex items-center text-white font-semibold group-hover:text-blue-200 transition-colors">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FISF en chiffres -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">La FISF en chiffres</h2>
                <p class="text-xl text-gray-600">Découvrez l'impact de la FISF à travers le monde</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Carte Chiffre 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="text-5xl font-bold text-emerald-600 mb-4">50+</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Pays membres</h3>
                    <p class="text-gray-600">À travers le monde francophone</p>
                </div>

                <!-- Carte Chiffre 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="text-5xl font-bold text-emerald-600 mb-4">1000+</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Tournois annuels</h3>
                    <p class="text-gray-600">Organisés dans le monde entier</p>
                </div>

                <!-- Carte Chiffre 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="text-5xl font-bold text-emerald-600 mb-4">50000+</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Joueurs actifs</h3>
                    <p class="text-gray-600">Engagés dans la communauté</p>
                </div>

                <!-- Carte Chiffre 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="text-5xl font-bold text-emerald-600 mb-4">30+</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Années d'existence</h3>
                    <p class="text-gray-600">De promotion du Scrabble</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos partenaires</h2>
                <p class="text-xl text-gray-600">Ils nous soutiennent dans notre mission</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <!-- Logo Partenaire 1 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner1.png') }}" alt="Partenaire 1" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 2 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner2.png') }}" alt="Partenaire 2" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 3 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner3.png') }}" alt="Partenaire 3" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 4 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner4.png') }}" alt="Partenaire 4" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 5 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner5.png') }}" alt="Partenaire 5" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>

                <!-- Logo Partenaire 6 -->
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-xl transform transition-all duration-500 hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('assets/img/partners/partner6.png') }}" alt="Partenaire 6" class="h-12 w-auto opacity-60 hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>
    </section>

    <!-- Réseaux sociaux -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Suivez-nous</h2>
                <p class="text-xl text-gray-600">Restez connectés avec la communauté FISF</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post Facebook -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('assets/img/social/facebook.png') }}" alt="Facebook" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">FISF Officiel</h3>
                                <p class="text-sm text-gray-500">Il y a 2 heures</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Découvrez les photos du dernier tournoi international ! Une compétition intense et des moments inoubliables.</p>
                        <div class="aspect-w-16 aspect-h-9 mb-4">
                            <img src="{{ asset('assets/img/social/post1.jpg') }}" alt="Post Facebook" class="rounded-lg object-cover">
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
                            <img src="{{ asset('assets/img/social/twitter.png') }}" alt="Twitter" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">@FISF_Scrabble</h3>
                                <p class="text-sm text-gray-500">Il y a 5 heures</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">Les inscriptions pour le Championnat du Monde 2024 sont ouvertes ! Ne manquez pas cette opportunité unique. #Scrabble #FISF</p>
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
                            <img src="{{ asset('assets/img/social/instagram.png') }}" alt="Instagram" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h3 class="font-semibold text-gray-900">fisf_scrabble</h3>
                                <p class="text-sm text-gray-500">Il y a 1 jour</p>
                            </div>
                        </div>
                        <div class="aspect-w-1 aspect-h-1 mb-4">
                            <img src="{{ asset('assets/img/social/post2.jpg') }}" alt="Post Instagram" class="rounded-lg object-cover">
                        </div>
                        <p class="text-gray-700 mb-4">Moment de partage et de convivialité lors de notre dernier atelier de formation. Le Scrabble rassemble !</p>
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