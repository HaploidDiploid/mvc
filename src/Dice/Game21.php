<?php

declare(strict_types=1);

namespace johl20\Dice;

/**
 * Class Dice21.
 */
class Game21
{
    const FACES = 6;

    private ?int $roll = null;
    private ?int $roll2 = null;

    public function roll(): int
    {
        $this->roll = rand(1, self::FACES);

        return $this->roll;
    }

    public function roll2(): int
    {
        $this->roll2 = rand(1, self::FACES);

        return $this->roll2;
    }

    public function getLastRoll(): int
    {
        $_SESSION['dice'] = $this->roll;
        return $this->roll;
    }

    public function getLastRoll2(): int
    {
        $_SESSION['dice1'] = $this->roll2;
        return $this->roll2;
    }

}
