<?php

// declare(strict_types=1);

namespace johl20\Dice;

/**
 * Class TwoDice.
 */
class TwoDice
{
    private array $dices;
    private int $sum;
   
    public function __construct()
    {
        for ($i = 0; $i <= 1; $i++) {
            $this->dices[$i] = new Dice();
        }
    }

    public function roll(): void
    {
        $this->sum = 0;
        for ($i = 0; $i <= 1; $i++) {
            $this->sum += $this->dices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 1; $i++) {
            $res .= $this->dices[$i]->getLastRoll() . ", ";
        }

        return $res . " = " . $this->sum;
    }
}
