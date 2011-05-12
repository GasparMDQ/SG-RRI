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
    <div id="container">
        <div id="sub_header">
<?php if ($sf_user->isAuthenticated()): ?>
      <div class="menu">
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
			<?php echo link_to('Grupos', 'sf_guard_group') ?>
		  </li>
		  <li>
			<?php echo link_to('Permisos', 'sf_guard_permission') ?>
		  </li>
		  </ul>
      </div>
 <?php endif ?>
 
        <div class="acceso">
<?php if ($sf_user->isAuthenticated()): ?>
<!-- usuario logueado y admin -->
                <ul>
                    <li><strong><?php echo $sf_user->getGuardUser()->getEmailAddress() ?></strong></li>
                    <li><a href="<?php echo url_for('informes/eventos') ?>">Volver</a></li>
                    <li><a href="<?php echo url_for('informes/eventos') ?>">Perfil</a></li>
                    <li class="last"><?php echo link_to('Salir', 'sf_guard_signout') ?></li>
                </ul>
<?php else: ?>
<!-- default -->
                <ul>
                    <li><a href="<?php echo url_for('informes/eventos') ?>">Ingresar</a></li>
                    <li class="last"><a href="<?php echo url_for('/index.php/registracion/index') ?>">Registrarse</a></li>
                </ul>
<?php endif ?>
            </div>
        </div>

        <div id="header">
            <div class="content">
                <h1><a href="<?php echo url_for('@homepage') ?>">
                <img src="/images/header_admin.png" alt="Sistema de Gestion - Rotaract Rotary e Interact" />
                </a></h1>
            </div>
        </div>

        <div id="content">
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
 
        <div class="content">
          <?php echo $sf_content ?>
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <ul>
            <li><a href="<?php echo url_for('ayuda/index') ?>">Ayuda</a></li>
            <li class="last"><a href="<?php echo url_for('contacto/index') ?>">Contactanos</a></li>
          </ul><br />
          <span class="copy">&copy; 2011 Todos los derechos reservados</span><br />
          <span class="host">WebHosting cedido gentileza de Brokers Interactive, con presencia en <a href="http://www.mexico.com.mx" target="_blank">Mexico</a>, <a href="http://www.buenosaires.com.ar" target="_blank">Argentina</a> y <a href="http://www.santiagodechile.com" target="_blank">Chile</a>.</span>
        </div>
      </div>
    </div>      
  </body>
</html>
