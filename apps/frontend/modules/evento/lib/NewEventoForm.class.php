<?php
/**
* RegisterForm maneja los widget y validacion del formulario de registro de 
* eventos
*
* @author  ffullenk 
* @version 1.0 2011-06-12 18:45
*/
class NewEventoForm extends EventoForm
{

  public function configure()
  {
    //estos campos no se ocuparan en el registro de eventos
    unset(
      $this['is_active'],
      $this['user_id'],
      $this['groups_list'],
      $this['updated_at'],
      $this['created_at'],
      $this['is_active'],
      $this['ranking']

    );

	$this->setWidgets(array(
      
      'nombre'        => new sfWidgetFormInputText(),
      'categoria_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'fecha_inicio'  => new sfWidgetFormDateTime(),
      'fecha_termino' => new sfWidgetFormDateTime(),
      'lugar'         => new sfWidgetFormInputText(),
      'logo'          => new sfWidgetFormInputFile(),
      'telefono'      => new sfWidgetFormInputText(),
      'mail'          => new sfWidgetFormInputText(),
      'twitter'       => new sfWidgetFormInputText(),
      'facebook'      => new sfWidgetFormInputText(),
      'web1'           => new sfWidgetFormInputText(),
	  'descripcion'   => new sfWidgetFormTextarea(),
      ));
	
	
	
	
	
	
    $this->widgetSchema->setNameFormat('evento[%s]');
  }
}

