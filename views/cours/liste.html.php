<div class="card border-light my-3 w-75 shadow   " >
  <div class="card-header bg-transparent border-light bg-header">Liste des Cours</div>
    <div class="card-body ">
          <div class="row d-flex justify-content-end">
              <div class="col-2 mb-1 ">
                  <a name="" id="" class="btn btn-outline-info text-dark btn-xs" href="<?=WEB_URL?>/cours-add" role="button">Nouveau</a>
              </div>
          </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date Cours</th>
                    <th>Heure Debut</th>
                    <th>Heure Fin</th>
                </tr>
            </thead>
            <tbody >
               <?php foreach($cours as $value): ?>
            
                   <tr>
                   <td  style="width:20%"><?=$value->getDateCours()?></td>
                   <td  style="width:20%"><?=$value->getHeureDebut()?></td>
                   <td  style="width:20%"><?=$value->getHeureFin()?>H</td>
                        <td style="width:40%">
                            <a name="" id="" class="btn btn-outline-success text-dark btn-xs" href="#" role="button">Module</a>
                            <a name="" id="" class="btn btn-outline-warning text-dark btn-xs" href="#" role="button">Modifier</a>
                            <a name="" id="" class="btn btn-outline-danger text-dark btn-xs" href="#" role="button">Supprimer</a>
                        </td>
                   </tr>
                <?php endforeach ?>
               </tbody>
           </table>

        </div>
</div>