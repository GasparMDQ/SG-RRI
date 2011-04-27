<?php

/**
 * ClubesReunion filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClubesReunionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'club_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clubes'), 'add_empty' => true)),
      'dia_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgDias'), 'add_empty' => true)),
      'hora'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'club_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clubes'), 'column' => 'id')),
      'dia_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CfgDias'), 'column' => 'id')),
      'hora'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clubes_reunion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClubesReunion';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'club_id' => 'ForeignKey',
      'dia_id'  => 'ForeignKey',
      'hora'    => 'Text',
    );
  }
}
