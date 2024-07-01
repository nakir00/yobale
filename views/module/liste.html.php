<div class="card border-light mb-3 w-75 shadow" >
    <div class="card-header border-secondry bg-header text-center" id="liste">
    Listes des Modules</div>
        <div class="card-body" id="listeb">
            <div class="row d-flex justify-content-end">
                <div class="col-2 mb-2">
                    <a name="" id="" class="btn btn-info" href="<?=WEB_URL?>/module-add" role="button">Nouveau</a>
                </div>
            </div>
           <table class="table table-bordered ">
               <thead>
                   <tr>
                        <th>Libelle</th>
                        <th>Nom du Module</th>
                        <th>Duree du Module</th>
                        <th>Actions</th>
                   </tr>
               </thead>
               <tbody >
               <?php foreach($modules as $value): ?>
            
                   <tr>
                   <td  style="width:20%"><?=$value->getLibelle()?></td>
                   <td  style="width:20%"><?=$value->getNomModule()?></td>
                   <td  style="width:20%"><?=$value->getDuree()?>H</td>
                        <td style="width:40%">
                            <a name="" id="" class="btn btn-outline-success text-dark btn-xs" href="#" role="button">Cours</a>
                            <a name="" id="" class="btn btn-outline-warning text-dark btn-xs" href="#" role="button">Modifier</a>
                            <a name="" id="" class="btn btn-outline-danger text-dark btn-xs" href="#" role="button">Supprimer</a>
                        </td>
                   </tr>
                <?php endforeach ?>
               </tbody>
           </table>

        </div>
</div>