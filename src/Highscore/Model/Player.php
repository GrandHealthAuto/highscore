<?php
namespace Highscore\Model;

use King23\Mongo\MongoObject;

class Player extends MongoObject implements \ArrayAccess
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

    public static function getPlayerTable($offset)
    {
        $result = array();
        foreach(
            Player::find(array())
                ->skip($offset)
                ->limit(25)
                ->sort(array("value" => -1)
                ) as $player)
        {
            $result[] = array(
                "name" => $player->name,
                "value" => $player->value
            );
        }
        return $result;
    }

}