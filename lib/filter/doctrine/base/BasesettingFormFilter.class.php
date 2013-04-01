<?php

/**
 * setting filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesettingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'value1'      => new sfWidgetFormFilterInput(),
      'value2'      => new sfWidgetFormFilterInput(),
      'value3'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'value1'      => new sfValidatorPass(array('required' => false)),
      'value2'      => new sfValidatorPass(array('required' => false)),
      'value3'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('setting_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'setting';
  }

  public function getFields()
  {
    return array(
      'setting_key' => 'Text',
      'value1'      => 'Text',
      'value2'      => 'Text',
      'value3'      => 'Text',
    );
  }
}
