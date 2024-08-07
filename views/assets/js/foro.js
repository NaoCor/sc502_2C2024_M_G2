document.addEventListener('DOMContentLoaded', () => {
    fetch('../model/obtener_denuncias.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        const foroContainer = document.querySelector('.foro-container');
        
        // Solo agregar denuncias al contenedor sin limpiar todo
        const content = `
            <h2>Foro de Denuncias</h2>
            ${data.length === 0 ? '<p>No hay denuncias disponibles.</p>' : ''}
        `;

        foroContainer.innerHTML = content;

        // Añadir denuncias dinámicamente
        data.forEach(denuncia => {
            const denunciaItem = document.createElement('div');
            denunciaItem.className = 'foro-item';

            denunciaItem.innerHTML = `
                <h3>Denuncia #${denuncia.idDenuncia}</h3>
                <p><strong>Fecha:</strong> ${new Date(denuncia.fecha).toLocaleDateString()}</p>
                <p><strong>Lugar:</strong> ${denuncia.lugar || 'No especificado'}</p>
                <p><strong>Descripción:</strong> ${denuncia.relacion_agresor || 'No disponible'}</p>
                <a href="#">Ver más detalles</a>
            `;

            foroContainer.appendChild(denunciaItem);
        });
    })
    .catch(error => {
        console.error('Error fetching denuncias:', error);
        const foroContainer = document.querySelector('.foro-container');
        foroContainer.innerHTML = '<p>Error al cargar las denuncias.</p>';
    });
});
