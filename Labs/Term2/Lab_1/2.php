<!DOCTYPE HTML>
<html>
<head>
    <title>Lab1_2</title>
</head>
<body>
<?php
    include "conn.php";
    $category = $_GET['category']; 
    $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.category
    inner join $db.items 
    on $db.category.ID_Category = $db.items.fid_category
    where $db.category.name = :category"
    );
    $sqlSelect->execute(array('category' => $category));
    echo "Товары категории $category: ";
    echo "<ol>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
      $item = $cell[3];
      echo "<li> Товар: $item </li>";
    }
    echo "</ol>";
    ?>
</body>
<html>