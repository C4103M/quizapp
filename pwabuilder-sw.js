// This is the "Offline page" service worker

importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.2/workbox-sw.js');

const CACHE = "pwabuilder-page";

// TODO: replace the following with the correct offline fallback page i.e.: const offlineFallbackPage = "offline.html";
const offlineFallbackPage = "offline.html";

self.addEventListener("message", (event) => {
  if (event.data && event.data.type === "SKIP_WAITING") {
    self.skipWaiting();
  }
});

self.addEventListener('install', async (event) => {
  event.waitUntil(
    caches.open(CACHE)
      .then((cache) => cache.add(offlineFallbackPage))
  );
});

if (workbox.navigationPreload.isSupported()) {
  workbox.navigationPreload.enable();
}

self.addEventListener('fetch', (event) => {
  if (event.request.mode === 'navigate') {
    event.respondWith((async () => {
      try {
        const preloadResp = await event.preloadResponse;

        if (preloadResp) {
          return preloadResp;
        }

        const networkResp = await fetch(event.request);
        return networkResp;
      } catch (error) {

        const cache = await caches.open(CACHE);
        const cachedResp = await cache.match(offlineFallbackPage);
        return cachedResp;
      }
    })());
  }
});

self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open('cache-nome').then(function (cache) {
      return cache.addAll([
        './font/fonte1/Cloude_Regular_Bold_1.02.otf'
        // Adicione todos os arquivos que você deseja armazenar em cache
      ]);
    })
  );
});

self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request).then(function (response) {
      // Se o recurso estiver no cache, retorna diretamente do cache
      if (response) {
        return response;
      }

      // Se o recurso não estiver no cache, busca na rede e armazena em cache para futuras solicitações
      return fetch(event.request).then(function (networkResponse) {
        // Abre o cache e armazena a cópia da rede para uso futuro
        caches.open('cache-nome').then(function (cache) {
          cache.put(event.request, networkResponse.clone());
        });

        // Retorna a resposta da rede
        return networkResponse;
      });
    })
  );
});
