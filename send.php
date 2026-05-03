<?php
// Проверяем, были ли отправлены данные методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Получаем данные и экранируем их для безопасности
    // htmlspecialchars предотвращает XSS-атаки
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    // Простая проверка на заполненность
    if (!empty($username) && !empty($email)) {
        echo "Привет, " . $username . "! Ваш email: " . $email;
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}
?>