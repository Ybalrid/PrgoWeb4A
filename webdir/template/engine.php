<?php

function doctype()
{
   echo "<!DOCTYPE html>\n";
}

function startHTML5()
{
    doctype();
    echo "<html>\n";
}

function endHTML5()
{
    echo "</html>\n\n";
}

function insertScripts()
{
    echo "\t<!-- javascript goes here -->\n";
}

function insertHeader($title, $css = "")
{
    echo "<head>\n";
    echo "\t<meta charset=\"UTF-8\">\n";
    if($css != "")
        echo "\t<link rel=\"stylesheet\" href=\"style/". $css ."\">\n";
    insertScripts();
    echo "\t<title>". $title . "</title>\n";
    echo "</head>\n";
}

function insertBodyDocument($body)
{
    echo "<body>\n";
    echo $body."\n";
    echo "</body>\n";
}

function getContent($filename)
{
    return "\n" . file_get_contents("content/".$filename) . "\n";
}



?>
