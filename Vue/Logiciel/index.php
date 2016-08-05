<?php $this->setTitre("Logiciels"); ?>

  <p>Liste des logiciels</p>

  <a href="logiciel/add/" class="btn btn-default">Ajouter Logiciel</a>
  <a href="categorie/add/" class="btn btn-default">Ajouter Catégorie</a>
  <br>
  <br>
  <table class="table">
    <tr>
      <th>id</th>
      <th>date</th>
      <th>nom</th>
      <th>description</th>
      <th>catégories</th>

    </tr>
    <tr>
      <?php foreach ($logiciels as $value) : ?>
        <td>
          <?= $value->getId() ?>
        </td>
        <td>
          <?= $value->getDate() ?>
        </td>
        <td>
          <?= $value->getNom() ?>
        </td>
        <td>
          <?= $value->getDescription() ?>
        </td>
        <td>
          <?php foreach ($value->getIdCategorie() as $cat) : ?>
            <?php foreach ($categories->{'categories'}->{'categorie'} as $value2) : ?>
              <?php if($cat == $value2->{'id'}) : ?>
                <span class="label label-primary"><?= $value2->{'nom'} ?></span>
                <?php endif ?>
                  <?php endforeach ?>
                    <?php endforeach ?>
        </td>
    </tr>
    <tr>
      <?php endforeach ?>
    </tr>
  </table>