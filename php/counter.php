<?php

function pageController(){

$count = $_GET['count'];

return ['count' => $count];

}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>

    <h1> Counter </h1>

    <h2><?= $count ?></h2>

    <a href='?count=<?= $count+1?>'> Up </a> 

    <br>

    <a href='?count=<?= $count-1?>'> Down </a>

</body>
</html>