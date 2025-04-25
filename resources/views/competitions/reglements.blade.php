@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section -->
    <section class="relative py-20 bg-emerald-900">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/reglement-bg.jpg') }}" alt="Règlements" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/95 via-emerald-800/90 to-emerald-900/95"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl">
                <span class="inline-block px-4 py-2 bg-emerald-800/50 text-emerald-100 rounded-full text-sm font-medium mb-6">
                    Règlements Officiels
                </span>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">Règlements des Compétitions</h1>
                <p class="text-xl text-white/90 mb-8 max-w-2xl">
                    Toutes les règles officielles pour participer aux compétitions de la FISF.
                </p>
            </div>
        </div>
    </section>

    <!-- Navigation Rapide -->
    <section class="sticky top-20 bg-white shadow-md z-30">
        <div class="container mx-auto px-4">
            <div class="flex overflow-x-auto no-scrollbar py-4 gap-4">
                <a href="#regles-jeu" class="px-6 py-2 bg-emerald-600 text-white rounded-full whitespace-nowrap hover:bg-emerald-700 transition-colors">
                    Règles du jeu
                </a>
                <a href="#duplicate" class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Scrabble Duplicate
                </a>
                <a href="#classique" class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Scrabble Classique
                </a>
                <a href="#licences" class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Licences
                </a>
                <a href="#categories" class="px-6 py-2 text-gray-600 rounded-full whitespace-nowrap hover:bg-gray-100 transition-colors">
                    Catégories
                </a>
            </div>
        </div>
    </section>

    <!-- Section Règles Générales -->
    <section id="regles-jeu" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Sidebar avec Table des matières -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-xl shadow-lg p-6 sticky top-40">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Dans cette section</h3>
                            <nav class="space-y-2">
                                <a href="#regles-jeu" class="flex items-center text-emerald-600 hover:text-emerald-700">
                                    <span class="w-1.5 h-1.5 bg-emerald-600 rounded-full mr-2"></span>
                                    Règles générales
                                </a>
                                <a href="#duplicate" class="flex items-center text-gray-600 hover:text-emerald-600">
                                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                                    Format Duplicate
                                </a>
                                <a href="#classique" class="flex items-center text-gray-600 hover:text-emerald-600">
                                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                                    Format Classique
                                </a>
                            </nav>

                            <!-- Téléchargement PDF -->
                            <div class="mt-8 p-4 bg-emerald-50 rounded-lg">
                                <h4 class="font-semibold text-gray-900 mb-2">Documentation complète</h4>
                                <a href="#" class="inline-flex items-center text-emerald-600 hover:text-emerald-700">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Télécharger le PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contenu Principal -->
                    <div class="lg:col-span-2 space-y-12">
                        <!-- Règles Générales -->
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Règles Générales</h2>
                            <div class="prose prose-emerald max-w-none">
                                <p>Les règles officielles du Scrabble de compétition définissent le cadre de jeu pour toutes les épreuves homologuées par la FISF.</p>
                                
                                <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">Points essentiels</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <svg class="w-6 h-6 text-emerald-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Utilisation exclusive de l'ODS (Officiel du Scrabble) en vigueur</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-6 h-6 text-emerald-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>Respect du temps imparti pour chaque coup</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Format Duplicate -->
                        <div id="duplicate" class="bg-white rounded-xl shadow-lg p-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Scrabble Duplicate</h2>
                            <div class="prose prose-emerald max-w-none">
                                <div class="bg-emerald-50 rounded-lg p-6 mb-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Points clés du Duplicate</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            Mêmes tirages pour tous les joueurs
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            3 minutes par coup
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Format Classique -->
                        <div id="classique" class="bg-white rounded-xl shadow-lg p-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Scrabble Classique</h2>
                            <div class="prose prose-emerald max-w-none">
                                <div class="bg-emerald-50 rounded-lg p-6 mb-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Spécificités du Classique</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            Partie en face à face
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 text-emerald-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            Gestion du temps global
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Licences et Catégories -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <!-- Licences -->
                <div id="licences" class="mb-20">
                    <h2 class="text-3xl font-bold text-gray-900 mb-12">Licences</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Licence Internationale</h3>
                            <p class="text-gray-600 mb-4">Permet de participer à toutes les compétitions internationales.</p>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Championnats du Monde
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Festivals internationaux
                                </li>
                            </ul>
                        </div>

                        <!-- Autres types de licences... -->
                    </div>
                </div>

                <!-- Catégories -->
                <div id="categories">
                    <h2 class="text-3xl font-bold text-gray-900 mb-12">Catégories</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-xl shadow-lg">
                            <thead>
                                <tr class="bg-emerald-50">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Catégorie</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Âge</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Spécificités</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900 font-medium">Espoir</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">18-25 ans</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Compétitions spécifiques</td>
                                </tr>
                                <!-- Autres catégories... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Questions Fréquentes</h2>
                <div class="space-y-6">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <button class="w-full px-6 py-4 text-left focus:outline-none">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900">Comment obtenir une licence ?</h3>
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="px-6 pb-4">
                            <p class="text-gray-600">Contactez votre fédération nationale pour obtenir une licence...</p>
                        </div>
                    </div>
                    <!-- Autres questions... -->
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Besoin d'aide ?</h2>
                <p class="text-xl text-white/90 mb-8">
                    Notre équipe est là pour répondre à vos questions sur les règlements.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors">
                        Contacter l'arbitrage
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 transition-colors">
                        Consulter la FAQ
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
@endsection 