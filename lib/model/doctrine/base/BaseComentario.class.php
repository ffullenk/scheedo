<?php

/**
 * BaseComentario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $texto
 * @property integer $evento_id
 * @property integer $user_id
 * @property Evento $Evento
 * @property sfGuardUser $User
 * 
 * @method integer     getId()        Returns the current record's "id" value
 * @method string      getTexto()     Returns the current record's "texto" value
 * @method integer     getEventoId()  Returns the current record's "evento_id" value
 * @method integer     getUserId()    Returns the current record's "user_id" value
 * @method Evento      getEvento()    Returns the current record's "Evento" value
 * @method sfGuardUser getUser()      Returns the current record's "User" value
 * @method Comentario  setId()        Sets the current record's "id" value
 * @method Comentario  setTexto()     Sets the current record's "texto" value
 * @method Comentario  setEventoId()  Sets the current record's "evento_id" value
 * @method Comentario  setUserId()    Sets the current record's "user_id" value
 * @method Comentario  setEvento()    Sets the current record's "Evento" value
 * @method Comentario  setUser()      Sets the current record's "User" value
 * 
 * @package    scheedo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComentario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comentario');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             ));
        $this->hasColumn('texto', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('evento_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Evento', array(
             'local' => 'evento_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}