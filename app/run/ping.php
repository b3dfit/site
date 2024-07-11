<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $userID = $data['userID'];
    $timestamp = $data['timestamp'];
    $filename = $userID . '_' . $timestamp . '.json';
    $filepath = __DIR__ . '/' . $filename;

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    if (file_put_contents($filepath, $jsonData)) {
        echo 'Dados salvos com sucesso';
    } else {
        echo 'Erro ao salvar os dados';
    }
} else {
    echo 'Nenhum dado recebido';
}
?>