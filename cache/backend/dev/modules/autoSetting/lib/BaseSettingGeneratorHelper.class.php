<?php

/**
 * setting module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage setting
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSettingGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'setting' : 'setting_'.$action;
  }
}
