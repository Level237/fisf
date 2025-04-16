<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FISF - Fédération Internationale de Scrabble Francophone</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .header-transparent {
            background-color: transparent;
            backdrop-filter: none;
            box-shadow: none;
        }
        .header-scrolled {
            background-color: rgb(5 150 105 / 0.95);
            backdrop-filter: blur(8px);
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
        }
        .header-transparent .text-gray-700 {
            color: white;
        }
        .header-transparent .hover\:text-emerald-600:hover {
            color: rgb(5 150 105);
        }
        .search-bar {
            position: fixed;
            top: -100px;
            left: 0;
            right: 0;
            background-color: white;
            padding: 1rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            transition: top 0.3s ease-in-out;
            z-index: 60;
        }
        .search-bar.active {
            top: 0;
        }
        .search-input {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            outline: none;
            transition: border-color 0.3s;
        }
        .search-input:focus {
            border-color: rgb(5 150 105);
        }
        .submenu-bg {
            background-color: rgb(5 150 105 / 0.95);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Barre de recherche -->
    <div class="search-bar" id="searchBar">
        <div class="container mx-auto">
            <input type="text" placeholder="Rechercher..." class="search-input">
        </div>
    </div>

    <header class="fixed w-full z-50 transition-all duration-300 header-transparent" id="main-header">
        <nav>
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="/" class="text-2xl font-bold text-white">
                            FISF
                        </a>
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
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Histoire</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Organisation</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Statuts</a>
                            </div>
                        </div>

                        <!-- Compétitions -->
                        <div class="relative group">
                            <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                                Compétitions
                            </button>
                            <div class="absolute left-0 mt-2 w-48 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Calendrier</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Résultats</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Règlements</a>
                            </div>
                        </div>

                        <!-- Actualités -->
                        <div class="relative group">
                            <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                                Actualités
                            </button>
                            <div class="absolute left-0 mt-2 w-48 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 submenu-bg">
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Articles</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Galerie</a>
                                <a href="#" class="block px-4 py-2 text-white hover:bg-emerald-700">Vidéos</a>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="relative group">
                            <button class="text-white hover:text-emerald-600 py-2 px-3 rounded-lg transition-colors">
                                Contact
                            </button>
                        </div>

                        <!-- Bouton Recherche -->
                        <button id="searchButton" class="text-white hover:text-emerald-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>

                        <!-- Bouton Connexion -->
                        <a href="#" class="bg-white text-emerald-600 px-6 py-2 rounded-lg hover:bg-emerald-50 transition-colors">
                            Connexion
                        </a>
                    </div>

                    <!-- Menu Mobile -->
                    <div class="md:hidden">
                        <button class="text-white hover:text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">FISF</h3>
                    <p>Fédération Internationale de Scrabble Francophone</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-emerald-400">Mentions légales</a></li>
                        <li><a href="#" class="hover:text-emerald-400">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-emerald-400">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-emerald-400">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="hover:text-emerald-400">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('main-header');
            const searchButton = document.getElementById('searchButton');
            const searchBar = document.getElementById('searchBar');
            
            // Gestion du scroll du header
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.remove('header-transparent');
                    header.classList.add('header-scrolled');
                } else {
                    header.classList.remove('header-scrolled');
                    header.classList.add('header-transparent');
                }
            });

            // Gestion de la barre de recherche
            searchButton.addEventListener('click', function() {
                searchBar.classList.toggle('active');
                if (searchBar.classList.contains('active')) {
                    searchBar.querySelector('input').focus();
                }
            });

            // Fermer la barre de recherche en cliquant en dehors
            document.addEventListener('click', function(event) {
                if (!searchBar.contains(event.target) && !searchButton.contains(event.target)) {
                    searchBar.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html> 