<?php

/**
 * scan_song filter form.
 *
 * @package    RSSMonitor
 * @subpackage filter
 * @author     Anvaya Technologies
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class scan_songFormFilter extends Basescan_songFormFilter
{
  public function configure()
  {
      $this->widgetSchema['source_id'] = new sfWidgetFormDoctrineChoice(array("model"=>"scan_source","add_empty"=>true,'order_by'=>array('source_name','asc') ));
      $this->validatorSchema['source_id'] = new sfValidatorDoctrineChoice(array('required'=>false, 'model'=>'scan_source'));     
      
      $autocomplete_cols = array ("artist_name","song_name","album","country","genre");
      foreach($autocomplete_cols as $col)
      {
        $this->widgetSchema[$col] = new sfWidgetFormJQueryAutocompleter(array(
                                    'url'   => url_for('scan_song/ajaxAutoComplete?col='.$col),
                                    'config' => '{ width: 220,max: 20,highlight:false ,multiple: false,multipleSeparator: ",",scroll: true,scrollHeight: 300}'));
          
      }    
      
      
      $multi_widgets_text = array("song_name", "artist_name","album",);
      foreach($multi_widgets_text as $widget_name)
      {
        $this->widgetSchema[$widget_name] = new sfWidgetFormFilterMultiCondition(array('value_widget'=>$this->widgetSchema[$widget_name]) );
        $this->validatorSchema[$widget_name] = new sfValidatorFormMultiCondition( array('value_validator'=>$this->validatorSchema[$widget_name],'field_type'=>'text') );          
      }
      
  }
  
  public function getFields() 
  {
      $fields = parent::getFields();
      $fields['country'] = 'ForeignKey';
      $fields['genre'] = 'ForeignKey';
      $fields['source_id']= 'ForeignKey';
      return $fields;
  }
  
  public function addSongNameColumnQuery(Doctrine_Query $query, $column, $value=false)
  {
      sfWidgetFormFilterMultiCondition::addColumnQuery($query, $column, $value,'text');
  }
  
  public function addArtistNameColumnQuery(Doctrine_Query $query, $column, $value=false)
  {
      sfWidgetFormFilterMultiCondition::addColumnQuery($query, $column, $value,'text');
  }
  
  public function addAlbumColumnQuery(Doctrine_Query $query, $column, $value=false)
  {
      sfWidgetFormFilterMultiCondition::addColumnQuery($query, $column, $value,'text');
  }
  
  public function addSourceIdColumnQuery(Doctrine_Query $query, $column, $value=false)
  {
      if($value)
      {      
          $query->leftJoin($query->getRootAlias().".scan_data rd")
                 ->leftJoin($query->getRootAlias().".playlist_data pd")
                 ->addWhere('((rd.scan_source_id = ?) OR (pd.scan_source_id = ?))', array($value, $value) );
      }
  }
}
