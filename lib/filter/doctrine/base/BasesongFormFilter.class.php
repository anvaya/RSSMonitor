<?php

/**
 * song filter form base class.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesongFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'original_file_path'  => new sfWidgetFormFilterInput(),
      'updated_file_path'   => new sfWidgetFormFilterInput(),
      'file_name'           => new sfWidgetFormFilterInput(),
      'file_type_id'        => new sfWidgetFormFilterInput(),
      'quality'             => new sfWidgetFormFilterInput(),
      'year'                => new sfWidgetFormFilterInput(),
      'song_name'           => new sfWidgetFormFilterInput(),
      'artist_name'         => new sfWidgetFormFilterInput(),
      'album'               => new sfWidgetFormFilterInput(),
      'writer'              => new sfWidgetFormFilterInput(),
      'composer'            => new sfWidgetFormFilterInput(),
      'record_company'      => new sfWidgetFormFilterInput(),
      'youtube_link_auto'   => new sfWidgetFormFilterInput(),
      'youtube_link_manual' => new sfWidgetFormFilterInput(),
      'artist_picture'      => new sfWidgetFormFilterInput(),
      'genre_id'            => new sfWidgetFormFilterInput(),
      'country'             => new sfWidgetFormFilterInput(),
      'master_id'           => new sfWidgetFormFilterInput(),
      'copyright_id'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'original_file_path'  => new sfValidatorPass(array('required' => false)),
      'updated_file_path'   => new sfValidatorPass(array('required' => false)),
      'file_name'           => new sfValidatorPass(array('required' => false)),
      'file_type_id'        => new sfValidatorPass(array('required' => false)),
      'quality'             => new sfValidatorPass(array('required' => false)),
      'year'                => new sfValidatorPass(array('required' => false)),
      'song_name'           => new sfValidatorPass(array('required' => false)),
      'artist_name'         => new sfValidatorPass(array('required' => false)),
      'album'               => new sfValidatorPass(array('required' => false)),
      'writer'              => new sfValidatorPass(array('required' => false)),
      'composer'            => new sfValidatorPass(array('required' => false)),
      'record_company'      => new sfValidatorPass(array('required' => false)),
      'youtube_link_auto'   => new sfValidatorPass(array('required' => false)),
      'youtube_link_manual' => new sfValidatorPass(array('required' => false)),
      'artist_picture'      => new sfValidatorPass(array('required' => false)),
      'genre_id'            => new sfValidatorPass(array('required' => false)),
      'country'             => new sfValidatorPass(array('required' => false)),
      'master_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'copyright_id'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('song_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'song';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'original_file_path'  => 'Text',
      'updated_file_path'   => 'Text',
      'file_name'           => 'Text',
      'file_type_id'        => 'Text',
      'quality'             => 'Text',
      'year'                => 'Text',
      'song_name'           => 'Text',
      'artist_name'         => 'Text',
      'album'               => 'Text',
      'writer'              => 'Text',
      'composer'            => 'Text',
      'record_company'      => 'Text',
      'youtube_link_auto'   => 'Text',
      'youtube_link_manual' => 'Text',
      'artist_picture'      => 'Text',
      'genre_id'            => 'Text',
      'country'             => 'Text',
      'master_id'           => 'Number',
      'copyright_id'        => 'Text',
    );
  }
}
