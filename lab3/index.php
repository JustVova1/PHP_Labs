<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Введення даних</title>
</head>
<body>
    <?php
        //  ------------  Завдання 1  ------------
        
        $numbers = [4, 2, 5, 3, 6];
        foreach ($numbers as $number) {
            $square = $number * $number;
            echo "$number^2 = $square\n<br>";
        }

        //  ------------  Завдання 2 ------------

        $countries = array(
            "Україна" => array("населення" => 44000000, "столиця" => "Київ"),
            "Сполучені Штати Америки" => array("населення" => 328000000, "столиця" => "Вашингтон"),
            "Китай" => array("населення" => 1390000000, "столиця" => "Пекін"),
        );

        // 3x2
        echo "<table border='1'>";
        foreach ($countries as $country => $data) {
            echo "<tr><td>$country</td><td>" . $data['населення'] . ", " . $data['столиця'] . "</td></tr>";
        }
        echo "</table>";

        // 2x3
        echo "<br><table border='1'>";

        echo "<tr>";
        foreach ($countries as $country => $data) {
            echo "<td>$country</td>";
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($countries as $country => $data) {
            echo "<td>" . $data['населення'] . ", " . $data['столиця'] . "</td>";
        }
        echo "</tr>";
        echo "</table>";


          //  ------------  Завдання 3 ------------

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email'])) {
                $data = array(
                    'Прізвище' => $_POST['surname'],
                    'Ім\'я' => $_POST['name'],
                    'Вік' => $_POST['age'],
                    'E-mail' => $_POST['email']
                );
        
                echo '<table border="1">';
                foreach ($data as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo '</table>';
            } else {
                echo "Не всі дані були введені!";
            }
        }
       
    ?>
    
    <form action="" method="post">
        <label for="surname">Прізвище:</label><br>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">Ім'я:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="age">Вік:</label><br>
        <input type="number" id="age" name="age" required><br>
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Готово">
    </form>

    <?php

        //  ------------  Завдання 4 ------------

    $squares = [];
    for ($i = 10; $i <= 20; $i++) {
        $squares[] = $i * $i;
    }

    $cubes = [];
    for ($i = 1; $i <= 10; $i++) {
        $cubes[] = $i * $i * $i;
    }

    $merged_array = array_merge($squares, $cubes);

    echo "Об'єднаний масив: ";
    print_r($merged_array);

    ?>
    
</body>
</html>

<?php 

?>