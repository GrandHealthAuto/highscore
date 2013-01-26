<?php
namespace Highscore\Model;

class Player extends \King23\Mongo\MongoObject implements \ArrayAccess
{
    protected $_className = "Player";

    public static function find($search = array())
    {
        return self::_find(__CLASS__, $search);
    }

    public static function getInstanceByPlayerName($player)
    {
        return self::_getInstanceByCriteria(__CLASS__, array("name" => $player));
    }

    public static function count()
    {
        return self::_find(__CLASS__, array())->count();
    }

    public static function getInstanceById($id)
    {
        return self::_getInstanceById(__CLASS__, $id);
    }
}