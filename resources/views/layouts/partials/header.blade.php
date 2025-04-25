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
                    <!-- Accueil -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Accueil
                        </button>
                    </div>

                    <!-- À propos -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            À propos
                        </button>
                        <div class="absolute left-0 mt-2 w-48 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Histoire</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Organisation</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Statuts</a>
                        </div>
                    </div>

                    <!-- Compétitions -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Compétitions
                        </button>
                        <div class="absolute left-0 mt-2 w-48 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Calendrier</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Résultats</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Règlements</a>
                        </div>
                    </div>

                    <!-- Actualités -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Actualités
                        </button>
                        <div class="absolute left-0 mt-2 w-48 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Articles</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Galerie</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-emerald-50 hover:text-emerald-600">Vidéos</a>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="relative group">
                        <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                            Contact
                        </button>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="flex items-center space-x-4">
                        <!-- Bouton Recherche -->
                        <button id="searchButton" class="text-white hover:text-emerald-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>

                        <!-- Bouton Connexion -->
                        <a href="{{route('login')}}" class="bg-emerald-600 btn-login text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition-colors">
                            Connexion
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