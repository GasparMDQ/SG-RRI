<?php

/**
 * Distritos filter form base class.
 *
 * @package    base_de_datos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDistritosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'distrito' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rdr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'aim_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'distrito' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rdr_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
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
      'rdr_id'   => 'ForeignKey',
      'aim_id'   => 'ForeignKey',
    );
  }
}
