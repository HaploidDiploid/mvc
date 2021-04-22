<?php

/**
 * Generate Dice function-view
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;

$die = new \johl20\Dice\Dice();
$die->roll();

$graphicalDiceHand = new \johl20\Dice\GraphicalDice();
$graphicalDiceHand->roll();

?><h1><?= $header ?></h1>

<p><?= $message ?></p>

<p>Here is a dice:</p>
<p class="dice-utf8">
<i class="dice-<?= $graphicalDiceHand->getLastroll() ?>"></i></p>


<script>
    function roll()
    {
        var die1 = document.getElementById("dice1");
        var die2 = document.getElementById("dice2");
        var die3 = document.getElementById("dice3");
        var die4 = document.getElementById("dice4");
        var die5 = document.getElementById("dice5");

        var tot = document.getElementById("total");
        var yat = document.getElementById("yatzy");

        var diceOne = Math.floor(Math.random()*6) + 1;
        var diceTwo = Math.floor(Math.random()*6) + 1;
        var diceThree = Math.floor(Math.random()*6) + 1;
        var diceFour = Math.floor(Math.random()*6) + 1;
        var diceFive = Math.floor(Math.random()*6) + 1;

        var total = diceOne + diceTwo + diceThree + diceFour + diceFive;

        // $_SESSION[dice1d] = diceOne;
        // $_SESSION[dice2d] = diceTwo;
        // $_SESSION[dice3d] = diceThree;
        // $_SESSION[dice4d] = diceFour;
        // $_SESSION[dice5d] = diceFive;

        if(diceOne==diceTwo && diceOne==diceTwo && diceOne==diceThree && diceOne==diceFour && diceThree==diceFive)
        {
            yat.innerHTML = "YATZY!! Fem lika! Grattis! Gå utomhus en stund nu.";
        }

        die1.innerHTML = diceOne;
        die2.innerHTML = diceTwo;
        die3.innerHTML = diceThree;
        die4.innerHTML = diceFour;
        die5.innerHTML = diceFive;
        tot.innerHTML = total;

    }

    var count = 0;

    function clicks()
    {
        count++;
        var button = document.getElementById("btn");
        var display = document.getElementById("displayCount");
        display.innerHTML = count;
    }

</script>


<p>Roll the dice again <br>

<button id="btn" onclick="clicks(); roll();">Roll all Dice!</button>
</p>



<!--HERE ARE THE DICE-->
<p class="dice-utf8">
<i id="dice1" >0</i>
<i id="dice2" >0</i>
<i id="dice3" >0</i>
<i id="dice4" >0</i>
<i id="dice5" >0</i>
</p>
<br><br>
<h2>Current total:</h2>
<h2 id="total"></h2>
<br><br>
<h2 id="yatzy"></h2>
<h2 id="counter">Total number of rolls:</h2>
<p>You have made <span id="displayCount">0</span> rolls.</p>
<br><br><br><br>
