<?php

/**
 * CfgTipoDni filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgTipoDniFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_tipo_dni_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgTipoDni';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'tipo' => 'Text',
    );
  }
}
