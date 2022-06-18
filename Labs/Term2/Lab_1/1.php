<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab1_1</title>
</head>
<body>
<?php
    include "conn.php";
    $vendor = $_GET['vendor']; 
    $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.vendors
    inner join $db.items 
    on $db.vendors.ID_VENDORS = $db.items.fid_vendor
    where $db.vendors.name = :vendor"
    );
    $sqlSelect->execute(array('vendor' => $vendor));
    echo "Товары производителя $vendor: ";
    echo "<ol>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
      $item = $cell[3];
      echo "<li> Товар: $item </li>";
    }
    echo "</ol>";
    ?>
</body>
<html>