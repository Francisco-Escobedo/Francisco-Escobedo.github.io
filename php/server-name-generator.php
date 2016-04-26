<?php

function pageController(){

$adjective = ['adorable', 'bewildered', 'vengeful', 'relieved', 'fearless', 'cruel', 'bright', 'cooperative', 'diligent', 'glowing', 'filthy', 'scruffy', 'vivacious', 'embarrassed', 'defeated', 'brave'];

$displayedAdjective = $adjective[mt_rand(0, count($adjective) - 1)];

$nouns = ['chaos', 'balance', 'advantage', 'age', 'force', 'fiasco', 'celebration', 'caution', 'benefit', 'aim', 'death', 'beauty', 'comedy', 'disgrace', 'bias', 'concept', 'famine', 'humanity', 'illness'];

$displayedNoun = $nouns[mt_rand(0, count($nouns)-1)];

$printToSceen['serverName'] = $displayedAdjective . ' ' . $displayedNoun;

return $printToSceen;

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
    <p> <?= $serverName ?>   </p>

</body>

</html>




