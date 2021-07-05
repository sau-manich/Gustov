var CACHE_NAME = 'Gustov';
  var urlsToCache = [
    '.',
  ];

  self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open(CACHE_NAME)
        .then(function(cache) {
          console.log('Cache open!');
          return cache.addAll(urlsToCache);
        })
    );
  });
  
  
  self.addEventListener('fetch', function(event) {
      event.respondWith(
          caches.match(event.request)
          .then(function(response) {
              if (response) {
                  return response;
              }
              return fetch(event.request);
          })
      );
  });