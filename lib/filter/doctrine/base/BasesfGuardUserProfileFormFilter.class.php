<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'apodo'            => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipo_dni'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('tipodni'), 'add_empty' => true)),
      'nro_dni'          => new sfWidgetFormFilterInput(),
      'ocupacion'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ocupacion'), 'add_empty' => true)),
      'rfid'             => new sfWidgetFormFilterInput(),
      'direccion'        => new sfWidgetFormFilterInput(),
      'barrio'           => new sfWidgetFormFilterInput(),
      'ciudad'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ciudad'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'apodo'            => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tipo_dni'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('tipodni'), 'column' => 'id')),
      'nro_dni'          => new sfValidatorPass(array('required' => false)),
      'ocupacion'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ocupacion'), 'column' => 'id')),
      'rfid'             => new sfValidatorPass(array('required' => false)),
      'direccion'        => new sfValidatorPass(array('required' => false)),
      'barrio'           => new sfValidatorPass(array('required' => false)),
      'ciudad'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ciudad'), 'column' => 'id')),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'user_id'          => 'ForeignKey',
      'apodo'            => 'Text',
      'fecha_nacimiento' => 'Date',
      'tipo_dni'         => 'ForeignKey',
      'nro_dni'          => 'Text',
      'ocupacion'        => 'ForeignKey',
      'rfid'             => 'Text',
      'direccion'        => 'Text',
      'barrio'           => 'Text',
      'ciudad'           => 'ForeignKey',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
