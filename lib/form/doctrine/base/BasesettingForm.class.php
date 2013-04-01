<?php

/**
 * setting form base class.
 *
 * @method setting getObject() Returns the current form's model object
 *
 * @package    RSSMonitor
 * @subpackage form
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'setting_key' => new sfWidgetFormInputHidden(),
      'value1'      => new sfWidgetFormInputText(),
      'value2'      => new sfWidgetFormInputText(),
      'value3'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'setting_key' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('setting_key')), 'empty_value' => $this->getObject()->get('setting_key'), 'required' => false)),
      'value1'      => new sfValidatorPass(array('required' => false)),
      'value2'      => new sfValidatorPass(array('required' => false)),
      'value3'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'setting';
  }

}
