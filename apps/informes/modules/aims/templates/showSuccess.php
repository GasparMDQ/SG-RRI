<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $aims->getId() ?></td>
    </tr>
    <tr>
      <th>Aim:</th>
      <td><?php echo $aims->getAim() ?></td>
    </tr>
    <tr>
      <th>Sigla:</th>
      <td><?php echo $aims->getSigla() ?></td>
    </tr>
    <tr>
      <th>Presidente:</th>
      <td><?php echo $aims->getPresidenteId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('aims/edit?id='.$aims->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('aims/index') ?>">List</a>
