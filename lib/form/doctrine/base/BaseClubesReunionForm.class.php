<?php

/**
 * ClubesReunion form base class.
 *
 * @method ClubesReunion getObject() Returns the current form's model object
 *
 * @package    base_de_datos
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClubesReunionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'club_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clubes'), 'add_empty' => false)),
      'dia'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CfgDias'), 'add_empty' => false)),
      'hora'    => new sfWidgetFormTime(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'club_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clubes'))),
      'dia'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CfgDias'))),
      'hora'    => new sfValidatorTime(),
    ));

    $this->widgetSchema->setNameFormat('clubes_reunion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClubesReunion';
  }

}
