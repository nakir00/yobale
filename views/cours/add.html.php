<div class="card border-light mb-3 w-75 shadow" >
    <div class="card-header border-secondary bg-header text-center " id="liste">Nouveau cours</div>
       <div class="card-body" id="listeb">
          <form action="<?=WEB_URL?>/cours-add" method="post" class="form">

                <div class="mb-3">
                  <label for="" class="form-label">Date cours</label>
                  <input type="text" class="form-control <?=isset($errors['dateCours'])?"is-invalid":""  ?> " 
                  name="dateCours" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback "><?=$errors['dateCours']?></small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Heure Debut</label>
                  <input type="text" class="form-control <?=isset($errors['heureDebut'])?"is-invalid":""  ?> " 
                  name="heureDebut" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['heureDebut']?></small>
                </div>

                 <div class="mb-3">
                 <label for="" class="form-label">Durée du Module</label>
                  <input type="text" class="form-control <?=isset($errors['heureFin'])?"is-invalid":""  ?> " 
                  name="heureFin" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text invalid-feedback"><?=$errors['heureFin']?></small>
                </div>

                <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
          </form>
       </div>
    </div>
</div>