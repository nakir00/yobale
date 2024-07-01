        <div class="w-max h-max flex-row justify-between  bg-main">
          <div class="w-32 h-24 ml-10 m-10"></div>
          <div class="flex-column h-full justify-center">
            <div class="w-64 h-auto bg-white-pur p-30 radius-10  ">
              <form method="post" action="<?=WEB_URL?>/sign-in" class="flex-column justify-between items-center size-full">
                <span class="text-xl font-bold">Formulaire d'inscription</span>
                <?php if(isset($error)): ?>
                  <div class="text-primary" role="alert">
                    <strong><?=$error?></strong>
                  </div>
                <?php endif ?>
                <div class="field ">
                  <label for="prenom"><span class="label-style">prenom</span></label>
                  <input id="prenom" class="" title="prenom" placeholder="prenom" type="text" name="prenom"  />
                  <small class="color-primary">
                    <?php if(isset($errors)): ?>
                      <?php if(array_key_exists('prenom', $errors)):?>
                        <?= $errors['prenom']?> 
                      <?php endif ?> 
                    <?php endif ?>
                  </small>  
                </div>
                <div class="field ">
                  <label for="nom"><span class="label-style">nom</span></label>
                  <input id="nom" class="" title="nom" placeholder="nom" type="text" name="nom"  />
                  <small class="color-primary">
                    <?php if(isset($errors)): ?>
                      <?php if(array_key_exists('nom', $errors)):?>
                        <?= $errors['nom']?> 
                      <?php endif ?> 
                    <?php endif ?>
                  </small>  
                </div>
                <div class="field ">
                  <label for="login"><span class="label-style">login</span></label>
                  <input id="login" class="" title="login" placeholder="login" type="text" name="login"  />
                  <small class="color-primary">
                    <?php if(isset($errors)): ?>
                      <?php if(array_key_exists('login', $errors['login'])):?>
                        <?= $errors['login']?> 
                      <?php endif ?> 
                    <?php endif ?>
                  </small>  
                </div>
                <div class="field ">
                  <label for="password"><span class="label-style">password</span></label>
                  <input id="password" class="" title="password" placeholder="password" type="password" name="password"  />
                  <small class="color-primary">
                    <?php if(isset($errors)): ?>
                      <?php if(array_key_exists('password', $errors['password'])):?>
                        <?= $errors['password']?> 
                      <?php endif ?> 
                    <?php endif ?>
                  </small>  
                </div>
                <button type="submit" class="w-full bg-main radius-round h-8 text-white">S'inscrire</button>
              </form>
            </div>
          </div>
          <div class="w-32 p-4 h-12 bg-white-pur m-10 radius-10 flex-row justify-center items-center">
            <a href="<?=WEB_URL?>" class=" radius-round h-8 text-main text-xl">Se connecter</a>
          </div>
        </div>