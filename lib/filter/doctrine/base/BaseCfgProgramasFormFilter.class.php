<?php

/**
 * CfgProgramas filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgProgramasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'programa' => new sfWidgetFormFilterInput(),
      'logo'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'programa' => new sfValidatorPass(array('required' => false)),
      'logo'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_programas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgProgramas';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'programa' => 'Text',
      'logo'     => 'Text',
    );
  }
}
