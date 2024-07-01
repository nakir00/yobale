<div class="card border-light my-3 w-75 shadow   " style="height:90%" >
  <div class="card-header bg-transparent border-light bg-header">Nouveau professeur</div>
    <div class="card-body ">
          
     <form action="<?=WEB_URL?>/professeur-add" method="post">
         <div class="mb-3">
           <label for="" class="form-label">Nom Complet</label>
           <select class="form-control"is-invalid>    
           </select>
           <small id="" class="form-text invalid-feedback"></small>
         </div>

         <div class="mb-3">
           <label for="" class="form-label">Grade</label>
           <select class="form-control  "is-invalid>
           </select>
             <small id="" class="form-text invalid-feedback"></small>
         </div>
         <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Login</label>
                      <input name="login" type="text" class="form-control  <?=isset($errors['login'])?"is-invalid":""  ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="" class="form-text invalid-feedback"><?=$errors['login']?></div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control " id="exampleInputPassword1">
                      <div id="" class="form-text invalid-feedback"><?=$errors['password']?></div>
                    </div>
                   
         <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
     </form>
        
                       
    </div>
                   
</div>