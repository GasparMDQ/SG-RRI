<?php slot('path') ?>
    <li>
    <a href="<?php echo url_for('home/index') ?>">Inicio</a>
    </li>
    <li class="last">|
    <a href="">Distritos</a>
    </li>
<?php end_slot(); ?>

<h1>Listado de Distritos</h1>

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
      <td class="distrito"><a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>"><?php echo $distrito->getDistrito() ?></a></td>
      <td class="zona"><?php echo $distrito->getZones()->getZone() ?></td>
      <td class="aim"><?php echo $distrito->getAims()->getSigla() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
