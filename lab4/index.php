<!DOCTYPE html>
<html>
<head>
    <title>Перевірка файлу</title>
</head>
<body>
    <h2>Перевірка файлу test.txt #1</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Введіть ім'я файлу: <input type="text" name="filename">
        <input type="submit" name="submit" value="Готово">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST["filename"];
        if (file_exists($filename)) {
            echo "Файл з іменем $filename у поточному каталозі існує.<br>";
            echo "Розмір: " . filesize($filename) . " байт<br>";
            echo "Час створення: " . date("Y-m-d H:i:s", filectime($filename)) . "<br>";
            echo "Час останньої модифікації: " . date("Y-m-d H:i:s", filemtime($filename)) . "<br>";
            echo "Вміст файла:<br>";
            echo file_get_contents($filename);
        } else {
            echo "Файл з іменем $filename у поточному каталозі не існує.";
        }
    }
    ?>

    <h2>Вміст файлу у вигляді таблиці #2</h2>
        <table border="1">
            <?php
            $file = fopen("test.txt", "r") or die("Неможливо відкрити файл");
            
            while (!feof($file)) {
                $tag = trim(fgets($file)); 
                $description = trim(fgets($file)); 
                echo "<tr><td><strong>&lt;$tag&gt;</td><td>$description</td></tr>"; // Вивід тегу та опису у вигляді рядка таблиці
            }
            
            fclose($file);
            ?>
        </table>
    
    <h2>Вміст файлу у вигляді таблиці #3</h2>
        <table border="1">
            <?php
            $count=0;
            $file = fopen("test.txt", "r") or die("Неможливо відкрити файл");
    
            while (!feof($file)) {
                $tag = trim(fgets($file)); 
                $description = trim(fgets($file)); 
                echo "<tr><td><strong>&lt;$tag&gt;</td><td>$description</td></tr>";
                $count++;
            }
            
            fclose($file);
            echo "<p>Всього у файлі описано тегів: $count</p>";
            ?>
        </table>
    

        <h2>Реєстрація та вхід #4</h2>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $mode = $_POST["mode"];

        // Перевірка режиму (Реєстрація або Вхід)
        if ($mode == "Реєстрація") {
            if (file_exists("$login.txt")) {
                echo "Такий користувач вже зареєстрований. Виберіть інший логін.";
            } else {
                // Запис пароля у файл
                file_put_contents("$login.txt", $password);
                echo "Користувач успішно зареєстрований.";
            }
        } elseif ($mode == "Вхід") {
            if (file_exists("$login.txt")) {
                $stored_password = file_get_contents("$login.txt");
                if ($password == $stored_password) {
                    echo "Доброго дня, $login!";
                } else {
                    echo "Пароль неправильний.";
                }
            } else {
                echo "Такий користувач не зареєстрований.";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Логін: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="radio" name="mode" value="Реєстрація"> Реєстрація
        <input type="radio" name="mode" value="Вхід"> Вхід<br>
        <input type="submit" value="Відправити">
    </form>
    
</body>
</html>