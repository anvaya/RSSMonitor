<?php

/**
 * songTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class songTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object songTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('song');
    }
}