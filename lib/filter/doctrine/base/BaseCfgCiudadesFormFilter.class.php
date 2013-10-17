<?php

/**
 * CfgCiudades filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgCiudadesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'provincia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgProvincias'), 'add_empty' => true)),
      'ciudad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'provincia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CfgProvincias'), 'column' => 'id')),
      'ciudad'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_ciudades_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgCiudades';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'provincia_id' => 'ForeignKey',
      'ciudad'       => 'Text',
    );
  }
}
