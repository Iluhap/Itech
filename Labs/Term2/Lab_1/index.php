 <!DOCTYPE HTML>
 <html>

 <head>
     <title>Lab1</title>
 </head>

 <body>
     <?php
        include 'conn.php';
        ?>
     <h2>Плакса Илья. КИУКИ-19-6</h2>
     <p>Вариант 5. Создать и заполнить произвольными данными БД для хранения информации о товарах в интернет–магазине (Рисунок 5.5).</p>
     <form method="GET" action="1.php">
         <p>Товары производителя: <select name="vendor" id="vendor">
                 <?php
                    $sqlSelect = "SELECT DISTINCT name FROM $db.vendors";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             <button> Получить </button>
         </p>
     </form>


     <form method="GET" action="2.php">
         <p>Товары категории <select name="category" id="category">
                 <?php
                    $sqlSelect = "SELECT DISTINCT name FROM $db.category";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             <button> Получить </button>
         </p>
     </form>


     <form method="GET" action="3.php">
         <p>По цене от <select name="min_price" id="min_price">
                 <?php
                    $sqlSelect = "SELECT DISTINCT price FROM $db.items";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             до <select name="max_price" id="max_price">
                 <?php
                    $sqlSelect = "SELECT DISTINCT * FROM $db.items";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[2]);
                        echo "</option>";
                    }
                    ?>
         </p>
         </select>
         <button> Получить </button>
     </form>
 </body>

 </html>