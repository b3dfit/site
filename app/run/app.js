let cronometroInterval;
let pingInterval;
let notificationInterval;
let startTime;
const userID = '12345'; // Exemplo de ID do usuário
const sessionID = `${userID}-${Date.now()}`; // ID único da sessão
const audio = new Audio('180bpm.m4a'); // Caminho para o som

function formatTime(ms) {
    const totalSeconds = Math.floor(ms / 1000);
    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.floor((totalSeconds % 3600) / 60);
    const seconds = totalSeconds % 60;
    return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}

function updateCronometro() {
    const now = Date.now();
    const elapsedTime = now - startTime;
    document.getElementById('cronometro').textContent = formatTime(elapsedTime);
}

function startCronometro() {
    navigator.geolocation.getCurrentPosition(function (position) {
        startTime = Date.now();
        cronometroInterval = setInterval(updateCronometro, 1000);
        pingInterval = setInterval(sendPing, 10000); // Envia dados a cada 10 segundos
        notificationInterval = setInterval(sendNotification, 60000); // Envia notificação a cada 1 minuto
        document.getElementById('startBtn').classList.add('hidden');
        document.getElementById('stopBtn').classList.remove('hidden');
        document.getElementById('status').innerHTML = 'Corrida em andamento...';
        audio.play(); // Toca o áudio quando a corrida começa
        sendPing(); // Envia o primeiro ping imediatamente
    }, function (error) {
        document.getElementById('status').textContent = 'Permissão de geolocalização negada. Não é possível iniciar a corrida.';
    });
}

function sendPing() {
    navigator.geolocation.getCurrentPosition(function (position) {
        const lat = position.coords.latitude;
        const lon = position.coords.longitude;
        const timestamp = Date.now();
        const clima = '25'; // Exemplo de clima (em graus Celsius)

        fetch('/app/run/ping.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                userID: userID,
                sessionID: sessionID,
                latitude: lat,
                longitude: lon,
                timestamp: timestamp,
                clima: clima
            })
        }).then(response => response.text()).then(data => {
            document.getElementById('lastRequest').textContent = `Última requisição: ${new Date().toLocaleTimeString()} - ${data}`;
        }).catch(error => {
            document.getElementById('lastRequest').textContent = `Erro ao enviar ping: ${error}`;
        });
    });
}

function sendNotification() {
    if (Notification.permission === 'granted') {
        navigator.serviceWorker.ready.then(function(registration) {
            registration.showNotification('Continua firme!', {
                body: 'Você está indo bem. Continue assim!',
                icon: '/path/to/icon.png' // Caminho para o ícone da notificação
            });
        });
    }
}

function stopCronometro() {
    clearInterval(cronometroInterval);
    clearInterval(pingInterval);
    clearInterval(notificationInterval);
    document.getElementById('startBtn').classList.remove('hidden');
    document.getElementById('stopBtn').classList.add('hidden');
    document.getElementById('status').textContent = 'Corrida finalizada.';
    audio.pause(); // Para o áudio quando a corrida termina
    audio.currentTime = 0; // Reseta o tempo do áudio
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('startBtn').addEventListener('click', () => {
        // Solicitar permissão para notificações
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                startCronometro();
            } else {
                document.getElementById('status').textContent = 'Permissão para notificações não concedida.';
            }
        });
    });
    document.getElementById('stopBtn').addEventListener('click', stopCronometro);
});
