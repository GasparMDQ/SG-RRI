<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CfgCiudades', 'doctrine');

/**
 * BaseCfgCiudades
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $provincia_id
 * @property string $ciudad
 * @property CfgProvincias $CfgProvincias
 * @property Doctrine_Collection $Clubes
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getProvinciaId()   Returns the current record's "provincia_id" value
 * @method string              getCiudad()        Returns the current record's "ciudad" value
 * @method CfgProvincias       getCfgProvincias() Returns the current record's "CfgProvincias" value
 * @method Doctrine_Collection getClubes()        Returns the current record's "Clubes" collection
 * @method CfgCiudades         setId()            Sets the current record's "id" value
 * @method CfgCiudades         setProvinciaId()   Sets the current record's "provincia_id" value
 * @method CfgCiudades         setCiudad()        Sets the current record's "ciudad" value
 * @method CfgCiudades         setCfgProvincias() Sets the current record's "CfgProvincias" value
 * @method CfgCiudades         setClubes()        Sets the current record's "Clubes" collection
 * 
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage model
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCfgCiudades extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cfg_ciudades');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('provincia_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('ciudad', 'string', 255, array(
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
        $this->hasOne('CfgProvincias', array(
             'local' => 'provincia_id',
             'foreign' => 'id'));

        $this->hasMany('Clubes', array(
             'local' => 'id',
             'foreign' => 'ciudad_id'));
    }
}