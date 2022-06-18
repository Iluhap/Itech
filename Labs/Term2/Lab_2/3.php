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
        if (isset($_GET['min_price']) && isset($_GET['max_price'])) {
            include 'connection.php';
            $min_price = $_GET['min_price'];
            $max_price = $_GET['max_price'];
            $key = $min_price . " ".  $max_price;
            $max_price = intval($max_price,10);
            $min_price = intval($min_price,10);
            $conditional;
            $cursor = $collection->find(array(
                    'price' => array('$gte'=> $min_price, '$lte' => $max_price),
            ));
            $result = "<p>Перечень товаров с ценой от <b>$min_price до $max_price</b>: <ol>";
            foreach ($cursor as $document) {
                $item = $document['title'];
                $price = $document['price'];
                $vendor = $document['Vendor'];
                $result .= "<li>Наименование - $item, поставщик - $vendor, цена - $price</li>";
            }
            $result.="</ol>";
            echo $result;
        }   
    
    ?>
    </tbody>
</table>
<?php
echo "<script> localStorage.setItem('$key', '$result');</script>";
?>