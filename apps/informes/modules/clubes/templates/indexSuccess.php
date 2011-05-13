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
      <td><a href="<?php echo url_for('clubes/show?id='.$clubes->getId()) ?>"><?php echo $clubes->getClub() ?></a></td>
      <td><?php echo $clubes->getEmail() ?></td>
      <td><?php echo $clubes->getUrl() ?></td>
      <td><?php echo $clubes->getCfgCiudades()->getCiudad() ?></td>
      <td><?php echo $clubes->getDistritos()->getDistrito() ?></td>
      <td><?php echo $clubes->getCfgProgramas()->getPrograma() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!--  <a href="<?php // echo url_for('clubes/new') ?>">New</a> -->
