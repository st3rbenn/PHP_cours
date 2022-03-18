<form action="form.php" method="post">
        <div class="form-group mb-3 ">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="profession" class="form-label">Profession</label>
            <select name="profession" id="profession" class="form-select">
                <option value="roi">Roi</option>
                <option value="reine">Reine</option>
                <option value="druide">Druide</option>
                <option value="chevalier">Chevalier</option>
            </select>
        </div>

        <div class="form-group mb-3 form-label">
            <label for="pv">Points de vie</label>
            <input type="number" name="pv" id="pv" class="form-control">
        </div>

        <div class="form-group mb-3 form-label">
            <label for="atk">Points d'attaque</label>
            <input type="number" name="atk" id="atk" class="form-control">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="submit" value="Valider" class="btn btn-success">
        </div>
</form>