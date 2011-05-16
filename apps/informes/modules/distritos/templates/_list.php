<table class="clubes">
  <?php foreach ($clubes as $i => $club): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td class="programa">
        <img src="/images/logos/<?php echo $club->getCfgProgramas()->getLogo()?>.png" alt="<?php echo $club->getCfgProgramas()->getPrograma() ?>" title="<?php echo $club->getCfgProgramas()->getPrograma() ?>" />        
      </td>
      <td class="club">
        <a href="<?php echo url_for('clubes/show?id='.$club->getId()) ?>"><?php echo $club->getClub() ?></a>
      </td>
      <td class="ciudad">
        <?php echo $club->getCfgCiudades()->getCiudad() ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>