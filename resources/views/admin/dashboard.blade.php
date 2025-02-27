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
                <a href="#" class="inline-flex items-center justify-center py-3 text-yellow-600 bg-white rounded-lg">

                    <span class="sr-only">Dashboard</span>
                    <i class="fas fa-chart-line text-xl"></i>
                </a>

                <a href="admin/users" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">

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

        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
                    <h2 class="text-gray-600 ml-0.5">Vue d'ensemble de la plateforme</h2>
                </div>
            </div>

            <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                <!-- Total Utilisateurs -->
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">5</span>
                        <span class="block text-gray-500">Utilisateurs</span>
                    </div>
                </div>

                <!-- Total Conducteurs -->
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-yellow-600 bg-yellow-100 rounded-full mr-6">
                        <i class="fas fa-car text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">3</span>
                        <span class="block text-gray-500">Chauffeurs</span>
                    </div>
                </div>

                <!-- Total Expéditeurs -->
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                        <i class="fas fa-user text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">8</span>
                        <span class="block text-gray-500">Passagers</span>
                    </div>
                </div>

                <!-- Total Colis -->
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                        <i class="fas fa-box text-xl"></i>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">10</span>
                        <span class="block text-gray-500">Trajets</span>
                    </div>
                </div>
            </section>

            <section class="grid md:grid-cols-2 xl:grid-cols-2 gap-6">
                <!-- Statistiques des Colis -->
                <div class="flex flex-col bg-white shadow rounded-lg">
                    <div class="px-6 py-5 font-semibold border-b border-gray-100">Statistiques des Colis</div>
                    <div class="p-4 flex-grow">
                        <canvas id="colisChart" height="300"></canvas>
                    </div>
                </div>

                <!-- Statistiques des Utilisateurs -->
                <div class="flex flex-col bg-white shadow rounded-lg">
                    <div class="px-6 py-5 font-semibold border-b border-gray-100">Statistiques des Utilisateurs</div>
                    <div class="p-4 flex-grow">
                        <canvas id="usersChart" height="300"></canvas>
                    </div>
                </div>
            </section>

            <!-- Liste des Conducteurs -->
                <section class="bg-white shadow rounded-lg">

                    <div class="px-6 py-5 font-semibold border-b border-gray-100">
                        Liste des Conducteurs
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                    <th class="px-4 py-3">Nom</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Téléphone</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                                
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3">
                                        Hussein Abbas
                                    </td>
                                    <td class="px-4 py-3">{{ Auth::user()->email }}</td>
                                    <td class="px-4 py-3">0658478595</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </section>

            <!-- Liste des Itinéraires -->
            <section class="bg-white shadow rounded-lg">
                <div class="px-6 py-5 font-semibold border-b border-gray-100">
                    Liste des Itinéraires
                </div>
                <div class="overflow-x-auto">
                
                        <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">Conducteur</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            
                            <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                    Ahmed Hassan
                                </td>
                                <td class="px-4 py-3">27/02/2025</td>
                                <td class="px-4 py-3">{{ Auth::user()->statut }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                </div>
            </section>
            <!-- Derniers Colis -->
            <section id="last-colis" class="bg-white shadow rounded-lg">
                <div class="px-6 py-5 font-semibold border-b border-gray-100">
                    Derniers Colis
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3">Expéditeur</th>
                                <th class="px-4 py-3">Destination</th>
                                <th class="px-4 py-3">Volume</th>
                                <th class="px-4 py-3">Poids</th>
                                <th class="px-4 py-3">Statut</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            
                            <tr class="text-gray-700">
                                <td class="px-4 py-3">
                                    Morad Rabeh
                                </td>
                                <td class="px-4 py-3">Casablanca</td>
                                <td class="px-4 py-3">10 m³</td>
                                <td class="px-4 py-3">2.5 kg</td>
                                <td class="px-4 py-3">
                                    <span class="px-2 py-1 font-semibold leading-tight rounded-full">
                                    </span>
                                </td>
                                <td class="px-4 py-3">26/02/2025</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- <script>
      const colisStats = ;

        const colisChart = new Chart(document.getElementById('colisChart'), {
            type: 'pie', // Type de graphique (ex: bar, pie, line, etc.)
            data: {
                labels: ['En attente', 'En cours', 'Livrés'], // Légendes des données
                datasets: [{
                    label: 'Statistiques des colis',
                    data: [colisStats.en_attente, colisStats.en_cours, colisStats.livres], // Données statistiques
                    backgroundColor: ['#FF6384', '#36A2EB', '#4BC0C0'], // Couleurs pour les segments
                }]
            }
        });

        const usersStats = ;

            const usersChart = new Chart(document.getElementById('usersChart'), {
                type: 'bar',
                data: {
                    labels: ['Conducteurs', 'Expéditeurs', 'Admins'], // Légendes
                    datasets: [{
                        label: 'Nombre d\'utilisateurs par rôle',
                        data: [usersStats.conducteurs, usersStats.expediteurs, usersStats.admins], // Données
                        backgroundColor: ['#FF9F40', '#FFCD56', '#4BC0C0'], // Couleurs
                    }]
                }
            });

        // Fetch Conducteurs
        fetch('/Admin/conducteurs')
            .then(response => response.json())
            .then(data => {
                const conducteursContainer = document.querySelector('.conducteurs-list');
                data.forEach(conducteur => {
                    const conducteurElement = document.createElement('div');
                    conducteurElement.textContent = conducteur.name; // Adjust to your data structure
                    conducteursContainer.appendChild(conducteurElement);
                });
            });

        // Fetch Itinéraires
        fetch('/Admin/itineraire')
            .then(response => response.json())
            .then(data => {
                const itinerairesContainer = document.querySelector('.itineraire-list');
                data.forEach(itineraire => {
                    const itineraireElement = document.createElement('div');
                    itineraireElement.textContent = itineraire.destination; // Adjust to your data structure
                    itinerairesContainer.appendChild(itineraireElement);
                });
            });
    </script> -->
</body>
</html>