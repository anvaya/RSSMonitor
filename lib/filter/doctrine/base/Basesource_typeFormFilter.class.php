<?php

/**
 * source_type filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basesource_typeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'type_name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'processor_class' => new sfWidgetFormFilterInput(),
      'disabled'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'type_name'       => new sfValidatorPass(array('required' => false)),
      'processor_class' => new sfValidatorPass(array('required' => false)),
      'disabled'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('source_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'source_type';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'type_name'       => 'Text',
      'processor_class' => 'Text',
      'disabled'        => 'Boolean',
    );
  }
}
