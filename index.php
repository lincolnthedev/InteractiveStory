<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>

body {
  background-color: #121212;
}

</style>

<body>

<br><br>

<div class="ui container-lg bg-dark rounded shadow text-center text-light text-wrap" style="padding-top:1rem;padding-bottom:2rem">

<div class="container bg-dark bg-gradient rounded shadow-lg text-center text-wrap" style="padding-top:5px;padding-bottom:5px;width:50%">
<h2 style="font-size:40px">InteractiveStory</h2>
<h3>Beta</h3>
</div>

<br>






<?php

        $s = json_decode(file_get_contents('https://raw.githubusercontent.com/' . $_GET["data"] . '/main/story.json'), true);

        echo('<h3>' . $s['info']['story-name'] . '</h3><p>' . $s['info']['story-description'] . '</p><br>');

        if ( $s[$_GET["scene"]]["text"] !== null ) {
            echo($s[$_GET["scene"]]["text"]);
        } else {
            echo('This scene either does not exist or is missing');
        }

        echo('<br><br>');

        $buttons = explode(";;", $s[$_GET["scene"]]["buttons"]);

        foreach($buttons as $button) {
            $buttondata = explode("||", $button);
            echo('<a href="?data=' . $_GET['data'] . '&scene=' . $buttondata[1] . '">' . $buttondata[0] . '</a> ');
        }

?>





<br><br><br>

<div class="ui container-lg bg-dark rounded shadow-lg text-center text-light text-wrap" style="padding-top:2rem;padding-bottom:2rem">
<h2>InteractiveStory</h2>
<p>by lincolnthedev</p>
<p><a href="https://github.com/lincolnthedev/InteractiveStory" target="_blank">GitHub</a></p>
</div>

</body>
</html>