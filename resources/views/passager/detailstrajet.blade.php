<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien du Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lien des Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
    <title>Les Cours</title>
</head>
<body class="bg-amber-200">
   

    <!-- Cours Form-->
    <div id="postform" class="hidden fixed left-[32rem] top-[0rem] flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:pr-4 dark:bg-gray-800 dark:border-gray-700">
            <i id="xmarkcsltion2" class="fa-solid fa-xmark ml-[26rem] text-2xl cursor-pointer mt-[1.2rem]" style="color: #2e2e2e;"></i>
            <div class="space-y-6 py-8 px-10">
                <h1 class="text-xl mt-[-2rem] font-bold leading-tight tracking-tight text-stone-700 md:text-2xl dark:text-white">
                    Modifier votre Cours 
                </h1>
                <form class="space-y-1" method="POST" enctype="multipart/form-data">
                    
                    <input type="hidden" name="modifier_cours" value="1">
                    <div>
                        <label for="titre" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Titre</label>
                        <input type="text" name="titre" id="titre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Écrivez votre biographie ici..."></textarea>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="type" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Type </label>
                            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1">Video</option>
                                <option value="2">Document</option>
                                
                            </select>
                        </div>
                        <div>
                            <label for="categorie" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Categorie</label>
                            <select id="categorie" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                
                              
                                
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="contenu" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Contenu</label>
                        <input type="text" id="contenu" name="contenu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-stone-700 dark:text-white" for="thumbnail">Thumbnail</label>
                        <input name="thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-[7px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file">
                    </div>
                    <div>
                        <label for="tag" class="block mb-2 text-sm font-medium text-stone-700 dark:text-white">Tags</label>
                        <select id="tag" name="tag" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                           
                        </select>
                    </div>
                    
                    <button type="submit" class="ml-[7rem] mt-[5rem] w-[8rem] text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Modifier</button>
                </form>
            </div>
        </div>
    </div>

    <main class="overflow-hidden bg-white">

        <div class="w-full flex-col justify-start items-start gap-10 flex mt-[2rem]"> 
            <div class="w-full justify-between items-start flex sm:flex-row flex-col gap-3"> 

                <h1 class="text-3xl font-bold leading-tight ml-[4rem] text-gray-800 dark:text-gray-100 underline underline-offset-3 decoration-6 decoration-amber-200">Trajet Tracking</h1>
            </div> 


            <div class="w-full py-6 pr-[3rem] rounded-xl border border-gray-200 flex-col justify-start items-start flex"> 
                <div class="w-full flex-col justify-center sm:items-center items-start gap-8 flex"> 
                    <ol class="flex sm:items-center items-start w-full sm:gap-0 gap-5">
                            
                        <li id="villetrajet" onclick="" class="cursor-pointer flex w-full relative justify-center text-gray-600 text-base font-semibold after:content-get'] after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 after:left-[10.5rem]"> 
                            <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center"> 
                                <form action="" method="POST" style="display: inline;"> 
                                    <input type="hidden" name="ville" value=""> 
                                    <button type="submit"> <span class="w-6 h-6 bg-gray-600 text-center border-2 border-white rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">1</span> 
                                        <span class="text-lg" >{{ $reservation->lieuDepart }}</span> 
                                    </button> 
                                </form> 
                                    
            
                                <form action="" id="arrivebtn" method="POST"> 

                                    <input type="hidden" name="ID_ville" id="ID_ville" value=""> 
                                    <button type="submit" class="text-gray-600 hover:text-gray-600 font-medium rounded-lg text-sm px-2.5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>



                                    </button> 

                                </form> 

                            </div> 
                        </li>

                        <li id="villetrajet" onclick="" class="cursor-pointer flex w-full relative justify-center text-gray-600 text-base font-semibold after:content-get'] after:w-full after:h-0.5 after:bg-gray-300 after:inline-block after:absolute lg:after:top-4 after:top-3 after:left-[10.5rem]"> 
                            <div class="block sm:whitespace-nowrap z-10 flex flex-col items-center text-center"> 
                                <form action="" method="POST" style="display: inline;"> 
                                    <input type="hidden" name="ville" value=""> 
                                    <button type="submit"> <span class="w-6 h-6 bg-gray-600 text-center border-2 border-white rounded-full flex justify-center items-center mx-auto mb-1 text-base font-bold text-white lg:w-8 lg:h-8">2</span> 
                                        <span class="text-lg" >{{ $reservation->lieuArrivee }}</span> 
                                    </button> 
                                </form> 
                                    
            
                                <form action="" id="arrivebtn" method="POST"> 

                                    <input type="hidden" name="ID_ville" id="ID_ville" value=""> 
                                    <button type="submit" class=" text-gray-600 hover:text-gray-600 font-medium rounded-lg text-sm px-2.5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
                                        
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>

                                    </button> 

                                </form> 

                            </div> 
                        </li>           
                        
                    </ol> 
                </div> 
            </div> 
        </div>


        <!-- Cours Details-->
        <div >
            <div class="container mx-auto px-4 py-8">
                <div class="flex">
                    <button id="ajtpost" type="button" class="ml-[84rem] text-white bg-yellow-300 hover:bg-yellow-400 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>

                    </button>

                    <form id="" method="POST">
                        <input type="hidden" name="supprimer_cours" value="1">

                        <button class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>


                        </button>
                    </form>
            
                </div>
                
                <div class="flex flex-wrap -mx-4">
                
                    <div class="w-2/5 px-4 mb-8">
                        <div class="col-span-4 sm:col-span-3">
                            <div class="bg-white shadow rounded-lg px-6 py-10">
                                <div class="flex flex-col items-center">
                                    <img src='/{{ $reservation->chauffeur->photo }}' class="w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0">
                                    <h1 class="text-xl font-bold">{{ $reservation->chauffeur->name }} {{ $reservation->chauffeur->last_name }}</h1>
                                    <p class="text-lg text-stone-600 font-semibold">{{ $reservation->chauffeur->role }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <div class="min-w-0 rounded-lg shadow-xs overflow-hidden bg-white dark:bg-gray-800">
                            <div class="p-4 flex items-center">
                                <div class="p-3 rounded-full text-red-500 dark:text-red-100 bg-red-600 dark:bg-red-500 mr-4">
                                    <svg fill="white" viewBox="0 0 20 20" class="w-5 h-5">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                    </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-700 dark:text-gray-400">
                                        Nombre de Passagers
                                    </p>
                                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    12
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h1 class="text-5xl font-bold leading-tight my-6 text-gray-800 dark:text-gray-100 underline underline-offset-3 decoration-6 decoration-amber-200"></h1>
                        <p class="">
                            <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-3.5 py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Statut de la Course </span>
                            <span class="bg-red-100 text-red-800 text-base font-semibold me-2 px-3.5 py-1.5 rounded dark:bg-red-900 dark:text-red-300">{{ $reservation->statut }}</span>
                        </p>
                        
                        <p class="mt-[3rem]">
                            <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-3.5 py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Date de Depart</span>
                            <span class="bg-amber-100 text-amber-800 text-base font-semibold me-2 px-3.5 py-1.5 rounded dark:bg-amber-900 dark:text-amber-300">{{ $reservation->dateDepart }}</span>
                        </p>

                        <p class="mt-[2rem]">
                            <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-3.5 py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Date d'Arrivée</span>
                            <span class="bg-amber-100 text-amber-800 text-base font-semibold me-2 px-3.5 py-1.5 rounded dark:bg-amber-900 dark:text-amber-300">{{ $reservation->dateArrivee }}</span>
                        </p>

                    </div>
                    
                    
                </div>
            
            </div>
        </div>

    </section>
                                            

    </main>

   

    <script>
        function coursInscription(ID_cours) {
        document.getElementById("ID_cours").value = ID_cours;
        document.getElementById("coursInscription").submit();
        };

        const ctnr2 = document.getElementById("postform");
        const xmark2 = document.getElementById("xmarkcsltion2");
        const ajtpost = document.getElementById("ajtpost");
        const dropdownbutton = document.getElementById("dropdown-button");
        const dropdown1 = document.getElementById("dropdown-1");
        
        xmark2?.addEventListener('click', function(){
            ctnr2.classList.add('hidden');
        });


        ajtpost?.addEventListener('click', function(){
            ctnr2.classList.remove('hidden');
        });

        dropdownbutton?.addEventListener('click', function(){
            dropdown1.classList.remove('hidden');
        });

        dropdownbutton?.addEventListener('dblclick', function(){
            dropdown1.classList.add('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
            
            const morecmntButtons = document.querySelectorAll("#morecmnt");
            const lesscmntButtons = document.querySelectorAll("#lesscmnt");
            const cmntSections = document.querySelectorAll("#cmntsction");

            morecmntButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    cmntSections[index].classList.remove('hidden');
                    button.classList.add('hidden'); 
                    lesscmntButtons[index].classList.remove('hidden');
                });
            });

            lesscmntButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    cmntSections[index].classList.add('hidden');
                    button.classList.add('hidden'); 
                    morecmntButtons[index].classList.remove('hidden');
                });
            });
        });
    </script>
</body>
</html>