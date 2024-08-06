document.addEventListener('DOMContentLoaded', function() {
  const select = document.getElementById('provincias');
  const iframeContainer = document.querySelector('.iframe-container');
  const iframe = document.getElementById('mapa');

  fetch('../model/provincias.php')
    .then(response => response.json())
    .then(data => {
      data.forEach(provincia => {
        const option = document.createElement('option');
        option.value = provincia.idProvincia;
        option.textContent = provincia.nombre;
        select.appendChild(option);
      });

      actualizarIframe(data[0].mapa);

      select.addEventListener('change', function() {
        const selectedId = this.value;
        const selectedProvincia = data.find(prov => prov.idProvincia == selectedId);
        actualizarIframe(selectedProvincia.mapa);

        cargarLugares(selectedId);
      });

      cargarLugares(data[0].idProvincia);
    })
    .catch(error => console.error('Error al cargar provincias:', error));
});

function actualizarIframe(contenido) {
  const iframeContainer = document.querySelector('.iframe-container');
  iframeContainer.innerHTML = '';
  iframeContainer.innerHTML = contenido;
}

function cargarLugares(provinciaId) {
  fetch(`../model/obtener_lugares.php?provinciaId=${provinciaId}`)
    .then(response => response.json())
    .then(data => {
      console.log(data); 
      const contenedor = document.getElementById('contenedor-lugares');
      contenedor.innerHTML = ''; 
      if (data.error) {
        console.error('Error al cargar los lugares:', data.error);
        return;
      }
      data.forEach(lugar => {
        const boton = document.createElement('button');
        boton.className = 'rectangle';
        boton.id = lugar.idLugarSeguro;
        boton.innerHTML = `
          <img src="./assets/img/mapa.png" alt="icono" height="43px">
          <p>${lugar.nombre}</p>
        `;
        boton.onclick = () => actualizarIframe(lugar.iframe);
        contenedor.appendChild(boton);
      });
    })
    .catch(error => console.error('Error al cargar los lugares:', error));
}
