<?php

/**
 * CfgDias form base class.
 *
 * @method CfgDias getObject() Returns the current form's model object
 *
 * @package    base_de_datos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCfgDiasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dia' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'dia' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('dia')), 'empty_value' => $this->getObject()->get('dia'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cfg_dias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CfgDias';
  }

}
