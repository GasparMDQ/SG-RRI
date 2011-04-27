<h1>Listado de Clubes</h1>

<table>
  <thead>
    <tr>
      <th>Nombre del Club</th>
      <th>Correo Electronico</th>
      <th>Direccion web</th>
      <th>Ciudad</th>
      <th>Distrito</th>
      <th>Programa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clubess as $clubes): ?>
    <tr>
      <td><a href="<?php echo url_for('club/show?id='.$clubes->getId()) ?>"><?php echo $clubes->getClub() ?></a></td>
      <td><?php echo $clubes->getEmail() ?></td>
      <td><?php echo $clubes->getUrl() ?></td>
      <td><?php echo $clubes->getCiudadId() ?></td>
      <td><?php echo $clubes->getDistritoId() ?></td>
      <td><?php echo $clubes->getPrograma() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!--  <a href="<?php // echo url_for('club/new') ?>">New</a> -->
