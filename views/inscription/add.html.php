<div class="card border-light my-3 w-75 shadow   " style="height:80%" >
  <div class="card-header bg-transparent border-light bg-header">Nouvelle inscription</div>
    <div class="card-body ">
          
     <form action="<?=WEB_URL?>/inscription-add" method="post">
           <div class="mb-3">
           <label for="" class="form-label ">Date d'inscription</label>
           <input type="Date" class="form-control <?=isset($errors['dateInscription'])?"is-invalid":""  ?>" name="dateInscription" id="" aria-describedby="helpId" placeholder="">
           <small id="" class="form-text invalid-feedback"><?=$errors['dateInscription']?></small>
         </div>
         <div class="mb-3">
           <label for="" class="form-label">annee d'etude</label>
           <select class="form-control <?=isset($errors['annee'])?"is-invalid":""  ?>" name="annee" id="">
            <?php foreach ($annee as  $value):  ?>
                    <option value="<?=$value?>" ><?=$value?></option>
            <?php endforeach ?>    
           </select>
           <small id="" class="form-text invalid-feedback"><?=$errors['annee']?></small>
         </div>


         <div class="mb-3">
           <label for="" class="form-label">Classe</label>
           <select class="form-control  <?=isset($errors['classe'])?"is-invalid":""  ?>" name="classe" id="">
                <?php foreach ($classe as  $value):  ?>
                            <option value="<?=$value->getId()?>" ><?=$value->getLibelle()?></option>
                <?php endforeach ?>
           </select>
             <small id="" class="form-text invalid-feedback"><?=$errors['classe']?></small>
         </div>         

         <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
     </form>
        
                       
    </div>
                   
</div>