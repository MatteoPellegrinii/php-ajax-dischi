<?php include_once __DIR__ . '/dati.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>

</head>
<body>
    <div id="app">
        <div class="contenitore">
        <?php
      foreach ($arrayDisc as $key => $value) {
        echo "<div class='disc'>
        <img src= {$value["poster"]} >
        <h4> {$value["title"]} </h2>
        <h5> {$value["author"]} </h5>
        <h6> {$value["genre"]} </h6>
        <h6> {$value["year"]} </h6>
        </div>";
        };

     ?>
        </div>
    </div>

    
</body>
</html>