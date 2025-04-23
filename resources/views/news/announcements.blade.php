@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- En-tête fixe avec filtres -->
    <div class="sticky top-0 z-30 bg-white border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4">
            <!-- Barre de navigation principale -->
            <div class="flex items-center justify-between py-4">
                <h1 class="text-2xl font-bold text-gray-900">Centre d'actualités FISF</h1>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <input type="search" 
                               placeholder="Rechercher une annonce..." 
                               class="w-64 pl-10 pr-4 py-2 bg-gray-50 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <button class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                        Filtres avancés
                    </button>
                </div>
            </div>

            <!-- Catégories -->
            <div class="flex items-center gap-6 -mb-px">
                <button class="px-4 py-3 text-emerald-600 border-b-2 border-emerald-600 font-medium">
                    Toutes les annonces
                </button>
                <button class="px-4 py-3 text-gray-600 hover:text-emerald-600 border-b-2 border-transparent hover:border-emerald-600 transition-colors">
                    Officielles
                </button>
                <button class="px-4 py-3 text-gray-600 hover:text-emerald-600 border-b-2 border-transparent hover:border-emerald-600 transition-colors">
                    Compétitions
                </button>
                <button class="px-4 py-3 text-gray-600 hover:text-emerald-600 border-b-2 border-transparent hover:border-emerald-600 transition-colors">
                    Règlements
                </button>
            </div>
        </div>
    </div>

    <!-- Contenu Principal -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Colonne principale -->
            <div class="flex-1">
                <!-- Annonce mise en avant -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ asset('images/featured.jpg') }}" 
                             alt="Annonce principale" 
                             class="object-cover w-full h-full">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium">
                                À la une
                            </span>
                            <span class="text-gray-500 text-sm">15 Mai 2024</span>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            Championnat du Monde 2024 : Tous les détails dévoilés
                        </h2>
                        <p class="text-gray-600 mb-6">
                            La FISF annonce les détails du prochain Championnat du Monde qui se tiendra à Montréal...
                        </p>
                        <a href="#" class="inline-flex items-center text-emerald-600 font-medium hover:text-emerald-700">
                            Lire l'article complet
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Liste des annonces -->
                <div class="space-y-6">
                    <!-- Annonce -->
                    <article class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="md:flex">
                            <div class="md:w-1/3">
                                <div class="aspect-w-16 aspect-h-9 md:h-full">
                                    <img src="{{ asset('images/announcement-1.jpg') }}" 
                                         alt="Annonce" 
                                         class="object-cover w-full h-full">
                                </div>
                            </div>
                            <div class="md:w-2/3 p-6">
                                <div class="flex items-center gap-4 mb-3">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                        Compétition
                                    </span>
                                    <span class="text-gray-500 text-sm">12 Mai 2024</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">
                                    Ouverture des inscriptions pour le tournoi d'été
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Les inscriptions pour le grand tournoi d'été sont désormais ouvertes...
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('images/avatar.jpg') }}" alt="Auteur" class="w-8 h-8 rounded-full">
                                        <span class="text-sm text-gray-600">Par Jean Dupont</span>
                                    </div>
                                    <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">
                                        Lire plus →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Répéter pour chaque annonce -->
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center gap-2">
                        <a href="#" class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </a>
                        <a href="#" class="px-4 py-2 rounded-lg bg-emerald-600 text-white">1</a>
                        <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 hover:bg-gray-50">2</a>
                        <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 hover:bg-gray-50">3</a>
                        <span class="px-4 py-2">...</span>
                        <a href="#" class="px-4 py-2 rounded-lg border border-gray-200 hover:bg-gray-50">8</a>
                        <a href="#" class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="w-80 space-y-6">
                <!-- Newsletter -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Newsletter</h3>
                    <p class="text-gray-600 mb-4">Restez informé de toutes nos actualités</p>
                    <form class="space-y-4">
                        <input type="email" 
                               placeholder="Votre email" 
                               class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500">
                        <button type="submit" 
                                class="w-full px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                            S'inscrire
                        </button>
                    </form>
                </div>

                <!-- Annonces populaires -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Annonces populaires</h3>
                    <div class="space-y-4">
                        <a href="#" class="block group">
                            <div class="flex items-start gap-4">
                                <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="{{ asset('images/popular-1.jpg') }}" 
                                         alt="Annonce populaire" 
                                         class="object-cover w-full h-full">
                                </div>
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 group-hover:text-emerald-600">
                                        Nouveaux critères de classement international
                                    </h4>
                                    <span class="text-sm text-gray-500">10 Mai 2024</span>
                                </div>
                            </div>
                        </a>
                        <!-- Répéter pour chaque annonce populaire -->
                    </div>
                </div>

                <!-- Tags populaires -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Tags populaires</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm hover:bg-emerald-100 hover:text-emerald-700">
                            #Championnat
                        </a>
                        <a href="#" class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm hover:bg-emerald-100 hover:text-emerald-700">
                            #Règlement
                        </a>
                        <!-- Ajouter d'autres tags -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection