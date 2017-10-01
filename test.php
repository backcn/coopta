<?php
$url = "https://s-media-cache-ak0.pinimg.com/originals/9f/9c/5f/9f9c5f30bb905f6189ce0381b4f05500.jpg";
$img = file_get_contents($url);
file_put_contents("aa.jpg",$img);

?>