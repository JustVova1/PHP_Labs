<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "lab7"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$email = $_POST['email'];
$note = $_POST['note'];
$sql = "INSERT INTO Kor (login, password, name, date, gender, country, email, note)
        VALUES ('$login', '$password', '$name', '$date', '$gender', '$country', '$email', '$note')";

if ($conn->query($sql) === TRUE) {
    echo "Дані користувача успішно додані до бази даних.";
} else {
    echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM Kor";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<h2>Список користувачів:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["login"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Немає жодного користувача.";
}
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація користувача</title>
</head>
<body>
    <h2>Форма реєстрації користувача</h2>
    <form action="" method="post">
        <label for="login">Логін:</label>
        <input type="text" name="login" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br><br>

        <label for="name">Ім'я:</label>
        <input type="text" name="name" required><br><br>

        <label for="date">Дата народження:</label>
        <input type="date" name="date" required><br><br>

        <label for="gender">Стать:</label>
        <select name="gender" required>
            <option value="male">Чоловіча</option>
            <option value="female">Жіноча</option>
          
        </select><br><br>

        <label for="country">Країна:</label>
        <input type="text" name="country" required><br><br>

        <label for="email">Електронна пошта:</label>
        <input type="email" name="email" required><br><br>

        <label for="note">Примітка:</label><br>
        <textarea name="note" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Зареєструватися">
    </form>
</body>
</html>