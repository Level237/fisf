<header class="fixed w-full z-50 transition-all duration-300 header-transparent" id="main-header">
    <nav>
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/img/logo-white.png') }}" alt="Logo FISF" class="h-14">
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- La FISF -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            La FISF
                        </button>
                        <div class="absolute left-0 mt-2 w-56 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="{{route('about')}}" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">À propos</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Mission</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Organes</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Membres</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Partenaires</a>
                        </div>
                    </div>

                    <!-- Actualité & Médias -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Actualités & Médias
                        </button>
                        <div class="absolute left-0 mt-2 w-56 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Événements</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Presse & Médias</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Publications</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Newsletter</a>
                        </div>
                    </div>

                    <!-- Compétitions -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Compétitions
                        </button>
                        <div class="absolute left-0 mt-2 w-56 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Épreuves</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Règlements</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Calendrier</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Classements</a>
                        </div>
                    </div>

                    <!-- Espace Scrabble -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Espace Scrabble
                        </button>
                        <div class="absolute left-0 mt-2 w-56 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Jouer au Scrabble</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Devenir Licencié</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Espace Jeunes</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Clubs & Fédérations</a>
                        </div>
                    </div>

                    <!-- Bouton Connexion -->
                    <div class="flex items-center">
                        <a href="{{route('login')}}" class="bg-emerald-600 btn-login text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition-colors">
                            Espace privé
                        </a>
                    </div>
                </div>

                <!-- Menu Mobile -->
                <div class="md:hidden flex items-center space-x-4">
                    <button id="searchButtonMobile" class="text-white hover:text-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button id="mobileMenuButton" class="mobile-menu-button text-white hover:text-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header> 