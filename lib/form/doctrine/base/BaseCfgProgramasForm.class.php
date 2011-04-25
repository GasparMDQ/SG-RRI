<?php

/**
 * CfgProgramas form base class.
 *
 * @method CfgProgramas getObject() Returns the current form's model object
 *
 * @package    base_de_datos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCfgProgramasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'programa' => new sfWidgetFormInputHidden(),
      'logo'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'programa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('programa')), 'empty_value' => $this->getObject()->get('programa'), 'required' => false)),
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
