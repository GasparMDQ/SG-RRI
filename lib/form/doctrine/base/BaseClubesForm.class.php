<?php

/**
 * Clubes form base class.
 *
 * @method Clubes getObject() Returns the current form's model object
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage form
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClubesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'club'          => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'url'           => new sfWidgetFormInputText(),
      'direccion'     => new sfWidgetFormInputText(),
      'presidente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'ciudad_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgCiudades'), 'add_empty' => true)),
      'distrito_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Distritos'), 'add_empty' => false)),
      'programa_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgProgramas'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'club'          => new sfValidatorString(array('max_length' => 255)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'direccion'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'presidente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'ciudad_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CfgCiudades'), 'required' => false)),
      'distrito_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Distritos'))),
      'programa_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CfgProgramas'))),
    ));

    $this->widgetSchema->setNameFormat('clubes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clubes';
  }

}
