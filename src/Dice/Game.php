<?php

declare(strict_types=1);

namespace johl20\Dice;

use function johl20\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use \johl20\Dice\Dice;
use \johl20\Dice\DiceHand;

/**
 * Class Game.
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "Dice",
            "message" => "Dice games are fun!",
        ];

        $die = new Dice();
        $die->roll();

        $diceHand = new DiceHand();
        $diceHand->roll();

        $data["dieLastRoll"] = $die->getLastRoll();
        $data["diceHandRoll"] = $diceHand->getLastRoll();
        
        $diceHand->roll();
        $data["diceHandRoll1"] = $diceHand->getLastRoll();

        $body = renderView("layout/dice.php", $data);
        sendResponse($body);
    }
}
