<?php $this->setTitre("Ajout de logiciel"); ?>

  <form method="POST" action="">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" required="" name="nom">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" name="description">
    </div>
      <div class="form-group">
      <label for="site">Site</label>
      <input type="text" class="form-control" name="site">
    </div>
    <div class="form-group">
      <label for="categorie">Categorie</label>
      <input class="form-control" name="categorie">
    </div>
    <button type="submit" class="btn btn-default">Valider</button>
  </form>