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
            transition: all 0.3s ease-in-out;
            z-index: 60;
            transform: translateY(-100%);
        }
        .search-bar.active {
            transform: translateY(0);
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
            background-color: #00723e;
            backdrop-filter: blur(8px);
        }
        .header-scrolled .submenu-bg {
            background-color: white;
        }
        .header-scrolled .btn-login {
            background-color: white;
            color: #00723e;
        }
        .mobile-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, rgba(5, 150, 105, 0.95) 0%, rgba(5, 150, 105, 0.98) 100%);
            transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 100;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(10px);
        }
        .mobile-menu.active {
            left: 0;
        }
        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .mobile-menu-content {
            flex: 1;
            overflow-y: auto;
            padding-right: 1rem;
        }
        .mobile-menu-item {
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .mobile-menu-item-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .mobile-menu-item-header:hover {
            background: rgba(255, 255, 255, 0.15);
        }
        .mobile-menu-item-header span {
            color: white;
            font-size: 1.1rem;
            font-weight: 500;
        }
        .mobile-menu-item-header svg {
            color: white;
            transition: transform 0.3s ease;
        }
        .mobile-menu-item-header.active svg {
            transform: rotate(180deg);
        }
        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background: rgba(255, 255, 255, 0.05);
        }
        .mobile-submenu.active {
            max-height: 500px;
        }
        .mobile-submenu a {
            display: block;
            padding: 0.75rem 1.5rem;
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        .mobile-submenu a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: white;
            padding-left: 2rem;
        }
        .mobile-menu-footer {
            margin-top: auto;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .mobile-menu-button {
            position: relative;
            z-index: 101;
        }
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(2px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 99;
        }
        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        @media (max-width: 768px) {
            .header-buttons {
                display: none;
            }
            .mobile-menu-button {
                display: block;
            }
            .mobile-menu-content::-webkit-scrollbar {
                width: 4px;
            }
            .mobile-menu-content::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
            }
            .mobile-menu-content::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.3);
                border-radius: 2px;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Barre de recherche -->
    <div class="search-bar" id="searchBar">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <input type="text" placeholder="Rechercher..." class="search-input">
                <button class="ml-4 text-gray-500 hover:text-emerald-600" id="closeSearch">
                    <svg xmlns="httpss://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @include('layouts.partials.header')
    @include('layouts.partials.hero')

    <!-- Overlay pour le menu mobile -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Menu Mobile -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <h3 class="text-xl font-bold text-white">Menu</h3>
            <button id="closeMobileMenu" class="text-white hover:text-emerald-200">
                <svg xmlns="https://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="mobile-menu-content">
            <div class="mobile-menu-item">
                <a href="#" class="mobile-menu-item-header">
                    <span>Accueil</span>
                </a>
            </div>

            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="about">
                    <span>À propos</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="about-submenu">
                    <a href="#">Histoire</a>
                    <a href="#">Organisation</a>
                    <a href="#">Statuts</a>
                </div>
            </div>

            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="competitions">
                    <span>Compétitions</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="competitions-submenu">
                    <a href="#">Calendrier</a>
                    <a href="#">Résultats</a>
                    <a href="#">Règlements</a>
                </div>
            </div>

            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="news">
                    <span>Actualités</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="news-submenu">
                    <a href="#">Articles</a>
                    <a href="#">Galerie</a>
                    <a href="#">Vidéos</a>
                </div>
            </div>

            <div class="mobile-menu-item">
                <a href="#" class="mobile-menu-item-header">
                    <span>Contact</span>
                </a>
            </div>
        </div>

        <div class="mobile-menu-footer">
            <a href="#" class="block w-full bg-white text-emerald-600 px-6 py-3 rounded-lg hover:bg-emerald-50 transition-colors text-center font-medium">
                Connexion
            </a>
        </div>
    </div>

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
            const searchButtonMobile = document.getElementById('searchButtonMobile');
            const searchBar = document.getElementById('searchBar');
            const closeSearch = document.getElementById('closeSearch');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
            
            // Gestion du scroll du header
            window.addEventListener('scroll', function() {
                if (window.scrollY > 150) {
                    header.classList.remove('header-transparent');
                    header.classList.add('header-scrolled');

                } else {
                    header.classList.remove('header-scrolled');
                    header.classList.add('header-transparent');
                }
            });

            // Gestion de la barre de recherche
            function toggleSearch() {
                searchBar.classList.toggle('active');
                if (searchBar.classList.contains('active')) {
                    searchBar.querySelector('input').focus();
                }
            }

            searchButton.addEventListener('click', toggleSearch);
            searchButtonMobile.addEventListener('click', toggleSearch);
            closeSearch.addEventListener('click', function() {
                searchBar.classList.remove('active');
            });

            // Gestion du menu mobile
            function toggleMobileMenu() {
                mobileMenu.classList.toggle('active');
                mobileMenuOverlay.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
            }

            mobileMenuButton.addEventListener('click', toggleMobileMenu);
            closeMobileMenu.addEventListener('click', toggleMobileMenu);
            mobileMenuOverlay.addEventListener('click', toggleMobileMenu);

            // Gestion des sous-menus
            const submenuHeaders = document.querySelectorAll('.mobile-menu-item-header[data-submenu]');
            submenuHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const submenuId = header.getAttribute('data-submenu');
                    const submenu = document.getElementById(`${submenuId}-submenu`);
                    
                    // Fermer tous les autres sous-menus
                    document.querySelectorAll('.mobile-submenu').forEach(sm => {
                        if (sm !== submenu) {
                            sm.classList.remove('active');
                            sm.previousElementSibling.classList.remove('active');
                        }
                    });

                    // Toggle le sous-menu actuel
                    submenu.classList.toggle('active');
                    header.classList.toggle('active');
                });
            });

            // Fermer la barre de recherche en cliquant en dehors
            document.addEventListener('click', function(event) {
                if (!searchBar.contains(event.target) && 
                    !searchButton.contains(event.target) && 
                    !searchButtonMobile.contains(event.target)) {
                    searchBar.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html> 