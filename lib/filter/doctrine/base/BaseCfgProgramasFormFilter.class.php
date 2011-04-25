<?php

/**
 * CfgProgramas filter form base class.
 *
 * @package    base_de_datos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgProgramasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'logo'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
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
      'programa' => 'Text',
      'logo'     => 'Text',
    );
  }
}
