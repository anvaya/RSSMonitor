<?php

/**
 * scan_source form base class.
 *
 * @method scan_source getObject() Returns the current form's model object
 *
 * @package    RSSMonitor
 * @subpackage form
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basescan_sourceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'source_name'    => new sfWidgetFormInputText(),
      'source_type_id' => new sfWidgetFormInputText(),
      'url'            => new sfWidgetFormInputText(),
      'disabled'       => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'source_name'    => new sfValidatorPass(),
      'source_type_id' => new sfValidatorInteger(array('required' => false)),
      'url'            => new sfValidatorPass(array('required' => false)),
      'disabled'       => new sfValidatorBoolean(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'scan_source', 'column' => array('source_name')))
    );

    $this->widgetSchema->setNameFormat('scan_source[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'scan_source';
  }

}
