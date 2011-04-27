<?php

/**
 * CfgProvincias filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCfgProvinciasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pais_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgPaises'), 'add_empty' => true)),
      'provincia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'pais_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CfgPaises'), 'column' => 'id')),
      'provincia' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_provincias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgProvincias';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'pais_id'   => 'ForeignKey',
      'provincia' => 'Text',
    );
  }
}
