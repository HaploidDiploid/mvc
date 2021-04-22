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
<form action="game21post2" method="POST">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $dice1 = $_POST['dice1'];
  $dice2 = $_POST['dice2'];
}
?>

<h2>Saved dice:</h2>
<p class="dice-utf8">
<i class="dice-<?= $_POST['dice1'] ?>"></i>
<i class="dice-<?= $_POST['dice2'] ?>"></i>


<?php 
$sum_2dice = $game21->getLastRoll() + $game212->getLastRoll2();

$msg = "Roll Again!";

if($sum_2dice > 21) 
{
    $msg ="BUMMER. YOU SUCK.";
}
?>

<?php 
if(isset($_POST["dice1"]))
{
    $sumpost2 = $sum_2dice + $_POST["dice1"];
}
if(isset($_POST["dice2"]))
{
    $sumpost2 = $sumpost2 + $_POST["dice2"];
}
echo null;

if($sumpost2 = 21) {
    $msg = "You got 21! You Win! Now go outside for a moment.";
}
?>
<br>
<h2>Current Sum:</h2>
<h2><?= $sumpost2; ?></h2>
<br>
<h2><?= $msg ?></h2>

<h2><a href="game21">Play Again</a></h2>