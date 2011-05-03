<?php

/**
 * Distritos filter form base class.
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage filter
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDistritosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'distrito' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gd_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'rdr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser_1'), 'add_empty' => true)),
      'rdi_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser_2'), 'add_empty' => true)),
      'aim_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'distrito' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gd_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'rdr_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser_1'), 'column' => 'id')),
      'rdi_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser_2'), 'column' => 'id')),
      'aim_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Aims'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('distritos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Distritos';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'distrito' => 'Number',
      'gd_id'    => 'ForeignKey',
      'rdr_id'   => 'ForeignKey',
      'rdi_id'   => 'ForeignKey',
      'aim_id'   => 'ForeignKey',
    );
  }
}
