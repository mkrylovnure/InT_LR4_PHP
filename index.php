<!DOCTYPE html>
<html>
<head>
    <title>Форма логіну</title>
</head>
<body>
    <h1>Форма логіну</h1>
    <form action="login.php" method="post">
        <label for="username">Логін:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Увійти">
    </form>
</body>
</html>
