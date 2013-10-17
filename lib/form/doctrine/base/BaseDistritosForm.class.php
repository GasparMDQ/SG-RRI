<?php

/**
 * Distritos form base class.
 *
 * @method Distritos getObject() Returns the current form's model object
 *
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage form
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDistritosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'distrito' => new sfWidgetFormInputText(),
      'gd_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gobernador'), 'add_empty' => true)),
      'rdr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteR'), 'add_empty' => true)),
      'rdi_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteI'), 'add_empty' => true)),
      'aim_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'add_empty' => true)),
      'zone_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'distrito' => new sfValidatorInteger(),
      'gd_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gobernador'), 'required' => false)),
      'rdr_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteR'), 'required' => false)),
      'rdi_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RepresentanteI'), 'required' => false)),
      'aim_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Aims'), 'required' => false)),
      'zone_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Zones'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('distritos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Distritos';
  }

}
