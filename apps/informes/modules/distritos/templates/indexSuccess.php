<h1>Distritos List</h1>

<table>
  <thead>
    <tr>
      <th>Distrito</th>
      <th>Zona</th>
      <th>Agencia Informativa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($distritos as $distrito): ?>
    <tr>
      <td><a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>"><?php echo $distrito->getDistrito() ?></a></td>
      <td><?php echo $distrito->getAims()->getSigla() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
