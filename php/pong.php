<?php

function pageController(){

    if (!isset($_GET['count'])){
        $count = 0;
    } else {
        $count = $_GET['count'];
    }

    return ['count' => $count];

}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div>Hit Count: <?= $count ?></div>

<div><a href="ping.php?count=<?=$count+1?>">Hit</a></div>

<div><a href="ping.php?count=<?=$count='YOU LOSE'?>">Miss</a></div>

</body>
</html>

