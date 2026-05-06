<?php
// ping.php
$allowed_origins = [
    'https://b3d.com.br',
    'https://www.b3d.com.br'
];

if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
}

header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Verificação de segurança adicional para o ambiente online
if (!isset($_SERVER['HTTP_ORIGIN']) || !in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('HTTP/1.1 403 Forbidden');
    echo "Acesso restrito.";
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $sessionID = $data['sessionID'];
    $logDir = __DIR__ . '/logs';
    $filename = $sessionID . '.geojson';
    $filepath = $logDir . '/' . $filename;

    // Cria a pasta de log se não existir
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }

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
?>