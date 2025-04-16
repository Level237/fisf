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
        
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo et Titre -->
        <div class="text-center">
            <img class="mx-auto h-20 w-auto" src="{{ asset('assets/img/logo.png') }}" alt="FISF Logo">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Bienvenue sur FISF
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Connectez-vous à votre compte
            </p>
        </div>

        <!-- Formulaire de connexion -->
        <div class="mt-8 bg-white py-8 px-4 shadow-xl rounded-2xl sm:px-10 transform transition-all duration-500 hover:shadow-2xl">
            <form class="space-y-6" action="#" method="POST">
                @csrf
                
                <!-- Email -->
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Adresse email
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required 
                            class="appearance-none block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                            placeholder="votre@email.com">
                    </div>
                </div>

                <!-- Mot de passe -->
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Mot de passe
                        </label>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500 transition-colors">
                                Mot de passe oublié ?
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required 
                            class="appearance-none block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                            placeholder="••••••••">
                    </div>
                </div>

                <!-- Se souvenir de moi -->
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                        class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded transition-colors">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                        Se souvenir de moi
                    </label>
                </div>

                <!-- Bouton de connexion -->
                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-emerald-500 group-hover:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </span>
                        Se connecter
                    </button>
                </div>
            </form>

            <!-- Séparateur -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">
                            Ou continuez avec
                        </span>
                    </div>
                </div>
            </div>

            <!-- Boutons de connexion sociale -->
            <div class="mt-6 grid grid-cols-2 gap-3">
                <div>
                    <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Lien d'inscription -->
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600">
                Pas encore membre ?
                <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500 transition-colors">
                    Créez un compte
                </a>
            </p>
        </div>
    </div>
</div>
    </main>
    @include('layouts.partials.footer')
