<link rel="stylesheet" href="<?=WEBROOT?>/css/style.css">
<div class="champ">
    <h1>Nouvelle demande</h1>
    <div class="filtre">
        <label>Type: </label>
        <input list="types">
        <datalist id="types">
            <option value="Suspension"></option>
            <option value="Annulation"></option>
        </datalist>
    </div>
    <div class="texte">
        <label for="Motif">Motif</label>
        <textarea name="Motif" id="" cols="20" rows="20"></textarea>
    </div>
    <div>
        <a href="<?=WEBROOT?>?page=liste" class="ajouter">
            <p>
                Envoyer
            </p>
        </a>
        <a href="<?=WEBROOT?>?page=liste" class="annuler">
            <p>
                Annuler
            </p>
        </a>
    </div>
</div>
