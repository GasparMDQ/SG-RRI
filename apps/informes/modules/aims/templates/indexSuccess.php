<h1>Aimss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Aim</th>
      <th>Sigla</th>
      <th>Presidente</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($aimss as $aims): ?>
    <tr>
      <td><a href="<?php echo url_for('aims/show?id='.$aims->getId()) ?>"><?php echo $aims->getId() ?></a></td>
      <td><?php echo $aims->getAim() ?></td>
      <td><?php echo $aims->getSigla() ?></td>
      <td><?php echo $aims->getPresidenteId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('aims/new') ?>">New</a>
