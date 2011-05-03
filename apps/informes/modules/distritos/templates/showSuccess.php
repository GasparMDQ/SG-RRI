<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $distritos->getId() ?></td>
    </tr>
    <tr>
      <th>Distrito:</th>
      <td><?php echo $distritos->getDistrito() ?></td>
    </tr>
    <tr>
      <th>Gd:</th>
      <td><?php echo $distritos->getGdId() ?></td>
    </tr>
    <tr>
      <th>Rdr:</th>
      <td><?php echo $distritos->getRdrId() ?></td>
    </tr>
    <tr>
      <th>Rdi:</th>
      <td><?php echo $distritos->getRdiId() ?></td>
    </tr>
    <tr>
      <th>Aim:</th>
      <td><?php echo $distritos->getAimId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('distritos/edit?id='.$distritos->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('distritos/index') ?>">List</a>
