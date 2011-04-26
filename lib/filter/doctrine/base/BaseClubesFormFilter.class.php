<?php

/**
 * Clubes filter form base class.
 *
 * @package    base_de_datos
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClubesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'club'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'         => new sfWidgetFormFilterInput(),
      'url'           => new sfWidgetFormFilterInput(),
      'direccion'     => new sfWidgetFormFilterInput(),
      'presidente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'ciudad_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgCiudades'), 'add_empty' => true)),
      'distrito_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Distritos'), 'add_empty' => true)),
      'programa_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgProgramas'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'club'          => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'url'           => new sfValidatorPass(array('required' => false)),
      'direccion'     => new sfValidatorPass(array('required' => false)),
      'presidente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'ciudad_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CfgCiudades'), 'column' => 'id')),
      'distrito_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Distritos'), 'column' => 'id')),
      'programa_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CfgProgramas'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('clubes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clubes';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'club'          => 'Text',
      'email'         => 'Text',
      'url'           => 'Text',
      'direccion'     => 'Text',
      'presidente_id' => 'ForeignKey',
      'ciudad_id'     => 'ForeignKey',
      'distrito_id'   => 'ForeignKey',
      'programa_id'   => 'ForeignKey',
    );
  }
}
