@extends('layouts.main')

@section('content')
<div class="relative">
    <!-- Hero Section avec Animation -->
    <section class="relative h-[50vh] flex items-center bg-emerald-900">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/img/scrabble-bg.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/95 via-emerald-800/95 to-emerald-900/95"></div>
            <!-- Motif hexagonal animé -->
            <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MCIgaGVpZ2h0PSI0MyI+PHBhdGggZD0iTTI1IDQzbDI1LTQzSDBMMjUgNDN6IiBmaWxsPSIjZmZmIi8+PC9zdmc+')]"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">Nos Organes</h1>
                <p class="text-xl md:text-2xl text-white/90 leading-relaxed max-w-2xl">
                    Une structure organisationnelle efficace au service du Scrabble francophone
                </p>
            </div>
        </div>
    </section>

    <!-- Structure Organisationnelle Interactive -->
    <section class="py-20 bg-white relative">
        <div class="container mx-auto px-4">
            <!-- Organigramme Interactif -->
            <div class="max-w-7xl mx-auto mb-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- AG - Élément principal -->
                    <div class="md:col-span-3">
                        <div class="bg-emerald-900 rounded-2xl p-8 text-white transform transition-all hover:scale-[1.02] cursor-pointer shadow-xl">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-2xl font-bold mb-4">Assemblée Générale (AG)</h3>
                                    <p class="text-emerald-100">L'organe suprême de décision de la FISF</p>
                                </div>
                                <span class="text-5xl font-bold text-emerald-700">AG</span>
                            </div>
                        </div>
                    </div>

                    <!-- CA -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform transition-all hover:scale-[1.02] hover:shadow-xl">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <span class="text-3xl font-bold text-emerald-700">CA</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Conseil d'Administration</h3>
                            <p class="text-gray-600 mb-6">Organe exécutif chargé de la gestion et de l'administration de la fédération.</p>
                            <div class="mt-auto">
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Gestion administrative
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Décisions stratégiques
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CD -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform transition-all hover:scale-[1.02] hover:shadow-xl">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <span class="text-3xl font-bold text-emerald-700">CD</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Comité Directeur</h3>
                            <p class="text-gray-600 mb-6">Direction opérationnelle et mise en œuvre des décisions du CA.</p>
                            <div class="mt-auto">
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Gestion quotidienne
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Coordination des actions
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CT -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform transition-all hover:scale-[1.02] hover:shadow-xl">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                    </svg>
                                </div>
                                <span class="text-3xl font-bold text-emerald-700">CT</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Commission Technique</h3>
                            <p class="text-gray-600 mb-6">Gestion des aspects techniques et règlementaires des compétitions.</p>
                            <div class="mt-auto">
                                <ul class="space-y-2 text-sm text-gray-600">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Règles du jeu
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                        </svg>
                                        Organisation des tournois
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commissions Spécialisées -->
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-12 text-center">Commissions Spécialisées</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- CR-ODS -->
                    <div class="bg-gray-50 rounded-2xl p-8 shadow-lg transform transition-all hover:scale-[1.02] hover:shadow-xl">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-emerald-700">CR-ODS</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Commission du Règlement et de l'ODS</h3>
                        <p class="text-gray-600 mb-6">Responsable de l'évolution des règles et de la mise à jour de l'Officiel du Scrabble.</p>
                        <div class="bg-white rounded-xl p-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Responsabilités clés :</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                    </svg>
                                    Mise à jour de l'ODS
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                    </svg>
                                    Évolution des règlements
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- CIE -->
                    <div class="bg-gray-50 rounded-2xl p-8 shadow-lg transform transition-all hover:scale-[1.02] hover:shadow-xl">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-3xl font-bold text-emerald-700">CIE</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Commission Internationale des Équipes</h3>
                        <p class="text-gray-600 mb-6">Coordination des compétitions internationales et gestion des équipes nationales.</p>
                        <div class="bg-white rounded-xl p-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Responsabilités clés :</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                    </svg>
                                    Gestion des équipes
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                                    </svg>
                                    Coordination internationale
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-emerald-900">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Participez à la vie de la FISF</h2>
                <p class="text-xl text-white/90 mb-8">Rejoignez nos commissions et contribuez au développement du Scrabble francophone</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-flex items-center px-8 py-4 bg-white text-emerald-900 font-semibold rounded-full hover:bg-emerald-50 transition-colors duration-300">
                        Devenir membre
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full hover:bg-white/10 transition-colors duration-300">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 