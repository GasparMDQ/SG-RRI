<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
<?php if ($sf_user->isAuthenticated()): ?>
      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Home', 'homepage') ?>
          </li>
          <li>
            <?php echo link_to('Paises', 'cfg_paises') ?>
          </li>
          <li>
            <?php echo link_to('Provincias', 'cfg_provincias') ?>
          </li>
          <li>
            <?php echo link_to('Ciudades', 'cfg_ciudades') ?>
          </li>
          <li>
            <?php echo link_to('Programas', 'cfg_programas') ?>
          </li>
          <li>
            <?php echo link_to('Aims', 'aims') ?>
          </li>
          <li>
            <?php echo link_to('Distritos', 'distritos') ?>
          </li>
          <li>
            <?php echo link_to('Clubes', 'clubes') ?>
          </li>
          <li>
            <?php echo link_to('Dias', 'cfg_dias') ?>
          </li>
		  <li>
			<?php echo link_to('Usuarios', 'sf_guard_user') ?>
		  </li>
		  <li>
		    <?php echo link_to('Logout', 'sf_guard_signout') ?>
		  </li>
		  </ul>
      </div>
 <?php endif ?>
 
      <div id="content">
        <?php echo $sf_content ?>
      </div>
  </body>
</html>
