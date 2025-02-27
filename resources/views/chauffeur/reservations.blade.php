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
                <a href="{{ route('chauffeur.dashboard') }}" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">

                    <span class="sr-only">Dashboard</span>
                    <i class="fas fa-chart-line text-xl"></i>
                </a>

                <a href="admin/users" class="inline-flex items-center justify-center py-3 hover:text-gray-400 hover:bg-gray-700 focus:text-gray-400 focus:bg-gray-700 rounded-lg">

                    <span class="sr-only">Utilisateurs</span>
                    <i class="fas fa-users text-xl"></i>
                </a>

                <a href="{{ route('chauffeur.reservations') }}" class="inline-flex items-center justify-center py-3 text-yellow-600 bg-white rounded-lg">
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


    <h1> Disponibilite </h1>


</body>
</html>