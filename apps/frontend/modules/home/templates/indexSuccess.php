<?php if (!$sf_user->isAuthenticated()): ?>
<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)); 
      echo link_to('Registrar', 'user/register');
endif ?>
<?php if ($sf_user->isAuthenticated()): ?>
Hola <?php echo $sf_user->getProfile()->getFirstName() ?>
<br>
<?php echo link_to('Eventos','evento/index') ?>
<br>
<?php echo link_to('Editar Perfil','user/edit') ?>
<?php endif ?>