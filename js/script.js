
//Obtiene el valor de los campos dni y nombre y los guarda en sus variables.
document.getElementById('agregarBtn').addEventListener('click', function() {
    const dni = document.getElementById('dni').value;
    const nombre = document.getElementById('nombre').value;

// Valida que el dni sean digitos del 1 al 10
    const dniDigitos = /^\d{1,10}$/;;
    if (!dniDigitos.test(dni)) {
        alert('El DNI debe ser un número de 1 a 10 dígitos');
        return;
    }

//Envia la solicitud POST a 'agregar.php' con los datos json
    fetch('agregar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json' 
        },
        body: JSON.stringify({ nombre: nombre, dni: dni}), //Convierte el objeto en un Json
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Aquí algo anda mal'); //ok codigo 200-299
        }
        return response.json(); //Convierte la respuesta en json
    })
    .then(data => {
        if (data.status === 'error') {
            alert('Error: ' + data.message);
        } else {
            alert('Usuario agregado con éxito');
        }
    })
    .catch(error => {
        console.error('Hubo un problema con la solicitud Fetch:', error);
        alert('Hubo un problema al agregar el usuario. Por favor, inténtalo de nuevo.');
    });
});
