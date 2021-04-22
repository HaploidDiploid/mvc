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
<form action="game21post3" method="post">
<p class="dice-utf8">
<input type="checkbox" id="dice5" name="dice5" value="<?= $game21->getLastRoll() ?>">
<label for="dice5">
<i class="dice-<?= $game21->getLastRoll() ?>"></i>
</label>
<input type="checkbox" id="dice6" name="dice6" value="<?= $game212->getLastRoll2() ?>">
<label for="dice6">
<i class="dice-<?= $game212->getLastRoll2() ?>"></i>
</label>
<input type="submit" value="Submit">
</form>


<?php 
$sum_2dice = $game21->getLastRoll() + $game212->getLastRoll2();

$msg = "Try Again";

if($sum_2dice == 8) 
{
    $msg ="BUMMER. YOU SUCK.";
}
?>
<h2><?= $msg ?></h2>
<h2>Saved dice:</h2>
<p class="dice-utf8">
<i class="dice-<?= $_POST['dice1'] ?>"></i>
<i class="dice-<?= $_POST['dice2'] ?>"></i>



<?php 
if(isset($_POST["dice1"]))
{
    $sumpost2 = $sum_2dice + $_POST["dice1"];
}
if(isset($_POST["dice2"]))
{
    $sumpost2 = $sumpost2 + $_POST["dice2"];
}
if(isset($_POST["dice3"]))
{
    $sumpost2 = $sumpost2 + $_POST["dice1"];
}
if(isset($_POST["dice4"]))
{
    $sumpost2 = $sumpost2 + $_POST["dice2"];
}
echo null;
?>
<br>

<h2>Current Sum:</h2>
<h2><?= $sumpost2; ?></h2>