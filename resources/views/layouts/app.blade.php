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
            <!-- La FISF -->
            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="fisf">
                    <span>La FISF</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="fisf-submenu">
                    <a href="#">À propos</a>
                    <a href="#">Mission</a>
                    <a href="#">Organes</a>
                    <a href="#">Membres</a>
                    <a href="#">Partenaires</a>
                </div>
            </div>

            <!-- Actualités & Médias -->
            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="actualites">
                    <span>Actualités & Médias</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="actualites-submenu">
                    <a href="#">Événements</a>
                    <a href="#">Annonces</a>
                    <a href="#">Médias</a>
                    <a href="#">Nos publications</a>
                    <a href="#">Newsletter</a>
                </div>
            </div>

            <!-- Compétitions -->
            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="competitions">
                    <span>Compétitions</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="competitions-submenu">
                    <a href="#">Épreuves</a>
                    <a href="#">Règlements</a>
                    <a href="#">Calendrier</a>
                    <a href="#">Palmarès</a>
                    <a href="#">Classements</a>
                </div>
            </div>

            <!-- La FISF et Vous -->
            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="fisf-vous">
                    <span>La FISF et Vous</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="fisf-vous-submenu">
                    <a href="#">Sponsor</a>
                    <a href="#">Partenaire</a>
                    <a href="#">Fédération</a>
                    <a href="#">Club</a>
                    <a href="#">Licencié</a>
                </div>
            </div>

            <!-- Pour les Jeunes -->
            <div class="mobile-menu-item">
                <div class="mobile-menu-item-header" data-submenu="jeunes">
                    <span>Pour les Jeunes</span>
                    <svg xmlns="https://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="mobile-submenu" id="jeunes-submenu">
                    <a href="#">Guide du formateur</a>
                    <a href="#">Épreuves</a>
                    <a href="#">Concours</a>
                    <a href="#">Exploits</a>
                    <a href="#">Classement</a>
                </div>
            </div>
        </div>

        <div class="mobile-menu-footer">
            <div class="space-y-3">
                <a href="#" class="block w-full bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition-colors text-center font-medium">
                    Espace privé
                </a>
                <div class="flex justify-center space-x-4 text-white">
                    <a href="#" class="hover:text-emerald-200">Jouer au Scrabble</a>
                    <span class="text-emerald-700">|</span>
                    <a href="#" class="hover:text-emerald-200">Nous écrire</a>
                </div>
            </div>
        </div>
    </div>

    <main class="pt-20">
        @yield('content')
    </main>

   
        @include('layouts.partials.footer')

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