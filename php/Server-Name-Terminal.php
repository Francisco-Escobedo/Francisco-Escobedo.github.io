<?php

require_once 'ServerFunction.php';

function pageController(){

return ['serverName' => ServerFunction::serverName()];

}

extract(pageController());

echo $serverName;

?>