<div class="card border-light my-3 w-75 shadow " style="height:100%">
    <div class="card-header bg-transparent border-light bg-header">Nouveau professeur</div>
    <form action="<?=WEB_URL?>/etudiant-add" method="post">
       <div class="card-body ">
       <div class="mb-3">
                  <label for="" class="form-label">Nom</label>
                  <input type="text" class="form-control <?=isset($errors['nomComplet'])?"is-invalid":""  ?> " 
                  name="nomComplet" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback "><?=$errors['nomComplet']?></small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Matricule</label>
                  <input type="text" class="form-control <?=isset($errors['matricule'])?"is-invalid":""  ?> " 
                  name="matricule" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['matricule']?></small>
                </div>

                 <div class="mb-3">
                 <label for="" class="form-label">Sexe</label>
                  <input type="duree" class="form-control <?=isset($errors['sexe'])?"is-invalid":""  ?> " 
                  name="sexe" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['sexe']?></small>
                </div>
                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Login</label>
                      <input name="login" type="text" class="form-control <?=isset($errors['login'])?"is-invalid":""  ?> " id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="" class="form-text invalid-feedback"><?=$errors['login']?></div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control <?=isset($errors['password'])?"is-invalid":""  ?> " id="exampleInputPassword1">
                      <div id="" class="form-text invalid-feedback"><?=$errors['password']?></div>
                    </div>


                <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
          </form>
       </div>
    </div>
</div>