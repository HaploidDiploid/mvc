<?php

// declare(strict_types=1);

namespace johl20\Dice;

/**
 * Class DiceHand.
 */
class DiceHand
{
    private array $dices;
    private int $sum;
   
    public function __construct()
    {
        for ($i = 0; $i <= 5; $i++) {
            $this->dices[$i] = new Dice();
        }
    }

    public function roll(): void
    {
        $this->sum = 0;
        for ($i = 0; $i <= 5; $i++) {
            $this->sum += $this->dices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 5; $i++) {
            $res .= $this->dices[$i]->getLastRoll() . ", ";
        }

        $_SESSION = $this->sum;

        return $res . " = " . $this->sum;
    }
}
