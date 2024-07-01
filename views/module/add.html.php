<div class="card border-light mb-3 w-75 shadow" >
    <div class="card-header border-secondary bg-header text-center " id="liste">Nouveau Module</div>
       <div class="card-body" id="listeb">
          <form action="<?=WEB_URL?>/module-add" method="post" class="form">

                <div class="mb-3">
                  <label for="" class="form-label">Libelle</label>
                  <input type="text" class="form-control <?=isset($errors['libelle'])?"is-invalid":""  ?> " 
                  name="libelle" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback "><?=$errors['libelle']?></small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Nom du Module</label>
                  <input type="text" class="form-control <?=isset($errors['nomModule'])?"is-invalid":""  ?> " 
                  name="nomModule" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['nomModule']?></small>
                </div>

                 <div class="mb-3">
                 <label for="" class="form-label">Durée du Module</label>
                  <input type="duree" class="form-control <?=isset($errors['duree'])?"is-invalid":""  ?> " 
                  name="duree" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['duree']?></small>
                </div>

                <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
          </form>
       </div>
    </div>
</div>