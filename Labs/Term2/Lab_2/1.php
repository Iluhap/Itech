<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["vendor"])) {
            include 'connection.php';
            $key = $_GET["vendor"];
            $statement = $collection->distinct("Vendor");
            $res = "";
            foreach ($statement as $value) {
                $res .= " <br> Производитель: {$value} ";}
        }
        echo $res;
    ?>
<?php
echo "<script> localStorage.setItem('$key', '$res'); </script>";
?>