<?php

/**
 * scan_song form base class.
 *
 * @method scan_song getObject() Returns the current form's model object
 *
 * @package    RSSMonitor
 * @subpackage form
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basescan_songForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'scan_data_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('scan_data'), 'add_empty' => true)),
      'playlist_data_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('playlist_data'), 'add_empty' => true)),
      'song_name'         => new sfWidgetFormInputText(),
      'artist_name'       => new sfWidgetFormInputText(),
      'album'             => new sfWidgetFormInputText(),
      'country'           => new sfWidgetFormInputText(),
      'genre'             => new sfWidgetFormInputText(),
      'picture_file'      => new sfWidgetFormInputText(),
      'youtube_link'      => new sfWidgetFormInputText(),
      'record_company'    => new sfWidgetFormInputText(),
      'copyright'         => new sfWidgetFormInputText(),
      'release_date'      => new sfWidgetFormInputText(),
      'audio_file_url'    => new sfWidgetFormInputText(),
      'audio_file'        => new sfWidgetFormInputText(),
      'alredy_exists'     => new sfWidgetFormInputCheckbox(),
      'added_to_system'   => new sfWidgetFormInputCheckbox(),
      'system_added_date' => new sfWidgetFormDateTime(),
      'track_id'          => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'scan_data_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('scan_data'), 'required' => false)),
      'playlist_data_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('playlist_data'), 'required' => false)),
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
      'alredy_exists'     => new sfValidatorBoolean(array('required' => false)),
      'added_to_system'   => new sfValidatorBoolean(array('required' => false)),
      'system_added_date' => new sfValidatorDateTime(array('required' => false)),
      'track_id'          => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('scan_song[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'scan_song';
  }

}
