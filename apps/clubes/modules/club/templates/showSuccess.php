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
      <td><?php echo $clubes->getPrograma() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('club/edit?id='.$clubes->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('club/index') ?>">List</a>
