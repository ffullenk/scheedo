<?php
/**
* RegisterForm maneja los widget y validacion del formulario de registro de 
* usuarios
*
* @author  dacuna <diego.desu@gmail.com>
* @version 1.0 2011-06-12 18:45
*/
class RegisterForm extends sfGuardUserForm
{
  /**
  * Inicializa el formulario de registro de un usuario basado en el formulario
  * de un sfGuardUser proveniente de sfDoctrineGuard plugin
  *
  */
  public function configure()
  {
    //estos campos no se ocuparan en el registro de usuarios
    unset(
      $this['is_active'],
      $this['is_super_admin'],
      $this['updated_at'],
      $this['groups_list'],
      $this['permissions_list'],
      $this['last_login'],
      $this['created_at'],
      $this['salt'],
      $this['algorithm'],
	  $this['facebook_uid'],
	  $this['twitter_uid']
    );

    //se cambia el formato de los input del formulario, a uno mas semantico
    $this->widgetSchema->setNameFormat('signup[%s]');

    //validaciones para los campos del formulario:
    //validacion para el username, recordar que este sera el email del usuario:
    $this->validatorSchema['username'] = new sfValidatorEmail(array(), array(
   							'required' => 'Debes ingresar un email',
							'invalid' => 'Por favor, debes ingresar una direccion de email valida'
							));
    
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password']->setOption('required', true);
    $this->widgetSchema['password_confirmation'] = new sfWidgetFormInputPassword();
    $this->validatorSchema['password_confirmation'] = clone $this->validatorSchema['password'];

    $this->widgetSchema->moveField('password_confirmation', 'after', 'password');
    $this->mergePostValidator(new sfValidatorSchemaCompare('password',
                                    sfValidatorSchemaCompare::EQUAL, 'password_confirmation',
				    array(),
				    array('invalid' => 'Las dos password deben ser iguales.')
			     ));
  }
}

