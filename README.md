# Agregar Usuario

## Descripción

El proyecto "Agregar Usuario" es una aplicación web simple que permite agregar usuarios mediante un formulario que incluye campos para DNI y nombre. La aplicación valida que el DNI no esté duplicado y almacena la información en un archivo CSV.

## Características Principales

- **Formulario de Entrada de Datos:**
  - Campo para ingresar el DNI del usuario.
  - Campo para ingresar el nombre del usuario.
  - Botón para agregar el usuario.

- **Validación de Datos:**
  - Verifica que ambos campos estén llenos antes de enviar la información.
  - Comprueba que no exista un usuario con el mismo DNI en el archivo CSV.

- **Almacenamiento de Datos:**
  - Guarda los datos del usuario en un archivo CSV si el DNI es único.

## Tecnologías Utilizadas

- **HTML5:** Para estructurar el contenido del sitio web.
- **CSS3:** Para el diseño y estilo visual del formulario.
- **JavaScript:** Para manejar la interacción del usuario y la lógica de agregar usuarios.
- **PHP:** Para procesar los datos del formulario, realizar validaciones y almacenar la información en un archivo CSV.

## Estructura del Proyecto

1. **HTML:**
   - `index.html`: Contiene la estructura del formulario para agregar un usuario.

2. **CSS:**
   - `styles.css`: Estilos visuales para el formulario de entrada de datos.

3. **JavaScript:**
   - `script.js`: Maneja la lógica para agregar usuarios y enviar datos al servidor.

4. **PHP:**
   - `add_user.php`: Procesa el formulario, valida los datos y guarda la información en un archivo CSV.

5. **CSV:**
   - `users.csv`: Archivo donde se almacenan los datos de los usuarios.

