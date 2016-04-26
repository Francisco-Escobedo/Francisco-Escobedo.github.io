<?php

$adjectives = ['adorable', 'bewildered', 'vengeful', 'relieved', 'fearless', 'cruel', 'bright', 'cooperative', 'diligent', 'glowing', 'filthy', 'scruffy', 'vivacious', 'embarrassed', 'defeated', 'brave'];

$nouns = ['chaos', 'balance', 'advantage', 'age', 'force', 'fiasco', 'celebration', 'caution', 'benefit', 'aim', 'death', 'beauty', 'comedy', 'disgrace', 'bias', 'concept', 'famine', 'humanity', 'illness'];

function randElement($element){
$randomElem = mt_rand(1, count($element)-1);
Echo "$element[$randomElem] ";
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Server Name Generator</title>

<body>
    
</body>

<h1> Server Name Generator </h1>
<p> <?php randElement($adjectives);
    randElement($nouns); ?>   </p>

