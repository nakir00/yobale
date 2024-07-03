<?php if(!$Role::isConnect()) redirectToRoute("/");   ?>

<?php    require_once(ROOT."views/partials/header.html.php"); ?>
    
    <div class="base-layout grid grid-rows-3 grid-columns-6">
    <aside class="sidebar flex-column">
        <div>
            ceci est un texte
        </div>
      <!-- dropdown user  dropdown icon -->
        <div style="height: 230px;"><!-- séparateur --></div>
        <nav class="flex-column">
            <div class="mt-10 p-10"><!-- Titre de menu -->
                <a class="link w-full text-white" href="<?=WEB_URL?>/dashboard">Tableau de bord</a>
            </div>

            <div class=" p-10">
                <button class="link w-full dropdown-button justify-between text-white">
                        Commande
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 button-icon rotate-45">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                </button>
                <div class="dropdown-content show" >
                    <ul class="pl-10">
                        <li>
                            <a class="link w-full text-white" href='<?=WEB_URL?>/commande/add'> Creer une commande </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href='<?=WEB_URL?>/dashboard'> Liste des commandes </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-10">
                <button class="link w-full dropdown-button justify-between text-white">
                    Yobal
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 button-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
                <div class="dropdown-content" >
                    <ul class="pl-10">
                        <li>
                            <a class="link w-full text-white" href=''> Yobal collectés </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href=''> Yobal en transit </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href=''> Yobal à destination </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href=''> Yobql livrés </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href=''> suivi de Yobal </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-10">
                <button class="link w-full dropdown-button justify-between text-white">
                    Paiements
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 button-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
                <div class="dropdown-content">
                    <ul class="pl-10">
                        <li>
                            <a class="link w-full text-white" href=''> Paiements de Yobal reçus </a>
                        </li>
                        <li>
                            <a class="link w-full text-white" href=''> Paiements de convoyeurs </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class=" p-10">
                <a class="link w-full text-white" href="#">Vérification des convoyeurs</a>
            </div>

            <div class=" p-10">
                <a class="link w-full text-white" href="#">Simulation des tarifs</a>
            </div>

            <div class=" p-10">
                <a class="link w-full text-white" href="#">Chat des agents</a>
            </div>
            
            <div class=" p-10">
                <a class="link w-full text-white" href="#">Notifications</a>
            </div>

        </nav>

    </aside>
    <main class="content">
        
        <div class="header w-full flex-column justify-center ">
            <div class="flex-row justify-between">
                <label for="search" class="search flex-row justify-between w-full">
                    <svg style=" width: 32px;height: 32px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input class="w-full" title="search" placeholder="rechercher" type="search" name="search" id="search" />

                </label>
                
                <div class=" floating-dropdown mr-10"> 
                    <div  class="floating-dropdown-button flex-row w-6" >
                        <div>
                            <svg  style=" width: 32px;height: 32px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                              </svg>
                              
                        </div>
                        <div>
                            Mr. naby
                        </div>
                        <div class="text-black flex-column justify-center">
                            <svg class="text-black xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" style=" width: 16px;height: 16px;">
                                <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                              </svg>
                        </div>
                    </div>
                    <div class="floating-dropdown-content  w-full   right-0 radius-10">
                        <ul class="flex-column w-full">
                            <li class="flex-row p-4">
                                <a class="link flex-row justify-center w-full radius-6 text-black" href='<?=WEB_URL?>'> profil </a>
                            </li>
                            <li class="flex-row p-4">
                                <a class="link flex-row justify-center w-full radius-6 text-black" href='<?=WEB_URL?>/logout'> se deconnecter </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="flex-column ">
        <?=$content_for_views?>
        </div>
    </main>
</div>
   
<?php    require_once(ROOT."views/partials/footer.html.php"); ?>