<?php

//Enable the session system
session_start();

//Import our custom template engine
require_once("./template/engine.php");

//Throw some clean HTML code on the page using the engine functions 
startHTML5();
insertHeader("This is the index","main.css");

$content = getContent("startPage.html");
insertBodyDocument($content);

endHTML5();

?>
