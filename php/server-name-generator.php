<?php

require_once 'ServerFunction.php';

function pageController(){

return ['serverName' => ServerFunction::serverName()];

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




