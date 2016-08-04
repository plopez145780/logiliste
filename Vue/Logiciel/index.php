<?php $this->setTitre("Logiciels"); ?>

  <p>Liste des logiciels</p>

  <a href="/logiliste/index.php?action=ajout_logiciel" class="btn btn-default">Ajouter</a>

  <table class="table">
    <tr>
      <th>id</th>
      <th>date</th>
      <th>nom</th>
      <th>description</th>
      <th>catégories</th>

    </tr>
    <tr>
      <?php foreach ($logiciels->{'logitheque'}->{'logiciel'} as $value) : ?>
        <td>
          <?= $value->{'id'} ?>
        </td>
        <td>
          <?= $value->{'date'} ?>
        </td>
        <td>
          <?= $value->{'nom'} ?>
        </td>
        <td>
          <?= $value->{'description'} ?>
        </td>
        <td>
          <?php foreach ($value->{'categorie'} as $cat) : ?>
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