<?php
 /*
  * =========================== Table Html =========
    Date    Type   Motif    Eta
    ====  
    ====
    ==== 
  */
  require_once("/Users/MarietouFALL/Downloads/PROJET PHP/repository/demande_repository.php")
?>
    <link rel="stylesheet" href="<?=WEBROOT?>/css/demande.css">
    <div class="filtre">
        <label>Etat</label>
        <input list="etats">
        <datalist id="etats">
            <option value="En cours"></option>
            <option value="Acceptée"></option>
            <option value="Refusée"></option>
        </datalist>
        <button type="button">OK</button>
    </div>
    <div>
        <a href="<?=WEBROOT?>?page=add" class="ajouter">
            <p>
                Nouvelle Demande
            </p>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Etat</th>
                <th>Détails</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tableau as $demande):?>
            <tr>
                <td><?=$demande['date']?></td>
                <td><?=$demande['type']?></td>
                <td><?=$demande['etat']?></td>
                <td><a href="<?=WEBROOT?>?page=detail" class="details">Plus...</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>