<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    $fileContent = file_get_contents("userCredentials.txt");
    $userCredentials = explode("\n", $fileContent);

    foreach ($userCredentials as $credentails) {
        list($username, $password) = explode(":", $credentails);
        if ($enteredUsername == $username && $enteredPassword == $password) {
            echo "Ви залогінені";
            exit;
        }
    }

    echo "Неправильний логін або пароль";
}
?>
