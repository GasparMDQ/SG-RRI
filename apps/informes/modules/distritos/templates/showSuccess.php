<?php //use_stylesheet('jobs.css') ?>
 
<?php slot('title', sprintf('Distrito %s', $distrito->getDistrito())) ?>
 
 <div class="distrito">
  <h1>Distrito <?php echo $distrito ?></h1>
</div>


<div class="distrito_desc">
    <h2>Autoridades Distritales</h2>

    <table class="autoridades">
        <tr>
        <td class="gd">
            Gobernador: <?php echo $distrito->getGobernador()->getFirstName() ?>
        </td>
        </tr>
        <tr>
        <td class="rdr">
            Representante Distrital de Rotaract: <?php echo $distrito->getRepresentanteR()->getFirstName() ?>
        </td>
        </tr>
        <tr>
        <td class="rdi">
            Representante Distrital de Interact: <?php echo $distrito->getRepresentanteI()->getFirstName() ?>
        </td>
        </tr>
        <tr>
        <td class="zona">
            Zona:
        </td>
        </tr>
        <tr>
        <td class="aim">
            Agencia Informativa: <?php echo $distrito->getAims()->getSigla() ?>
        </td>
        </tr>
    </table>    
    
</div>

<?php include_partial('distritos/list', array('clubes' => $pager->getResults())) ?>

<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
    <a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>?page=1">
      <img src="/images/first.png" alt="First page" title="First page" />
    </a>
 
    <a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>?page=<?php echo $pager->getPreviousPage() ?>">
      <img src="/images/previous.png" alt="Previous page" title="Previous page" />
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>?page=<?php echo $pager->getNextPage() ?>">
      <img src="/images/next.png" alt="Next page" title="Next page" />
    </a>
 
    <a href="<?php echo url_for('distritos/show?id='.$distrito->getId()) ?>?page=<?php echo $pager->getLastPage() ?>">
      <img src="/images/last.png" alt="Last page" title="Last page" />
    </a>
  </div>
<?php endif; ?>
 
<div class="pagination_desc">
  <strong><?php echo count($pager) ?></strong> clubes en el distrito
 
  <?php if ($pager->haveToPaginate()): ?>
    - p&aacute;gina <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
</div>

<a href="<?php echo url_for('distritos/index') ?>">List</a>
