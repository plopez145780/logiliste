<?php
$this->setTitre("Accueil");
?>

  <p>Accueil du site - liste des logiciels</p>

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