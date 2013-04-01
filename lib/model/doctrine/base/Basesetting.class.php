<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('setting', 'doctrine');

/**
 * Basesetting
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property varchar $setting_key
 * @property varchar $value1
 * @property varchar $value2
 * @property varchar $value3
 * 
 * @method varchar getSettingKey()  Returns the current record's "setting_key" value
 * @method varchar getValue1()      Returns the current record's "value1" value
 * @method varchar getValue2()      Returns the current record's "value2" value
 * @method varchar getValue3()      Returns the current record's "value3" value
 * @method setting setSettingKey()  Sets the current record's "setting_key" value
 * @method setting setValue1()      Sets the current record's "value1" value
 * @method setting setValue2()      Sets the current record's "value2" value
 * @method setting setValue3()      Sets the current record's "value3" value
 * 
 * @package    RSSMonitor
 * @subpackage model
 * @author     Anvaya Technologies
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basesetting extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('setting');
        $this->hasColumn('setting_key', 'varchar', 50, array(
             'type' => 'varchar',
             'primary' => true,
             'length' => 50,
             ));
        $this->hasColumn('value1', 'varchar', 200, array(
             'type' => 'varchar',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('value2', 'varchar', 200, array(
             'type' => 'varchar',
             'notnull' => false,
             'length' => 200,
             ));
        $this->hasColumn('value3', 'varchar', 200, array(
             'type' => 'varchar',
             'notnull' => false,
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}