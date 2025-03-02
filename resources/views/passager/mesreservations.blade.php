<x-app-layout>

<script src="https://cdn.tailwindcss.com"></script>


<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mes Réservations
    </h2>
</x-slot>

            @foreach ($reservations as $reservation)
            <!-- Medecin Card-->
            <div class="mt-[4rem] ml-[20rem] bg-white dark:bg-gray-800 rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in pt-[3.5rem]">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 text-center mb-8 md:mb-0">
                        <img src="/{{ $reservation->chauffeur->photo }}" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-amber-500 transition-transform duration-300 hover:scale-105"> 
                        <p class="text-stone-700 font-bold">{{ $reservation->chauffeur->name }} {{ $reservation->chauffeur->last_name }}</p>
                        <a  href="{{ route('passager.details', ['reservation' => $reservation])}}">
                            <button class="ml-[5.7rem] mt-[2rem] flex items-center rounded-md border border-amber-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg text-amber-600 hover:text-white hover:bg-amber-800 hover:border-amber-800 focus:text-white focus:bg-amber-800 focus:border-amber-800 active:border-amber-800 active:text-white active:bg-amber-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                Details
                                
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-1.5">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        
                        <h2 class="text-xl font-semibold text-amber-500 mb-4">Contact</h2>
                        <ul class="space-y-2 text-stone-700 font-medium">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-stone-700 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                
                                {{ $reservation->chauffeur->email }}

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach


</x-app-layout>