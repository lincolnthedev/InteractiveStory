<?php

require('vendor/autoload.php');
$r = new Predis\Client();

    // Start

        $s = json_decode(file_get_contents('story.json'), true);

        if ( $s[$_GET["scene"]]["text"] !== null ) {
            echo($s[$_GET["scene"]]["text"]);
        } else {
            echo('This scene either does not exist or is missing');
        }

        echo('<br><br>');

        /*
        foreach($s[$_GET["scene"]]["buttons"] as $button) {
            echo('<a href="?scene=' . $button["scene"] . '">' . $button["name"] . '</a> ');
        }
        */



?>