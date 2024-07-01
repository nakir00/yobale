<?php if(!$Role::isConnect()) redirectToRoute("/");   ?>

<?php    require_once(ROOT."views/partials/header.html.php"); ?>

    <div class="wrapper ">
        <div class="sidebar-left  bg-dark">
                  <div class="top mt-2">
                      <!-- <img src="<?=WEB_URL?>/img/mactar.jpeg" alt="" srcset=""> -->
                      <p>
                          <small class="fst-italic text-white  fs-6"> Nom et Prenom </small><br>
                          <small class="fst-italic text-white fs-6"> Profil</small>
                      </p>
                  </div>
                  <div class="bottom">
                  <div class="list-group">
                           
                            <a href="<?=WEB_URL?>/cours" class="list-group-item list-group-item-action position">Cours</a>
                            <a href="<?=WEB_URL?>/inscription" class="list-group-item list-group-item-action position">Inscription</a>
                            <a href="<?=WEB_URL?>/professeur" class="list-group-item list-group-item-action position">Professeur</a>
                            <a href="<?=WEB_URL?>/classe" class="list-group-item list-group-item-action position">Classe</a>
                            <a href="<?=WEB_URL?>/module" class="list-group-item list-group-item-action position">Module</a>
                            <a href="<?=WEB_URL?>/users" class="list-group-item list-group-item-action position">Utilisateurs</a>
                   </div>


                  </div>
        </div>
        <div class="content  ">
            <div class="header shadow   ">
                <ul class="nav justify-content-end bg-info">
                    <li class="nav-item ">
                        <a class="nav-link text-dark fs-6" href="<?=WEB_URL?>/cours">COURS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-6" href="<?=WEB_URL?>/inscription">INSCRIPTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-6" href="<?=WEB_URL?>/classe">CLASSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-6" href="#">MODULES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fs-6" href="<?=WEB_URL?>/professeur">PROFESSEURS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fs-6" href="<?=WEB_URL?>/logout">Deconnexion</a>
                    </li>
                </ul>
            </div>
            <div class="middle  d-flex justify-content-center">
            
                 <?=$content_for_views?>  
                      
            </div>
        </div>
    </div>
   
<?php    require_once(ROOT."views/partials/footer.html.php"); ?>