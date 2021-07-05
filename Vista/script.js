// Registraremos el Service Worker 

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('sw.js')
      .then(function() {
          console.log('ServiceWorker registrado con exito!');
      })
      .catch(function(err) {
          console.log('ServiceWorker no se registro :(', err);
      });
  });
}