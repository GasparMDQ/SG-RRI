<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Clubes', 'doctrine');

/**
 * BaseClubes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $club
 * @property string $email
 * @property string $url
 * @property string $direccion
 * @property integer $presidente_id
 * @property integer $ciudad_id
 * @property integer $distrito_id
 * @property integer $programa_id
 * @property Distritos $Distritos
 * @property CfgCiudades $CfgCiudades
 * @property CfgProgramas $CfgProgramas
 * @property Doctrine_Collection $ClubesAdmin
 * @property Doctrine_Collection $ClubesReunion
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getClub()          Returns the current record's "club" value
 * @method string              getEmail()         Returns the current record's "email" value
 * @method string              getUrl()           Returns the current record's "url" value
 * @method string              getDireccion()     Returns the current record's "direccion" value
 * @method integer             getPresidenteId()  Returns the current record's "presidente_id" value
 * @method integer             getCiudadId()      Returns the current record's "ciudad_id" value
 * @method integer             getDistritoId()    Returns the current record's "distrito_id" value
 * @method integer             getProgramaId()    Returns the current record's "programa_id" value
 * @method Distritos           getDistritos()     Returns the current record's "Distritos" value
 * @method CfgCiudades         getCfgCiudades()   Returns the current record's "CfgCiudades" value
 * @method CfgProgramas        getCfgProgramas()  Returns the current record's "CfgProgramas" value
 * @method Doctrine_Collection getClubesAdmin()   Returns the current record's "ClubesAdmin" collection
 * @method Doctrine_Collection getClubesReunion() Returns the current record's "ClubesReunion" collection
 * @method sfGuardUser         getSfGuardUser()   Returns the current record's "sfGuardUser" value
 * @method Clubes              setId()            Sets the current record's "id" value
 * @method Clubes              setClub()          Sets the current record's "club" value
 * @method Clubes              setEmail()         Sets the current record's "email" value
 * @method Clubes              setUrl()           Sets the current record's "url" value
 * @method Clubes              setDireccion()     Sets the current record's "direccion" value
 * @method Clubes              setPresidenteId()  Sets the current record's "presidente_id" value
 * @method Clubes              setCiudadId()      Sets the current record's "ciudad_id" value
 * @method Clubes              setDistritoId()    Sets the current record's "distrito_id" value
 * @method Clubes              setProgramaId()    Sets the current record's "programa_id" value
 * @method Clubes              setDistritos()     Sets the current record's "Distritos" value
 * @method Clubes              setCfgCiudades()   Sets the current record's "CfgCiudades" value
 * @method Clubes              setCfgProgramas()  Sets the current record's "CfgProgramas" value
 * @method Clubes              setClubesAdmin()   Sets the current record's "ClubesAdmin" collection
 * @method Clubes              setClubesReunion() Sets the current record's "ClubesReunion" collection
 * @method Clubes              setSfGuardUser()   Sets the current record's "sfGuardUser" value
 * 
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage model
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClubes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('clubes');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('club', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('direccion', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('presidente_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('ciudad_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('distrito_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('programa_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Distritos', array(
             'local' => 'distrito_id',
             'foreign' => 'id'));

        $this->hasOne('CfgCiudades', array(
             'local' => 'ciudad_id',
             'foreign' => 'id'));

        $this->hasOne('CfgProgramas', array(
             'local' => 'programa_id',
             'foreign' => 'id'));

        $this->hasMany('ClubesAdmin', array(
             'local' => 'id',
             'foreign' => 'club_id'));

        $this->hasMany('ClubesReunion', array(
             'local' => 'id',
             'foreign' => 'club_id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'presidente_id',
             'foreign' => 'id'));
    }
}