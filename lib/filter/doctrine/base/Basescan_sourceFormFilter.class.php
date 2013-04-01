<?php

/**
 * scan_source filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basescan_sourceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'source_name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'source_type_id' => new sfWidgetFormFilterInput(),
      'url'            => new sfWidgetFormFilterInput(),
      'disabled'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'source_name'    => new sfValidatorPass(array('required' => false)),
      'source_type_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'url'            => new sfValidatorPass(array('required' => false)),
      'disabled'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('scan_source_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'scan_source';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'source_name'    => 'Text',
      'source_type_id' => 'Number',
      'url'            => 'Text',
      'disabled'       => 'Boolean',
    );
  }
}
