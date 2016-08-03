<?php $this->setTitre("Categories"); ?>

  <p>Liste des categories</p>

  <table class="table">
    <tr>
      <th>id</th>
      <th>nom</th>
      <th>description</th>

    </tr>
    <tr>
      <?php foreach ($categories->{'categories'}->{'categorie'} as $value) : ?>
        <td>
          <?= $value->{'id'} ?>
        </td>
        <td>
          <?= $value->{'nom'} ?>
        </td>
        <td>
          <?= $value->{'description'} ?>
        </td>
    </tr>
    <tr>
      <?php endforeach ?>
    </tr>
  </table>