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
    $sessionID = $data['sessionID'];
    $filename = $sessionID . '.geojson';
    $filepath = __DIR__ . '/logs/' . $filename;

    $feature = [
        'type' => 'Feature',
        'geometry' => [
            'type' => 'Point',
            'coordinates' => [(float)$data['longitude'], (float)$data['latitude']]
        ],
        'properties' => [
            'userID' => $data['userID'],
            'timestamp' => $data['timestamp'],
            'datetime' => (new \DateTime())->format('Y-m-d H:i:s'),
            'clima' => $data['clima']
        ]
    ];

    if (file_exists($filepath)) {
        $geojson = json_decode(file_get_contents($filepath), true);
        $geojson['features'][] = $feature;
    } else {
        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [$feature]
        ];
    }

    if (file_put_contents($filepath, json_encode($geojson, JSON_PRETTY_PRINT))) {
        echo 'Dados salvos com sucesso';
    } else {
        echo 'Erro ao salvar os dados';
    }
} else {
    echo 'Nenhum dado recebido';
}