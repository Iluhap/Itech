<!DOCTYPE HTML>
<html>

<head>
    <title>Lab1_3</title>
</head>

<body>
<?php
    include "conn.php";
    $min_price = $_GET['min_price'];
    $max_price = $_GET['max_price'];
    $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.items
    where $db.items.price >= :min_price and $db.items.price <= :max_price"
    );
    $sqlSelect->execute(array('min_price' => $min_price, 'max_price' => $max_price)); 
    echo "Товары по цене от <b>$min_price</b> до <b>$max_price</b>: ";
    echo "<ol>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
      $item = $cell[1];
      $price = $cell[2];
      echo "<li> Товар: $item, цена этого товара <b>$price</b> </li>";
    }
    echo "</ol>";
    ?>
</body>
</body>
<html>