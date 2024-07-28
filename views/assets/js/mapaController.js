document.addEventListener('DOMContentLoaded', function() {
    const botones = document.querySelectorAll('.rectangle');

    const urlPorID = {
      'centro-patrimonios': 'https://maps.app.goo.gl/ZB9H4LRPSv12ZYmH9', 
      'mcdonalds-banco': 'https://maps.app.goo.gl/h7zsorF4MLvvoZvK6', 
      'pizza-hut-avenida': 'https://maps.app.goo.gl/cVUcNezamkH5hjha8', 
      'hotel-balmoral': 'https://maps.app.goo.gl/bkjYA9TCioN8kjSF8', 
      'mcdonalds-plaza': 'https://maps.app.goo.gl/r4rShiDCFsPYYbin8', 
      'tienda-la-gloria': 'https://maps.app.goo.gl/hYdFFLMHg7cMMAf18'
    };

    botones.forEach(function(boton) {
      boton.addEventListener('click', function() {

        const id = this.id;

        const url = urlPorID[id];
  
        window.open(url);
      });
    });
  });
  