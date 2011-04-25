<?php

/**
 * Aims form base class.
 *
 * @method Aims getObject() Returns the current form's model object
 *
 * @package    base_de_datos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAimsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'aim'           => new sfWidgetFormInputText(),
      'sigla'         => new sfWidgetFormInputText(),
      'presidente_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'aim'           => new sfValidatorString(array('max_length' => 255)),
      'sigla'         => new sfValidatorString(array('max_length' => 255)),
      'presidente_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('aims[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aims';
  }

}
