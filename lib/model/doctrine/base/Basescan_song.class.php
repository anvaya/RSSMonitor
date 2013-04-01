<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('scan_song', 'doctrine');

/**
 * Basescan_song
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $scan_data_id
 * @property integer $playlist_data_id
 * @property nvarchar $song_name
 * @property nvarchar $artist_name
 * @property nvarchar $album
 * @property nvarchar $country
 * @property nvarchar $genre
 * @property varchar $picture_file
 * @property varchar $youtube_link
 * @property nvarchar $record_company
 * @property nvarchar $copyright
 * @property nvarchar $release_date
 * @property nvarchar $audio_file_url
 * @property varchar $audio_file
 * @property boolean $alredy_exists
 * @property boolean $added_to_system
 * @property timestamp $system_added_date
 * @property integer $track_id
 * @property scan_data $scan_data
 * @property playlist_data $playlist_data
 * 
 * @method integer       getId()                Returns the current record's "id" value
 * @method integer       getScanDataId()        Returns the current record's "scan_data_id" value
 * @method integer       getPlaylistDataId()    Returns the current record's "playlist_data_id" value
 * @method nvarchar      getSongName()          Returns the current record's "song_name" value
 * @method nvarchar      getArtistName()        Returns the current record's "artist_name" value
 * @method nvarchar      getAlbum()             Returns the current record's "album" value
 * @method nvarchar      getCountry()           Returns the current record's "country" value
 * @method nvarchar      getGenre()             Returns the current record's "genre" value
 * @method varchar       getPictureFile()       Returns the current record's "picture_file" value
 * @method varchar       getYoutubeLink()       Returns the current record's "youtube_link" value
 * @method nvarchar      getRecordCompany()     Returns the current record's "record_company" value
 * @method nvarchar      getCopyright()         Returns the current record's "copyright" value
 * @method nvarchar      getReleaseDate()       Returns the current record's "release_date" value
 * @method nvarchar      getAudioFileUrl()      Returns the current record's "audio_file_url" value
 * @method varchar       getAudioFile()         Returns the current record's "audio_file" value
 * @method boolean       getAlredyExists()      Returns the current record's "alredy_exists" value
 * @method boolean       getAddedToSystem()     Returns the current record's "added_to_system" value
 * @method timestamp     getSystemAddedDate()   Returns the current record's "system_added_date" value
 * @method integer       getTrackId()           Returns the current record's "track_id" value
 * @method scan_data     getScanData()          Returns the current record's "scan_data" value
 * @method playlist_data getPlaylistData()      Returns the current record's "playlist_data" value
 * @method scan_song     setId()                Sets the current record's "id" value
 * @method scan_song     setScanDataId()        Sets the current record's "scan_data_id" value
 * @method scan_song     setPlaylistDataId()    Sets the current record's "playlist_data_id" value
 * @method scan_song     setSongName()          Sets the current record's "song_name" value
 * @method scan_song     setArtistName()        Sets the current record's "artist_name" value
 * @method scan_song     setAlbum()             Sets the current record's "album" value
 * @method scan_song     setCountry()           Sets the current record's "country" value
 * @method scan_song     setGenre()             Sets the current record's "genre" value
 * @method scan_song     setPictureFile()       Sets the current record's "picture_file" value
 * @method scan_song     setYoutubeLink()       Sets the current record's "youtube_link" value
 * @method scan_song     setRecordCompany()     Sets the current record's "record_company" value
 * @method scan_song     setCopyright()         Sets the current record's "copyright" value
 * @method scan_song     setReleaseDate()       Sets the current record's "release_date" value
 * @method scan_song     setAudioFileUrl()      Sets the current record's "audio_file_url" value
 * @method scan_song     setAudioFile()         Sets the current record's "audio_file" value
 * @method scan_song     setAlredyExists()      Sets the current record's "alredy_exists" value
 * @method scan_song     setAddedToSystem()     Sets the current record's "added_to_system" value
 * @method scan_song     setSystemAddedDate()   Sets the current record's "system_added_date" value
 * @method scan_song     setTrackId()           Sets the current record's "track_id" value
 * @method scan_song     setScanData()          Sets the current record's "scan_data" value
 * @method scan_song     setPlaylistData()      Sets the current record's "playlist_data" value
 * 
 * @package    RSSMonitor
 * @subpackage model
 * @author     Anvaya Technologies
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basescan_song extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('scan_song');
        $this->hasColumn('id', 'integer', 5, array(
             'type' => 'integer',
             'size' => 5,
             'autoincrement' => true,
             'primary' => true,
             'length' => 5,
             ));
        $this->hasColumn('scan_data_id', 'integer', 5, array(
             'type' => 'integer',
             'size' => 5,
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('playlist_data_id', 'integer', 5, array(
             'type' => 'integer',
             'size' => 5,
             'notnull' => false,
             'length' => 5,
             ));
        $this->hasColumn('song_name', 'nvarchar', 1000, array(
             'type' => 'nvarchar',
             'size' => 1000,
             'notnull' => false,
             'length' => 1000,
             ));
        $this->hasColumn('artist_name', 'nvarchar', 1000, array(
             'type' => 'nvarchar',
             'size' => 1000,
             'notnull' => false,
             'length' => 1000,
             ));
        $this->hasColumn('album', 'nvarchar', 300, array(
             'type' => 'nvarchar',
             'size' => 300,
             'notnull' => false,
             'length' => 300,
             ));
        $this->hasColumn('country', 'nvarchar', 100, array(
             'type' => 'nvarchar',
             'size' => 100,
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('genre', 'nvarchar', 300, array(
             'type' => 'nvarchar',
             'size' => 300,
             'notnull' => false,
             'length' => 300,
             ));
        $this->hasColumn('picture_file', 'varchar', 300, array(
             'type' => 'varchar',
             'size' => 300,
             'notnull' => false,
             'length' => 300,
             ));
        $this->hasColumn('youtube_link', 'varchar', 1000, array(
             'type' => 'varchar',
             'size' => 1000,
             'notnull' => false,
             'length' => 1000,
             ));
        $this->hasColumn('record_company', 'nvarchar', 300, array(
             'type' => 'nvarchar',
             'size' => 300,
             'notnull' => false,
             'length' => 300,
             ));
        $this->hasColumn('copyright', 'nvarchar', 500, array(
             'type' => 'nvarchar',
             'size' => 500,
             'notnull' => false,
             'length' => 500,
             ));
        $this->hasColumn('release_date', 'nvarchar', 100, array(
             'type' => 'nvarchar',
             'size' => 100,
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('audio_file_url', 'nvarchar', 1000, array(
             'type' => 'nvarchar',
             'size' => 1000,
             'notnull' => false,
             'length' => 1000,
             ));
        $this->hasColumn('audio_file', 'varchar', 200, array(
             'type' => 'varchar',
             'size' => 200,
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('alredy_exists', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => false,
             ));
        $this->hasColumn('added_to_system', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => false,
             ));
        $this->hasColumn('system_added_date', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => false,
             ));
        $this->hasColumn('track_id', 'integer', 5, array(
             'type' => 'integer',
             'size' => 5,
             'notnull' => false,
             'length' => 5,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('scan_data', array(
             'local' => 'scan_data_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('playlist_data', array(
             'local' => 'playlist_data_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}