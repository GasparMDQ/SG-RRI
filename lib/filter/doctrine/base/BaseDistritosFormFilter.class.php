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
      'gd_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gobernador'), 'add_empty' => true)),
      'rdr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteR'), 'add_empty' => true)),
      'rdi_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteI'), 'add_empty' => true)),
      'aim_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'add_empty' => true)),
      'zone_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'distrito' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gd_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gobernador'), 'column' => 'id')),
      'rdr_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RepresentanteR'), 'column' => 'id')),
      'rdi_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RepresentanteI'), 'column' => 'id')),
      'aim_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Aims'), 'column' => 'id')),
      'zone_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Zones'), 'column' => 'id')),
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
      'zone_id'  => 'ForeignKey',
    );
  }
}
