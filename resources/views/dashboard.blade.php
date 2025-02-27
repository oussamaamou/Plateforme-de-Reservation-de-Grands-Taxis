<x-app-layout>

    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <section>
            

            <!-- Reservation Form-->
            <div id="ctnrcsltion" class="hidden fixed left-[32rem] top-[-1rem] flex flex-col items-center justify-center px-8 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <i id="xmarkcsltion" class="fa-solid fa-xmark ml-[26rem] mr-[2rem] text-2xl cursor-pointer mt-[1.2rem]" style="color: #2e2e2e;"></i>
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                            Reserver votre Chauffeur
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="reservations" method="POST">
                            @csrf

                            <input type="hidden" name="passager_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="chauffeur_id" value="">

                            <input type="hidden" name="medecin_id" id="medecin_id" value="">
                            <div class="mb-5">
                                <label for="dateDepart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de Depart</label>
                                <input type="datetime-local" id="dateDepart" name="dateDepart" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                            <div class="mb-5">
                                <label for="dateArrivee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'Arrivée</label>
                                <input type="datetime-local" id="dateArrivee" name="dateArrivee" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                            </div>

                            <div>
                                <label for="lieuDepart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu de Depart</label>
                                <select id="lieuDepart" name="lieuDepart" required class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="Patient">Safi</option>
                                    <option value="Medecin">Casablanca</option>
                                </select>
                            </div>

                            <div>
                                <label for="lieuArrivee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu d'Arrivée</label>
                                <select id="lieuArrivee" name="lieuArrivee" required class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="Patient">Safi</option>
                                    <option value="Medecin">Casablanca</option>
                                </select>
                            </div>

                            <button type="submit" class="ml-[7rem] w-[8rem] text-white bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Confirmer</button>
                        </form>
                    </div>
                </div>
            </div>
            

            @foreach ($chauffeurs as $chauffeur)
            <!-- Medecin Card-->
            <div class="mt-[4rem] ml-[12rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="https://static.vecteezy.com/system/resources/previews/033/397/041/non_2x/taxi-driver-profession-during-work-concept-young-smiling-handsome-man-taxi-driver-sitting-in-yellow-car-and-looking-from-window-during-job-vector.jpg" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-amber-500 transition-transform duration-300 hover:scale-105">
                        <h1 class="text-xl font-bold text-amber-500 dark:text-white mb-2">{{ $chauffeur->name }} {{ $chauffeur->last_name }}</h1>
                        <p class="text-stone-700 font-bold">{{ $chauffeur->role }}</p>
                        <button onclick="addConsultationForm()" class="mt-4 font-medium text-white px-4 py-2 rounded-lg bg-gradient-to-r from-amber-400 via-amber-500 to-amber-600 hover:bg-gradient-to-br transition-colors duration-300">Reserver</button>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        
                        <h2 class="text-xl font-semibold text-amber-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                {{ $chauffeur->email }}
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            
        </section>
               
        </div>
    </div>
</x-app-layout>


<script>

function addConsultationForm(chauffeur_id) {

    document.getElementById("chauffeur_id").value = chauffeur_id;
    document.getElementById("ctnrcsltion").classList.remove('hidden');
};

document.getElementById("xmarkcsltion").addEventListener('click', function(){
    document.getElementById("ctnrcsltion").classList.add('hidden');
});
</script>
