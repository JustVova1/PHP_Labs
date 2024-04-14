<?php
// Інформація про розробника
$developerName = "Іван";
$developerPosition = "Веб-розробник";
$developerEmail = "ivan@example.com";
?>

<?php echo '<?php'; ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Виконуємо завдання лабораторної роботи №1 !!!</title>
    <style>
        table {
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Інформація про розробника</h2>
    <p>Ім'я розробника: <?php echo $developerName; ?></p>
    <p>Посада: <?php echo $developerPosition; ?></p>
    <p>Email: <?php echo $developerEmail; ?></p>

    <h2>Таблиця кольорів HTML</h2>
    <table>
        <tr>
            <td style="background-color: red;"></td>
            <td style="background-color: green;"></td>
            <td style="background-color: blue;"></td>
        </tr>
        <tr>
            <td style="background-color: yellow;"></td>
            <td style="background-color: orange;"></td>
            <td style="background-color: purple;"></td>
        </tr>
    </table>

    <h2>Таблиця множення</h2>
    <table>
        <tr>
            <th>&times;</th>
            <?php
            // Заголовки для таблиці
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Заповнення таблиці множення
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
