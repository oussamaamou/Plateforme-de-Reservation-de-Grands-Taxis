<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard {{ Auth::user()->role }}</title>
</head>
<body class="flex bg-gray-100 min-h-screen">
    <aside class="hidden sm:flex sm:flex-col">

        <a href="" class="flex items-center">
            <img src="https://static.vecteezy.com/system/resources/previews/038/821/574/non_2x/flat-taxi-logo-isolated-on-white-background-car-face-icon-silhouette-auto-logo-template-taxi-service-brand-design-vector.jpg" class="w-[5rem]" alt="Site Web Logo" />
        </a>
        <div class="flex-grow flex flex-col justify-between text-gray-500 bg-gray-800">
            <nav class="flex flex-col mx-4 my-6 space-y-4">
                <a href="{{route('admin.dashboard')}}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">

                    <span class="sr-only">Dashboard</span>
                    <i class="fas fa-chart-line text-xl"></i>
                </a>

                <a href="{{route('admin.listes')}}" class="inline-flex items-center justify-center py-3 text-yellow-600 bg-white rounded-lg">

                    <span class="sr-only">Utilisateurs</span>
                    <i class="fas fa-users text-xl"></i>
                </a>


                <a href="admin/colis" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">

                    <span class="sr-only">Colis</span>
                    <i class="fas fa-box text-xl"></i>
                </a>


                <a href="admin/" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                    <span class="sr-only">Annonces</span>

                    <i class="fas fa-chart-bar text-xl"></i>
                </a>

                <a href="{{ route('profile.edit') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">
                    <span class="sr-only">Annonces</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                </a>
            </nav>
        </div>
    </aside>

    <div class="flex-grow text-gray-800">
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <div class="flex flex-shrink-0 items-center ml-auto">
                <div class="flex items-center">
                    <span class="text-gray-800 text-sm mr-4">Bienvenue, {{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="text-gray-800 hover:text-red-500" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </form>
                </div>
            </div>
        </header>

        <!-- Liste des Passagers -->
        <section id="last-colis" class="bg-white shadow rounded-lg p-6">
            <div class="px-6 py-5 text-xl text-gray-700 font-bold underline underline-offset-3 decoration-6 decoration-amber-200">
                Liste des Passagers
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                            <th class="px-4 py-3">Passager</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Téléphone</th>
                            <th class="px-4 py-3">Statut</th>
                            <th class="px-4 py-3">Date d'Inscription</th>
                            <th class="px-4 py-3">Bannir</th>
                            <th class="px-4 py-3">Verifier</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">

                        @foreach ( $passagers as $passager)

                        @php
                            if ($passager->statut === 'normal') {
                                $bgClass = 'text-amber-500';
                            } elseif ($passager->statut === 'verifiee') {
                                $bgClass = 'text-green-500';
                            } elseif ($passager->statut === 'bannie') {
                                $bgClass = 'text-red-500';
                            }
                            
                        @endphp

                        <tr class="text-gray-700 font-semibold">
                            <td class="px-4 py-3 font-bold text-lg">
                                {{ $passager->name}} {{ $passager->last_name}}
                            </td>
                            <td class="px-4 py-3 ">{{ $passager->email}}</td>
                            <td class="px-4 py-3 ">{{ $passager->telephone}}</td>
                            <td class="px-4 py-3 capitalize {{ $bgClass }}">{{ $passager->statut}}</td>
                            <td class="px-4 py-3">
                                {{ \Carbon\Carbon::parse($passager->created_at)->format('Y-m-d')}}
                            </td>
                            <td class="px-4 py-3">
                                <button onclick="" type="button" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>


                                </button>
                                
                            </td>

                            <td class="px-4 py-3">
                                <button onclick="" type="button" class="ml-auto text-white bg-green-500 hover:bg-green-600 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </button>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </section>


        <!-- Liste des Chauffeurs -->
        <section id="last-colis" class="bg-white shadow rounded-lg p-6">
            <div class="px-6 py-5 text-xl text-gray-700 font-bold underline underline-offset-3 decoration-6 decoration-amber-200">
                Liste des Chauffeurs
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                            <th class="px-4 py-3">Passager</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Téléphone</th>
                            <th class="px-4 py-3">Statut</th>
                            <th class="px-4 py-3">Etat</th>
                            <th class="px-4 py-3">Bannir</th>
                            <th class="px-4 py-3">Verifier</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">

                        @foreach ( $chauffeurs as $chauffeur)

                        @php
                            if ($chauffeur->statut === 'normal') {
                                $bgClass = 'text-amber-500';
                            } elseif ($chauffeur->statut === 'verifiee') {
                                $bgClass = 'text-green-500';
                            } elseif ($chauffeur->statut === 'bannie') {
                                $bgClass = 'text-red-500';
                            }

                            if ($chauffeur->etat === 'Disponible') {
                                $txtClass = 'text-green-500';
                            }elseif ($chauffeur->etat === 'Indisponible') {
                                $txtClass = 'text-green-500';
                            }
                            
                        @endphp

                        <tr class="text-gray-700 font-semibold">
                            <td class="px-4 py-3 font-bold text-lg">
                                {{ $chauffeur->name}} {{ $chauffeur->last_name}}
                            </td>
                            <td class="px-4 py-3 ">{{ $chauffeur->email}}</td>
                            <td class="px-4 py-3 ">{{ $chauffeur->telephone}}</td>
                            <td class="px-4 py-3 capitalize {{ $bgClass }}">{{ $chauffeur->statut}}</td>
                            <td class="px-4 py-3 {{ $txtClass }}">
                                {{ $chauffeur->etat}}
                            </td>
                            <td class="px-4 py-3 ">
                                <button onclick="" type="button" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                                    </svg>


                                </button>

                            </td>

                            <td class="px-4 py-3">
                                <button onclick="" type="button" class="ml-auto text-white bg-green-500 hover:bg-green-600 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                </button>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </section>




    </div>
</body>
</html>