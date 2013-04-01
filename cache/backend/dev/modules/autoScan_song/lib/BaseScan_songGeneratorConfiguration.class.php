<?php

/**
 * scan_song module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage scan_song
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseScan_songGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  'play' =>   array(    'action' => 'Play',    'params' =>     array(      'popup' =>       array(        0 => 'Play',        1 => 'width=400,height=400,scrollbars=1',      ),    ),  ),  'add_to_system' =>   array(    'label' => 'Add To System',    'action' => 'add2System',  ),  'delete_file' =>   array(    'label' => 'Delete File',    'action' => 'deleteFile',  ),);
  }

  public function getListActions()
  {
    return array();
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%song_name%% - %%artist_name%% - %%already_exists%% - %%added_to_system%% - %%date_added%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'New Songs List';
  }

  public function getEditTitle()
  {
    return 'Edit Scan song';
  }

  public function getNewTitle()
  {
    return 'New Scan song';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'source_id',  1 => 'song_name',  2 => 'artist_name',  3 => 'album',  4 => 'country',  5 => 'genre',  6 => 'alredy_exists',  7 => 'added_to_system',  8 => 'track_id',  9 => '_scripts',);
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'song_name',  1 => 'artist_name',  2 => 'already_exists',  3 => 'added_to_system',  4 => 'date_added',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'rss_data_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'playlist_data_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'song_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'artist_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'album' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'country' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'genre' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'picture_file' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'youtube_link' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'record_company' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'copyright' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'release_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'audio_file_url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'audio_file' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'alredy_exists' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'added_to_system' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'system_added_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'track_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Track Id',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'date_added' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'date_format' => 'dd/MM/yyyy HH:mm',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'rss_data_id' => array(),
      'playlist_data_id' => array(),
      'song_name' => array(),
      'artist_name' => array(),
      'album' => array(),
      'country' => array(),
      'genre' => array(),
      'picture_file' => array(),
      'youtube_link' => array(),
      'record_company' => array(),
      'copyright' => array(),
      'release_date' => array(),
      'audio_file_url' => array(),
      'audio_file' => array(),
      'alredy_exists' => array(),
      'added_to_system' => array(),
      'system_added_date' => array(),
      'track_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'rss_data_id' => array(),
      'playlist_data_id' => array(),
      'song_name' => array(),
      'artist_name' => array(),
      'album' => array(),
      'country' => array(),
      'genre' => array(),
      'picture_file' => array(),
      'youtube_link' => array(),
      'record_company' => array(),
      'copyright' => array(),
      'release_date' => array(),
      'audio_file_url' => array(),
      'audio_file' => array(),
      'alredy_exists' => array(),
      'added_to_system' => array(),
      'system_added_date' => array(),
      'track_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'rss_data_id' => array(),
      'playlist_data_id' => array(),
      'song_name' => array(),
      'artist_name' => array(),
      'album' => array(),
      'country' => array(),
      'genre' => array(),
      'picture_file' => array(),
      'youtube_link' => array(),
      'record_company' => array(),
      'copyright' => array(),
      'release_date' => array(),
      'audio_file_url' => array(),
      'audio_file' => array(),
      'alredy_exists' => array(),
      'added_to_system' => array(),
      'system_added_date' => array(),
      'track_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'rss_data_id' => array(),
      'playlist_data_id' => array(),
      'song_name' => array(),
      'artist_name' => array(),
      'album' => array(),
      'country' => array(),
      'genre' => array(),
      'picture_file' => array(),
      'youtube_link' => array(),
      'record_company' => array(),
      'copyright' => array(),
      'release_date' => array(),
      'audio_file_url' => array(),
      'audio_file' => array(),
      'alredy_exists' => array(),
      'added_to_system' => array(),
      'system_added_date' => array(),
      'track_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'rss_data_id' => array(),
      'playlist_data_id' => array(),
      'song_name' => array(),
      'artist_name' => array(),
      'album' => array(),
      'country' => array(),
      'genre' => array(),
      'picture_file' => array(),
      'youtube_link' => array(),
      'record_company' => array(),
      'copyright' => array(),
      'release_date' => array(),
      'audio_file_url' => array(),
      'audio_file' => array(),
      'alredy_exists' => array(),
      'added_to_system' => array(),
      'system_added_date' => array(),
      'track_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'scan_songForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'scan_songFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array('song_name asc', 'asc');
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
