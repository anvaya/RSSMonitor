<?php

/**
 * scan_data filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basescan_dataFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'scan_source_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('scan_source'), 'add_empty' => true)),
      'song_name'      => new sfWidgetFormFilterInput(),
      'artist_name'    => new sfWidgetFormFilterInput(),
      'album'          => new sfWidgetFormFilterInput(),
      'country'        => new sfWidgetFormFilterInput(),
      'genre'          => new sfWidgetFormFilterInput(),
      'picture_file'   => new sfWidgetFormFilterInput(),
      'youtube_link'   => new sfWidgetFormFilterInput(),
      'record_company' => new sfWidgetFormFilterInput(),
      'copyright'      => new sfWidgetFormFilterInput(),
      'release_date'   => new sfWidgetFormFilterInput(),
      'processed'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'scan_source_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('scan_source'), 'column' => 'id')),
      'song_name'      => new sfValidatorPass(array('required' => false)),
      'artist_name'    => new sfValidatorPass(array('required' => false)),
      'album'          => new sfValidatorPass(array('required' => false)),
      'country'        => new sfValidatorPass(array('required' => false)),
      'genre'          => new sfValidatorPass(array('required' => false)),
      'picture_file'   => new sfValidatorPass(array('required' => false)),
      'youtube_link'   => new sfValidatorPass(array('required' => false)),
      'record_company' => new sfValidatorPass(array('required' => false)),
      'copyright'      => new sfValidatorPass(array('required' => false)),
      'release_date'   => new sfValidatorPass(array('required' => false)),
      'processed'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('scan_data_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'scan_data';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'scan_source_id' => 'ForeignKey',
      'song_name'      => 'Text',
      'artist_name'    => 'Text',
      'album'          => 'Text',
      'country'        => 'Text',
      'genre'          => 'Text',
      'picture_file'   => 'Text',
      'youtube_link'   => 'Text',
      'record_company' => 'Text',
      'copyright'      => 'Text',
      'release_date'   => 'Text',
      'processed'      => 'Boolean',
      'created_at'     => 'Date',
    );
  }
}
