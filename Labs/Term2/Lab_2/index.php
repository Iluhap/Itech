<!DOCTYPE HTML>
<html>
<?php  include 'connection.php'; ?>
<head>
    <title>Lab2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function _1() {
            let quantity = document.getElementById("quantity").value;
            let result = localStorage.getItem(quantity);
            document.getElementById('res').innerHTML = result;
        }

        function _2() {
            let min_price = document.getElementById("min_price").value;
            let max_price = document.getElementById("max_price").value;
            let minMax = min_price + " " + max_price;
            let result = localStorage.getItem(minMax);
            document.getElementById('res').innerHTML = result;
        }
    </script>
</head>

<body>
    <h2>Плакса Илья. КИУКИ-19-6</h2>
    <p>Вариант 5. Создать и заполнить БД товаров интернет–магазина (в одной коллекции). Для товара обязательно указывается название, цена товара, количество единиц на складе. Возможные поля - фирма-производитель, категория товара (процессоры, материнские платы и т.д.), отзывы (могут быть и более одного), состояние (новое или б/у) и т.д.</p>
    <form action="1.php" method="GET">
        <input type="submit" value="Перечень производителей" name="vendor"><br>
    </form>

    <form method="get" action="2.php">
        <p><b>Товары, отсутствующие на складе</b>
            <select name="quantity" id="quantity" onchange="_1()">
                <?php
                $quantity = $collection->distinct("quantity");
                foreach ($quantity as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }
                echo '</select>';
                ?>

                <input type="submit" value="Получить">
        </p>
    </form>

    <form method="get" action="3.php">
        <p><b>По цене от <select name="min_price" id="min_price" onchange="_2()">
                    <?php
                    $min_price = $collection->distinct("price");
                    foreach ($min_price as $document) {
                        echo "<option>";
                        print($document);
                        echo "</option>";
                    }
                    echo '</select>';
                    ?>
                    до </b>
            <select name="max_price" id="max_price" onchange="_2()">
                <?php
                $max_price = $collection->distinct("price");
                foreach ($max_price as $document) {
                    echo "<option>";
                    print($document);
                    echo "</option>";
                }

                echo '</select>';
                ?>

                <input type="submit" value="Ок">
        </p>
    </form>
    <div id="res"></div>
</body>

</html>