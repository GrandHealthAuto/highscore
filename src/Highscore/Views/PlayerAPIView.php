<?php
namespace Highscore\Views;

use Highscore\Model\Player;

class PlayerAPIView extends APIView
{
    public function save($request)
    {
        try {
            $playerName = $_REQUEST['player'];
            $value = (int) $_REQUEST['value'];
            if(!$player = Player::getInstanceByPlayerName($playerName))
            {
                $player = new Player();
                $player->name = $playerName;
                $player->value = 0;
            }
            $player->value = ($value > $player->value) ? $value: $player->value;
            $player->save();
            echo 1;
            return;
        } catch (Exception $e) {
            echo 0;
            return;
        }
    }

    public function load($request)
    {
        $offset = (int) $_REQUEST['offset'];
        echo json_encode(Player::getPlayerTable($offset));
        return;
    }
}