<?php 

$my_file = fopen("position.txt" , "w");
$information = "lat:" . $_GET["lat"] . "\nlong:" . $GET["long"] . "\nip: " . $_SERVER["REMOTE_ADDR"] . "\user_agent:" . $_GET["user_agent"] ;
?>