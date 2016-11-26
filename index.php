<?php
    $salidaCanales = '';

    for($n = 0; $n < 50; $n++) {
        $salidaCanales .= "<ul><li class='canal'>Canal $n</li>";
        $salidaEventos = '';
        for($e = 0; $e < 50; $e++) {
            $salidaEventos .= "<li class='evento'>foo $e var</li>";
        }
        $salidaCanales .= "$salidaEventos</ul>";
    }

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guía TV</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <input type="range" min="0" max="100" value="50" name="slider" id="slider">
        <section id="guia">
            <?=$salidaCanales?>
        </section>
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
