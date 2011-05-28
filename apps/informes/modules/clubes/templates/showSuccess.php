<?php slot('path') ?>
    <li>
    <a href="<?php echo url_for('home/index') ?>">Inicio</a>
    </li>
    <li>|
    <a href="<?php echo url_for('distritos/index') ?>">Distritos</a>
    </li>
    <li>|
    <a href="<?php echo url_for('distritos/show?id='.$clubes->getDistritoId()) ?>"><?php echo $clubes->getDistritos()->getDistrito() ?></a>
    </li>
    <li class="last">|
    <?php echo $clubes->getClub() ?>
    </li>
<?php end_slot(); ?>


<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $clubes->getId() ?></td>
    </tr>
    <tr>
      <th>Club:</th>
      <td><?php echo $clubes->getClub() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $clubes->getEmail() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $clubes->getUrl() ?></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><?php echo $clubes->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Presidente:</th>
      <td><?php echo $clubes->getPresidenteId() ?></td>
    </tr>
    <tr>
      <th>Ciudad:</th>
      <td><?php echo $clubes->getCiudadId() ?></td>
    </tr>
    <tr>
      <th>Distrito:</th>
      <td><?php echo $clubes->getDistritoId() ?></td>
    </tr>
    <tr>
      <th>Programa:</th>
      <td><?php echo $clubes->getProgramaId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('clubes/edit?id='.$clubes->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('clubes/index') ?>">List</a>
