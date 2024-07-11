self.addEventListener('install', function(event) {
    self.skipWaiting();
});

self.addEventListener('activate', function(event) {
    event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', function(event) {
    if (event.request.url.includes('/app/run/ping.php')) {
        event.respondWith(
            fetch(event.request).then(function(response) {
                if (response.ok) {
                    self.clients.matchAll().then(function(clients) {
                        clients.forEach(function(client) {
                            client.postMessage({
                                type: 'ping-success'
                            });
                        });
                    });
                }
                return response;
            }).catch(function(error) {
                console.error('Erro ao enviar ping:', error);
            })
        );
    }
});
