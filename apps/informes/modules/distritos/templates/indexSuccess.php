<h1>Distritoss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Distrito</th>
      <th>Gd</th>
      <th>Rdr</th>
      <th>Rdi</th>
      <th>Aim</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($distritoss as $distritos): ?>
    <tr>
      <td><a href="<?php echo url_for('distritos/show?id='.$distritos->getId()) ?>"><?php echo $distritos->getId() ?></a></td>
      <td><?php echo $distritos->getDistrito() ?></td>
      <td><?php echo $distritos->getGdId() ?></td>
      <td><?php echo $distritos->getRdrId() ?></td>
      <td><?php echo $distritos->getRdiId() ?></td>
      <td><?php echo $distritos->getAimId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('distritos/new') ?>">New</a>
