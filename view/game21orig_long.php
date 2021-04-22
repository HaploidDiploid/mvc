<?php

/**
 * Generate Dice function-view
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

$die = new \johl20\Dice\Dice();
$die->roll();

$game21 = new \johl20\Dice\Game21();
$game21->roll();

$game212 = new \johl20\Dice\Game21();
$game212->roll2();

?><h1><?= $header ?></h1>

<p><?= $message ?></p>
<form action="game21post" method="post">
<p class="dice-utf8">
<input type="checkbox" id="dice1" name="dice1" value="<?= $game21->getLastRoll() ?>">
<label for="dice1">
<i class="dice-<?= $game21->getLastRoll() ?>"></i>
</label>
<input type="checkbox" id="dice2" name="dice2" value="<?= $game212->getLastRoll2() ?>">
<label for="dice2">
<i class="dice-<?= $game212->getLastRoll2() ?>"></i>
</label>
<input type="submit" value="Try Again">
</form>
<h2>Sum:</h2>
<h2><?= $game21->getLastRoll() + $game212->getLastRoll2() ?></h2>

<?php 
$sum_2dice = $game21->getLastRoll() + $game212->getLastRoll2();
$dice1 = $game21->getLastRoll();
$dice2 = $game212->getLastRoll2();

$msg = "Try Again";

if($game21->getLastRoll() == $game212->getLastRoll2())
{
    $msg ="SAMESIES! Roll Again!";
}

if($game21->getLastRoll() == 1 && $game212->getLastRoll2() == 1)
{
    $msg ="Snake Eyes!";
}

if($game21->getLastRoll() == 2 && $game212->getLastRoll2() == 2)
{
    $msg ="Double Two's!";
}

if($game21->getLastRoll() == 3 && $game212->getLastRoll2() == 3)
{
    $msg ="Double Three's!";
}

?>
<h2><?= $msg ?></h2>