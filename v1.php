<?php

require('vendor/autoload.php');
$r = new Predis\Client();

    // Start

        if ( $r->hget('scene-text', $_GET['scene']) !== null ) {
            echo($r->hget('scene-text', $_GET['scene']));
        } else {
            echo('This scene either does not exist or is missing');
        }

        echo('<br><br>');

        foreach($r->smembers($_GET['scene'] . '-buttons') as $button) {
            echo('<a href="?scene=' . $r->get('button' . $button . '-link') . '">' . $r->get('button' . $button . '-name') . '</a> ');
        }

?>