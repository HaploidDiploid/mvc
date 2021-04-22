<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

use function johl20\Functions\url;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?? "MVC - Joacim Holm" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../htdocs/css/style.css">
        <link rel="icon" href="/favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    </head>
    <body>
        <header>
            <div class="logo">
                <i class="fas fa-kiwi-bird"></i>
            </div>
            <input type="checkbox" class="toggle" id="nav-toggle">
            <label for="nav-toggle" id="nav-toggle-label">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </label>
            <nav>
                <ul>
                    <li>
                        <a href="<?= url("/") ?>"><i class="fas fa-poop"></i>Index</a>
                    </li>
                    <li>
                        <a href="<?= url("/session") ?>"><i class="fas fa-globe-africa"></i>Session</a>
                    </li>
                    <li>
                        <a href="<?= url("/debug") ?>"><i class="fas fa-fire-extinguisher"></i>Debug</a>
                    </li>
                    <li>
                        <a href="<?= url("/dice") ?>"><i class="fas fa-dice"></i>Dice</a>
                    </li>
                    <li>
                        <a href="<?= url("/newpage") ?>"><i class="fas fa-dice"></i>5 Dice</a>
                    </li>
                    <li>
                        <a href="<?= url("/game21") ?>"><i class="fas fa-dice"></i>21</a>
                    </li>
                </ul>
            </nav>  
        </header>
        <main>