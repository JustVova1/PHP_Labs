<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
    <style>
            table {
                border-collapse: collapse;
                width: 70%;
            }

            .cell {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }

            .color1 { background-color: #FF5733; }
            .color2 { background-color: #FFBD33; }
            .color3 { background-color: #FFDA33; }
            .color4 { background-color: #ECFF33; }
            .color5 { background-color: #A0FF33; }
            .color6 { background-color: #33FF57; }
            .color7 { background-color: #33FFBD; }
            .color8 { background-color: #33FFDA; }
            .color9 { background-color: #33ECFF; }
            .color10 { background-color: #3364FF; }

        </style>
        <script>
        function guessNumber() {
            var randomNumber = <?php echo rand(1, 10); ?>;
            var guess;
            do {
                guess = prompt("Виберіть число від 1 до 10:");
                if (guess == null) {
                    return;
                }
                guess = parseInt(guess);
                if (guess === randomNumber) {
                    alert("Ви вгадали");
                    return;
                } else if (guess < randomNumber) {
                    alert("Число більше.");
                } else {
                    alert("Число менше.");
                }
            } while (true);
        }
    </script>
<?php
/*  ---------------- Завдання 1 ----------------  */

if(isset($_POST['submit_1'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    echo "<h2>Результати №1 </h2>";
    echo "<p>$number1 + $number2 = " . ($number1 + $number2) . "</p>";
    echo "<p>$number1 - $number2 = " . ($number1 - $number2) . "</p>";
    echo "<p>$number1 * $number2 = " . ($number1 * $number2) . "</p>";
    echo "<p>$number1 / $number2 = " . ($number1 / $number2) . "</p>";
    echo "<p>$number1 % $number2 = " . ($number1 % $number2) . "</p>";
}
/*  ---------------- Завдання 2 ----------------  */

elseif(isset($_POST['submit_2'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    echo "<h2>Результат порівняння чисел  №2</h2>";
    if ($number1 > $number2) {
        echo "<p>Більше число: $number1</p>";
    } elseif ($number1 < $number2) {
        echo "<p>Більше число: $number2</p>";
    } else {
        echo "<p>Числа рівні</p>";
    }
}

/*  ---------------- Завдання 3 ----------------  */

$registeredUsers = array(
    "log1" => "Рамський Петре Івановичу",
    "log2" => "Слобоженко Тарасе Михайлович",
    "log3" => "Зирянов Михайле Михайловичу",
    "log4" => "Гоголь Миколо Васильовичу"
);

if(isset($_POST['submit_3'])) {
    $login = $_POST['login1'];

    if(array_key_exists($login, $registeredUsers)) {
        echo "<h2>Доброго дня, {$registeredUsers[$login]}!</h2>";
    } else {
        echo "<h2>Вибачте, Ви у нас не зареєстровані!</h2>";
    }
}

/*  ---------------- Завдання 4 ----------------  */

$registeredUsers = array(
    "log1" => "pass1",
    "log2" => "pass2",
    "log3" => "pass3",
    "log4" => "pass4"
);

if(isset($_POST['submit_4'])) {
    $login = $_POST['login2'];
    $password = $_POST['password'];

     switch($login) {
        case 'log1':
            if($password === 'pass1') {
                echo "<h2>Доброго дня, Рамський Петре Івановичу!</h2>";
            } else {
                echo "<h2>Вибачте, неправильний пароль!</h2>";
            }
            break;
        case 'log2':
            if($password === 'pass2') {
                echo "<h2>Доброго дня, Слобоженко Тарасе Михайлович!</h2>";
            } else {
                echo "<h2>Вибачте, неправильний пароль!</h2>";
            }
            break;
        case 'log3':
            if($password === 'pass3') {
                echo "<h2>Доброго дня, Зирянов Михайле Михайловичу!</h2>";
            } else {
                echo "<h2>Вибачте, неправильний пароль!</h2>";
            }
            break;
        case 'log4':
            if($password === 'pass4') {
                echo "<h2>Доброго дня, Гоголь Миколо Васильовичу!</h2>";
            } else {
                echo "<h2>Вибачте, неправильний пароль!</h2>";
            }
            break;
        default:
            echo "<h2>Вибачте, Ви у нас не зареєстровані!</h2>";
            break;
    }
}

/*  ---------------- Завдання 5 ----------------  */

if(isset($_POST['check_even'])) {
    $number = $_POST['number_5'];

    if(is_numeric($number)) {
        if($number % 2 == 0) {
            echo "<p>$number є парним числом.</p>";
        } else {
            echo "<p>$number є непарним числом.</p>";
        }
    } else {
        echo "<p>Будь ласка, введіть число.</p>";
    }
}
/*  ---------------- Завдання 6 ----------------  */

if(isset($_POST['check_6'])) {
    $number = $_POST['number_6'];


    if(is_numeric($number)) {
        if(is_int($number + 0)) {
            if($number % 2 == 0) {
                echo "<p>$number є парним цілим числом.</p>";
            } else {
                echo "<p>$number є непарним цілим числом.</p>";
            }
        } else {
            echo "<p>Введене число не є цілим числом.</p>";
        }
    } else {
        echo "<p>Введіть число.</p>";
    }
}
/*  ---------------- Завдання 7 ----------------  */

if(isset($_POST['check_7'])) {
    $guessed_number = isset($_POST['number_7']) ? $_POST['number_7'] : null;
    $target_number = 6; 

    if($guessed_number == $target_number) {
        echo "<h2 style='color: red;'>ПРАВИЛЬНО!</h2>";
    } else {
        echo "<p>Число $guessed_number - не правильно.</p>";
        echo "<p>Спробуйте ще раз!</p>";
    }
}


/*  ---------------- Завдання 8 ----------------  */

if(isset($_POST['check_8'])) {
    $guessed_number = isset($_POST['number_8']) ? $_POST['number_8'] : null;
    $target_number = 6; 

    if($guessed_number == $target_number) {
        echo "<h2 style='color: red;'>ПРАВИЛЬНО!</h2>";
    } else {
        if ($guessed_number > $target_number) {
            echo "<p>Загадане число менше за $guessed_number.</p>";
        } else {
            echo "<p>Загадане число більше за $guessed_number.</p>";
        }
        echo "<p>Спробуйте ще раз!</p>";
    }
}

/*  ---------------- Завдання 9 ----------------  */

if (isset($_POST['submit_9'])) {
    $number = intval($_POST['number_9']);
?>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        $color_class = "color" . ($i % 10 + 1); 
        echo "<tr class='$color_class'>";
        echo "<td class='cell'>$number</td>";
        echo "<td class='cell'>×</td>";
        echo "<td class='cell'>$i</td>";
        echo "<td class='cell'>=</td>";
        echo "<td class='cell'>$result</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
}

/*  ---------------- Завдання 10 ----------------  */

?>
<?php
    if (isset($_POST['submit_10'])) {
        $start = intval($_POST['numberStart_10']);
        $end = intval($_POST['numberEnd_10']);
        if ($start > $end) {
            echo "<p>Помилка: Початкове число має бути меншим за кінцеве число.</p>";
        } else {
    ?>
    <table>
        <tr>
            <th class="cell">Число</th>
            <th class="cell">Відношення</th>
        </tr>
        <?php
            for ($i = $start; $i <= $end; $i++) {
                echo "<tr>";
                echo "<td class='cell'>$i</td>";
                echo "<td class='cell'>" . (10 / $i) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <?php
        }
    }
?>


<?php
/*  ---------------- Завдання 11 ----------------  */

    if (isset($_POST['submit_11'])) {
        $number1 = intval($_POST['numberStart_11']);
        $number2 = intval($_POST['numberEnd_11']);

        $min_number = min($number1, $number2);
        $max_number = max($number1, $number2);

        if ($min_number === 0) {
            echo "<p>Помилка: Ділення на нуль.</p>";
        } else {
?>
    <table>
        <tr>
            <th class="cell">Число</th>
            <th class="cell">Відношення</th>
        </tr>
        <?php
            for ($i = $min_number; $i <= $max_number; $i++) {
                if ($i === 0) {
                    echo "<tr><td class='cell'>$i</td><td class='cell'>Ділення на 0</td></tr>";
                    break;
                }
                echo "<tr>";
                echo "<td class='cell'>$i</td>";
                echo "<td class='cell'>" . (10 / $i) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
<?php
        }
    }
?>


<?php
  /*  ---------------- Завдання 13 ----------------  */

if(isset($_POST['submit_13'])){
    $startBacteria = $_POST['bacteriumStart_13'];
    $endBacteria = $_POST['bacteriumEnd_13'];

    if($startBacteria >= $endBacteria){
        echo "Початкова кількість бактерій має бути менше за кінцеву!";
    } else {
        $hours = 0;
        $currentBacteria = $startBacteria;
        while($currentBacteria < $endBacteria){
            $hours++;
            $currentBacteria *= 2;
            echo "Минуло $hours годин. Маємо $currentBacteria бактерій<br>";
        }
    }
}

?>

<h2>Форма для арифметичних операцій №1</h2>

<form action="" method="post">
    <label for="number1">Число 1:</label>
    <input type="text" id="number1" name="number1"><br><br>
    <label for="number2">Число 2:</label>
    <input type="text" id="number2" name="number2"><br><br>
    <button type="submit" name="submit_1">Вивести дії</button>
</form>

<h2>Форма для порівняння чисел №2</h2>

<form action="" method="post">
    <label for="number1_comp">Число 1:</label>
    <input type="text" id="number1_comp" name="number1"><br><br>
    <label for="number2_comp">Число 2:</label>
    <input type="text" id="number2_comp" name="number2"><br><br>
    <button type="submit" name="submit_2">Вивести більше число</button>
</form>



<h2>Форма для перевірки логіну №3</h2>

<form action="" method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login1" name="login1"><br><br>
    <button type="submit" name="submit_3">Перевіримо</button>
</form>

<h2>Форма для перевірки логіну та пароля №4</h2>

<form action="" method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login2" name="login2"><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit" name="submit_4">Перевіримо</button>
</form>

<h2>Форма для перевірки числа на парність №5</h2>

    <form action="" method="post">
        <label for="number_5">Число:</label>
        <input type="text" id="number_5" name="number_5"><br><br>
        <button type="submit" name="check_5">Перевіримо число на парність</button>
    </form>

<h2>Форма для перевірки чи ціле число та чи є парним №6</h2>

    <form action="" method="post">
        <label for="number_6">Число:</label>
        <input type="text" id="number_6" name="number_6"><br><br>
        <button type="submit" name="check_6">Перевіримо число на парність</button>
    </form>

<h2>Відгадайте число №7</h2>

<form action="" method="post">
    <label for="number">Введіть число:</label>
    <input type="text" id="number_7" name="number_7">
    <button type="submit" name="check_7">Перевірка!</button>
</form>

<h2>Відгадайте число №8</h2>
<form action="" method="post">
    <label for="number">Введіть число:</label>
    <input type="text" id="number_8" name="number_8">
    <button type="submit" name="check_8">Перевірка!</button>
</form>

<h2>Табличка множення №9</h2>

<form action="" method="post">
        <label for="number">Введіть число:</label>
        <input type="text" id="number_9" name="number_9">
        <button type="submit" name="submit_9">Побудувати таблицю</button>
    </form>
    
<h2>Діапазон відношень до числа 10 №10</h2>
    <form action="" method="post">
        <label for="start">Початкове число:</label>
        <input type="number" id="numberStart_10" name="numberStart_10" >
        <label for="end">Кінцеве число:</label>
        <input type="number" id="numberEnd_10" name="numberEnd_10" >
        <button type="submit" name="submit_10">Побудувати таблицю</button>
    </form>

<h2>Діапазон відношень до числа 10 №11</h2>

<form action="" method="post">
        <label for="start">Початкове число:</label>
        <input type="number" id="numberStart_11" name="numberStart_11" >
        <label for="end">Кінцеве число:</label>
        <input type="number" id="numberEnd_11" name="numberEnd_11" >
        <button type="submit" name="submit_11">Побудувати таблицю</button>
    </form>

<h2>Відгадати число №12</h2>
<button onclick="guessNumber()">Відгадати число</button>

<h2>Відгадати число №13</h2>

<form method="post">
        <label for="start">Початкова кількість бактерій:</label>
        <input type="number" name="bacteriumStart_13" id="bacteriumStart_13" ><br><br>
        <label for="end">Кінцева кількість бактерій:</label>
        <input type="number" name="bacteriumEnd_13" id="bacteriumEnd_13" ><br><br>
        <button type="submit" name="submit_13">Вивести результат</button>
    </form>

<h2>Таблиця №14</h2>


<?php
function print_multiplication_table($number) {
    echo "<td>";
    for ($i = 1; $i <= 10; $i++) {
        echo "{$number} * $i = " . ($number * $i) . "<br>";
    }
    echo "</td>";
}
function call_table(){}
echo "<table border='1'>";
echo "<tr>";
for ($j = 2; $j <= 9; $j++) {
    print_multiplication_table($j);
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>
