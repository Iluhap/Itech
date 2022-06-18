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
    if (isset($_GET['quantity'])) {
        include 'connection.php';
        $quantity = $_GET['quantity'];
        $quantity = intval($quantity, 10);
        $cursor = $collection->find(
            ['quantity'=>$quantity]
        );
        
        $result = "<p>Перечень товаров с количеством <b>$quantity</b>:<ol> ";
        foreach ($cursor as $document) {
            $item = $document['title'];
            $price = $document['price'];
            $vendor = $document['Vendor'];
            $result .= "<li>Наименование - $item, поставщик - $vendor, цена - $price, количество - $quantity</li>";
        }
        $result.="</ol>";
        echo $result;
    }

    ?>
    </tbody>
    </table>
    <?php
        echo "<script> localStorage.setItem('$quantity', '$result');</script>";
    ?>