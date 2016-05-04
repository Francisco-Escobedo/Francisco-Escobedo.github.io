<?php

require_once 'ServerFunction.php';

function pageController(){

$printToScreen=array();
$adj = ServerFunction::generateAdjective();
$noun = ServerFunction::generateNoun();
$printToScreen['serverName']= "$adj $noun";
return $printToScreen;

}

extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>

<body>

    <h1> Server Name Generator </h1>
    <p> <?= $serverName ?> </p>

</body>

</html>




