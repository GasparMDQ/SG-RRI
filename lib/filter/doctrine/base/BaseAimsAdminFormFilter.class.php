<?php

/**
 * AimsAdmin filter form base class.
 *
 * @package    base_de_datos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAimsAdminFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'aim_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'add_empty' => true)),
      'user_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'aim_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Aims'), 'column' => 'id')),
      'user_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('aims_admin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AimsAdmin';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'aim_id'  => 'ForeignKey',
      'user_id' => 'Number',
    );
  }
}
