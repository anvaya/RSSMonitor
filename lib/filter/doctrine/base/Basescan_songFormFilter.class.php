<?php

/**
 * scan_song filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Basescan_songFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'scan_data_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('scan_data'), 'add_empty' => true)),
      'playlist_data_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playlist_data'), 'add_empty' => true)),
      'song_name'         => new sfWidgetFormFilterInput(),
      'artist_name'       => new sfWidgetFormFilterInput(),
      'album'             => new sfWidgetFormFilterInput(),
      'country'           => new sfWidgetFormFilterInput(),
      'genre'             => new sfWidgetFormFilterInput(),
      'picture_file'      => new sfWidgetFormFilterInput(),
      'youtube_link'      => new sfWidgetFormFilterInput(),
      'record_company'    => new sfWidgetFormFilterInput(),
      'copyright'         => new sfWidgetFormFilterInput(),
      'release_date'      => new sfWidgetFormFilterInput(),
      'audio_file_url'    => new sfWidgetFormFilterInput(),
      'audio_file'        => new sfWidgetFormFilterInput(),
      'alredy_exists'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'added_to_system'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'system_added_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'track_id'          => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'scan_data_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('scan_data'), 'column' => 'id')),
      'playlist_data_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('playlist_data'), 'column' => 'id')),
      'song_name'         => new sfValidatorPass(array('required' => false)),
      'artist_name'       => new sfValidatorPass(array('required' => false)),
      'album'             => new sfValidatorPass(array('required' => false)),
      'country'           => new sfValidatorPass(array('required' => false)),
      'genre'             => new sfValidatorPass(array('required' => false)),
      'picture_file'      => new sfValidatorPass(array('required' => false)),
      'youtube_link'      => new sfValidatorPass(array('required' => false)),
      'record_company'    => new sfValidatorPass(array('required' => false)),
      'copyright'         => new sfValidatorPass(array('required' => false)),
      'release_date'      => new sfValidatorPass(array('required' => false)),
      'audio_file_url'    => new sfValidatorPass(array('required' => false)),
      'audio_file'        => new sfValidatorPass(array('required' => false)),
      'alredy_exists'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'added_to_system'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'system_added_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'track_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('scan_song_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'scan_song';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'scan_data_id'      => 'ForeignKey',
      'playlist_data_id'  => 'ForeignKey',
      'song_name'         => 'Text',
      'artist_name'       => 'Text',
      'album'             => 'Text',
      'country'           => 'Text',
      'genre'             => 'Text',
      'picture_file'      => 'Text',
      'youtube_link'      => 'Text',
      'record_company'    => 'Text',
      'copyright'         => 'Text',
      'release_date'      => 'Text',
      'audio_file_url'    => 'Text',
      'audio_file'        => 'Text',
      'alredy_exists'     => 'Boolean',
      'added_to_system'   => 'Boolean',
      'system_added_date' => 'Date',
      'track_id'          => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
