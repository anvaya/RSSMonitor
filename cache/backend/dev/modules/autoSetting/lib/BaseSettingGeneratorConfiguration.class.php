<?php

/**
 * setting module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage setting
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSettingGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array();
  }

  public function getListParams()
  {
    return '%%setting_key%% - %%value1%% - %%value2%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Preferences';
  }

  public function getEditTitle()
  {
    return 'Edit Setting';
  }

  public function getNewTitle()
  {
    return 'New Setting';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'setting_key',);
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
    return array(  0 => 'setting_key',  1 => 'value1',  2 => 'value2',);
  }

  public function getFieldsDefault()
  {
    return array(
      'setting_key' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Key',),
      'value1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'value2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'value3' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'setting_key' => array(),
      'value1' => array(),
      'value2' => array(),
      'value3' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'setting_key' => array(),
      'value1' => array(),
      'value2' => array(),
      'value3' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'setting_key' => array(),
      'value1' => array(),
      'value2' => array(),
      'value3' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'setting_key' => array(),
      'value1' => array(),
      'value2' => array(),
      'value3' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'setting_key' => array(),
      'value1' => array(),
      'value2' => array(),
      'value3' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'settingForm';
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
    return 'settingFormFilter';
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
    return array('setting_key', 'asc');
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
