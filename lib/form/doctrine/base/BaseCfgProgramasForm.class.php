<?php

/**
 * CfgProgramas form base class.
 *
 * @method CfgProgramas getObject() Returns the current form's model object
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage form
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCfgProgramasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'programa' => new sfWidgetFormInputText(),
      'logo'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'programa' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'logo'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_programas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgProgramas';
  }

}
