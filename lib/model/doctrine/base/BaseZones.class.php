<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Zones', 'doctrine');

/**
 * BaseZones
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $zone
 * @property Doctrine_Collection $Distritos
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method string              getZone()      Returns the current record's "zone" value
 * @method Doctrine_Collection getDistritos() Returns the current record's "Distritos" collection
 * @method Zones               setId()        Sets the current record's "id" value
 * @method Zones               setZone()      Sets the current record's "zone" value
 * @method Zones               setDistritos() Sets the current record's "Distritos" collection
 * 
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage model
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseZones extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('zones');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('zone', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Distritos', array(
             'local' => 'id',
             'foreign' => 'zone_id'));
    }
}