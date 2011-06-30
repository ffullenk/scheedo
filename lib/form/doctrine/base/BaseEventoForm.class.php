<?php

/**
 * Evento form base class.
 *
 * @method Evento getObject() Returns the current form's model object
 *
 * @package    scheedo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'categoria_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'fecha_inicio'  => new sfWidgetFormDateTime(),
      'fecha_termino' => new sfWidgetFormDateTime(),
      'lugar'         => new sfWidgetFormInputText(),
      'logo'          => new sfWidgetFormTextarea(),
      'telefono'      => new sfWidgetFormInputText(),
      'mail'          => new sfWidgetFormInputText(),
      'twitter'       => new sfWidgetFormInputText(),
      'facebook'      => new sfWidgetFormInputText(),
      'web1'          => new sfWidgetFormInputText(),
      'ranking'       => new sfWidgetFormInputText(),
      'descripcion'   => new sfWidgetFormTextarea(),
      'is_active'     => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'categoria_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'required' => false)),
      'fecha_inicio'  => new sfValidatorDateTime(array('required' => false)),
      'fecha_termino' => new sfValidatorDateTime(array('required' => false)),
      'lugar'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'logo'          => new sfValidatorString(array('required' => false)),
      'telefono'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mail'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'twitter'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'facebook'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'web1'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'ranking'       => new sfValidatorInteger(array('required' => false)),
      'descripcion'   => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'is_active'     => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evento';
  }

}
