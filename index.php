<?php
    $salidaCanales = '';

    $salidaCanales = "<ul>";
    for($n = 0; $n < 50; $n++) {
        $salidaCanales .= "<li class='canal'>Canal $n</li>";
        $salidaEventos .= "<ul>";
        $salidaEventosCanal = '';
        for($e = 0; $e < 50; $e++) {
            $salidaEventosCanal .= "<li class='evento'>foo $e var</li>";
        }
        $salidaEventos .= "$salidaEventosCanal</ul>";
    }
    $salidaCanales .= "</ul>";

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Guía TV</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>
    <body>
        <div id="tools">
            <input type="range" min="0" max="100" value="50" name="slider" id="slider">
        </div>
        <section id="guia">
            <div id="canales"><?=$salidaCanales?></div>
            <div id="eventos"><?=$salidaEventos?></div>
        </section>
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
