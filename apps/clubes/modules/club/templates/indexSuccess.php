<h1>Clubess List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Club</th>
      <th>Email</th>
      <th>Url</th>
      <th>Direccion</th>
      <th>Presidente</th>
      <th>Ciudad</th>
      <th>Distrito</th>
      <th>Programa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clubess as $clubes): ?>
    <tr>
      <td><a href="<?php echo url_for('club/show?id='.$clubes->getId()) ?>"><?php echo $clubes->getId() ?></a></td>
      <td><?php echo $clubes->getClub() ?></td>
      <td><?php echo $clubes->getEmail() ?></td>
      <td><?php echo $clubes->getUrl() ?></td>
      <td><?php echo $clubes->getDireccion() ?></td>
      <td><?php echo $clubes->getPresidenteId() ?></td>
      <td><?php echo $clubes->getCiudadId() ?></td>
      <td><?php echo $clubes->getDistritoId() ?></td>
      <td><?php echo $clubes->getPrograma() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('club/new') ?>">New</a>
