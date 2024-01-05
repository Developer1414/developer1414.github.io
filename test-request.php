<?php
// Проверяем, был ли выполнен GET-запрос
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Генерируем рандомное число от 1 до 100
    $randomNumber = rand(1, 100);

    // Возвращаем ответ в формате JSON
    header('Content-Type: application/json');
    echo json_encode(['randomNumber' => $randomNumber]);
} else {
    // Возвращаем ошибку, если запрос не был GET
    header("HTTP/1.1 405 Method Not Allowed");
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
