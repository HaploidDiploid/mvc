<?php

/**
 * Generate Dice function-view
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

?>

<h1><?= $header ?></h1>

<p><?= $message ?></p>

<p>What does the dice say?</p>

<p class="dice-utf8">
<i class="dice-<?= $dieLastRoll ?>"></i></p>

<p>Full DiceHand:</p>

<p><?= $diceHandRoll ?></p>

<p>Second Full DiceHand:</p>

<p><?= $diceHandRoll1 ?></p>
