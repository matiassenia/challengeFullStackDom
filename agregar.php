<?php
header('Content-Type: application/json');




//Array donde se guardan los datos nombre y dni
$data = json_decode(file_get_contents('php://input'), true);

//Extracción por separado de los datos recibidos
$nombre = $data['nombre'];
$dni = $data['dni'];

// Check si están ambas variables definidas con sus respectivos datos
if (!isset($dni) || !isset($nombre)) {
    echo json_encode(['status' => 'error', 'message' => 'DNI y Nombre son requeridos']);
    exit;
}

//Abre el archivo csv y lo lee (r)
$filename = 'users.csv';
$file = fopen($filename, 'r');

$usuarioExistente = false;

//Recorre el archivo con fgetcsv y verifica que no exista un usuario con mismo dni 
while (($line = fgetcsv($file, 0, ";")) !== FALSE) {
    if ($line[0] == $dni) {
        $usuarioExistente = true;
        break;
    }
}
fclose($file);

if ($usuarioExistente) {
    echo json_encode(['status' => 'error', 'message' => 'Datos invalidos, intenta nuevamente']);
} else {
    $file = fopen($filename, 'a'); // Si el usuario no existe abre el archivo y lo escribe
    fputcsv($file, [$dni, $nombre], ";");
    fclose($file);
    echo json_encode(['status' => 'success', 'message' => 'Usuario agregado con éxito']);
}
?>
