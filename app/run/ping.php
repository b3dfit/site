<?php
// ping.php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $data['date'] = time();
    $data['datetime'] = (new \DateTime())->format('Y-m-d H:i:s');

    $sessionID = $data['sessionID'];
    $filename = $sessionID . '.log';
    $filepath = __DIR__ . '/logs/' . $filename;

    $logData = json_encode($data, JSON_PRETTY_PRINT) . PHP_EOL;

    if (file_put_contents($filepath, $logData, FILE_APPEND)) {
        echo 'Dados salvos com sucesso';
    } else {
        echo 'Erro ao salvar os dados';
    }
} else {
    echo 'Nenhum dado recebido';
}
?>
