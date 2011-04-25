<?php

/**
 * DistritosAdmin filter form base class.
 *
 * @package    base_de_datos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDistritosAdminFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'distrito_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Distritos'), 'add_empty' => true)),
      'user_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'distrito_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Distritos'), 'column' => 'id')),
      'user_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('distritos_admin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DistritosAdmin';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'distrito_id' => 'ForeignKey',
      'user_id'     => 'Number',
    );
  }
}
