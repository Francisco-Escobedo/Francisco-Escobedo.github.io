<?php 

$favorites = ['computers', 'cats', 'music', 'concerts', 'breakfast', 'denim', 'bicycles', 'keyboards', 'Seattle', 'Austin', 'video games']
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Things</title>
    <link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">
</head>
<body>
<h1> My Favorite Things </h1>

<ol>
<?php foreach ($favorites as $favorites) { ?>
    
    <li> <?php echo $favorites; ?> </li>

<?php } ?>

</ol>

</body>
</html>