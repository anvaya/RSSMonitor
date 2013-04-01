<?php

/**
 * source_type form base class.
 *
 * @method source_type getObject() Returns the current form's model object
 *
 * @package    RSSMonitor
 * @subpackage form
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basesource_typeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'type_name'       => new sfWidgetFormInputText(),
      'processor_class' => new sfWidgetFormInputText(),
      'disabled'        => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type_name'       => new sfValidatorPass(),
      'processor_class' => new sfValidatorPass(array('required' => false)),
      'disabled'        => new sfValidatorBoolean(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'source_type', 'column' => array('type_name')))
    );

    $this->widgetSchema->setNameFormat('source_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'source_type';
  }

}
