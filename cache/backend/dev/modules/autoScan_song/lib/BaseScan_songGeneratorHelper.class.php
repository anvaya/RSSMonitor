<?php

/**
 * scan_song module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage scan_song
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseScan_songGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'scan_song' : 'scan_song_'.$action;
  }
}
