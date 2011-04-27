<?php

/**
 * Aims filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAimsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'aim'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sigla'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'presidente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'aim'           => new sfValidatorPass(array('required' => false)),
      'sigla'         => new sfValidatorPass(array('required' => false)),
      'presidente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('aims_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aims';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'aim'           => 'Text',
      'sigla'         => 'Text',
      'presidente_id' => 'ForeignKey',
    );
  }
}
