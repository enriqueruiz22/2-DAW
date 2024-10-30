// Función para manejar el envío del formulario PATCH
function handlePatch(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const telefono = document.getElementById('telefono').value;
    const ciudad = document.getElementById('ciudad').value;

    // Construir el cuerpo de la solicitud solo con los campos que tienen valores
    const data = {};
    if (email) data.email = email;
    if (telefono) data.telefono = telefono;
    if (ciudad) data.ciudad = ciudad;

    fetch('procesar.php', {
        method: 'POST',  // Cambiar a POST temporalmente
        headers: {
            'X-HTTP-Method-Override': 'PATCH',  // Indicamos el método PATCH en el header
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`Error en la solicitud: ${response.status} ${response.statusText}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Respuesta del servidor:", data);
        alert("Datos actualizados exitosamente (simulado)");
    })
    .catch(error => {
        console.error("Error:", error);
        alert("Ocurrió un error: " + error.message);
    });
}