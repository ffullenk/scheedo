<?php
/**
* RegisterForm maneja los widget y validacion del formulario de registro de 
* eventos
*
* @author  ffullenk 
* @version 1.0 2011-06-12 18:45
*/
class EditUserProfileForm extends sfGuardUserProfileForm
{

  public function configure()
  {
    //estos campos no se ocuparan en el registro de eventos
    unset(
      
      $this['user_id'],
      $this['token'],
      $this['updated_at'],
      $this['created_at'],
      $this['puntuacion']

    );

	$this->setWidgets(array(
      
      'first_name'        => new sfWidgetFormInputText(),
      'last_name'  => new sfWidgetFormInputText(),
      
      'address'         => new sfWidgetFormInputText(),
      'foto'          => new sfWidgetFormInputFile(),
      'ubicacion'      => new sfWidgetFormInputText()
      ));
	
	
	
	
	
	
    $this->widgetSchema->setNameFormat('User[%s]');
  }
}

