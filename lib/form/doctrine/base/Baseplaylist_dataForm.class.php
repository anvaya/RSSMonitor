<?php

/**
 * playlist_data form base class.
 *
 * @method playlist_data getObject() Returns the current form's model object
 *
 * @package    RSSMonitor
 * @subpackage form
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Baseplaylist_dataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'scan_source_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('scan_source'), 'add_empty' => true)),
      'song_name'      => new sfWidgetFormInputText(),
      'artist_name'    => new sfWidgetFormInputText(),
      'album'          => new sfWidgetFormInputText(),
      'country'        => new sfWidgetFormInputText(),
      'genre'          => new sfWidgetFormInputText(),
      'picture_file'   => new sfWidgetFormInputText(),
      'youtube_link'   => new sfWidgetFormInputText(),
      'record_company' => new sfWidgetFormInputText(),
      'copyright'      => new sfWidgetFormInputText(),
      'release_date'   => new sfWidgetFormInputText(),
      'processed'      => new sfWidgetFormInputCheckbox(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'scan_source_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('scan_source'), 'required' => false)),
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
      'processed'      => new sfValidatorBoolean(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('playlist_data[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'playlist_data';
  }

}
