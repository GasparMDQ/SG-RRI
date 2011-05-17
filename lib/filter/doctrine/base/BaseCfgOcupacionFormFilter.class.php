<?php

/**
 * CfgOcupacion filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgOcupacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ocupacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ocupacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_ocupacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgOcupacion';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'ocupacion' => 'Text',
    );
  }
}
