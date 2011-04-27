<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DistritosAdmin', 'doctrine');

/**
 * BaseDistritosAdmin
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $distrito_id
 * @property integer $user_id
 * @property Distritos $Distritos
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer        getId()          Returns the current record's "id" value
 * @method integer        getDistritoId()  Returns the current record's "distrito_id" value
 * @method integer        getUserId()      Returns the current record's "user_id" value
 * @method Distritos      getDistritos()   Returns the current record's "Distritos" value
 * @method sfGuardUser    getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method DistritosAdmin setId()          Sets the current record's "id" value
 * @method DistritosAdmin setDistritoId()  Sets the current record's "distrito_id" value
 * @method DistritosAdmin setUserId()      Sets the current record's "user_id" value
 * @method DistritosAdmin setDistritos()   Sets the current record's "Distritos" value
 * @method DistritosAdmin setSfGuardUser() Sets the current record's "sfGuardUser" value
 * 
 * @package    Sistema de Gestion - Rotaract Rotary e Interact
 * @subpackage model
 * @author     Gaspar Zaragoza
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDistritosAdmin extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('distritos_admin');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
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
        $this->hasColumn('user_id', 'integer', 8, array(
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

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}