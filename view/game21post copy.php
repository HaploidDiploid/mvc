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
<form action="game21post2" method="post">
<p class="dice-utf8">
<input type="checkbox" id="dice3" name="dice3" value="<?= $game21->getLastRoll() ?>">
<label for="dice3">
<i class="dice-<?= $game21->getLastRoll() ?>"></i>
</label>
<input type="checkbox" id="dice4" name="dice4" value="<?= $game212->getLastRoll2() ?>">
<label for="dice4">
<i class="dice-<?= $game212->getLastRoll2() ?>"></i>
</label>
<input type="submit" value="Try Again">
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
<h2>You've saved these dice:</h2>
<h2>
<?php 
if(isset($_POST["dice1"]))
{
    echo $_POST["dice1"];
}
echo null;
?><br>
<?php 
if(isset($_POST["dice2"]))
{
    echo $_POST["dice2"];
}
echo null;
?>
</h2><br>


<?php 
if(isset($_POST["dice1"]) || isset($_POST["dice2"]))
{
    $sumpost1 = $sum_2dice + $_POST["dice1"] + $_POST["dice2"];
}
echo null;
?><br>

<h2>Current Sum:</h2>
<h2><?= $sumpost1; ?></h2>