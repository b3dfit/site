<?php
// ping.php
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