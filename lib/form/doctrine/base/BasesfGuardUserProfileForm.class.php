<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage form
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'apodo'            => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'tipo_dni'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tipodni'), 'add_empty' => true)),
      'nro_dni'          => new sfWidgetFormInputText(),
      'ocupacion'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ocupacion'), 'add_empty' => true)),
      'rfid'             => new sfWidgetFormInputText(),
      'direccion'        => new sfWidgetFormInputText(),
      'barrio'           => new sfWidgetFormInputText(),
      'ciudad'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'apodo'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'tipo_dni'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('tipodni'), 'required' => false)),
      'nro_dni'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ocupacion'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ocupacion'), 'required' => false)),
      'rfid'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'barrio'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ciudad'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'sfGuardUserProfile', 'column' => array('rfid')))
    );

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

}
