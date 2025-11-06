<?php
include("conexion.php");// hay llamar la conexion y la funcion 
$conn = conectar();
// Recibir los datos del formulario
$apenombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$color = $_POST['color'];
$papel = $_POST['papel'];
$copias = $_POST['copias'];
$faz = $_POST['faz'];
$observacion = $_POST['observaciones'];

// 1️Verificar si el cliente ya existe
$verificar = "SELECT id_cliente FROM cliente WHERE email = '$email'";//verficr con email

$resultado = mysqli_query($conn, $verificar);

if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $id_cliente = $fila['id_cliente'];
} else {
    // isertar cliente nuevo
    $insertar_cliente = "INSERT INTO cliente (apenombre, email, telefono    VALUES ('$apenombre', '$email', '$telefono')";
    mysqli_query($conn, $insertar_cliente);
    $id_cliente = mysqli_insert_id($conn);
}

//  Insertar pedido (por defecto, estado_id = 1 -> Pendiente)
$insertar_pedido = "INSERT INTO pedidos (cliente_id, estado_id, copias, color, papel, faz, observacion)
                    VALUES ('$id_cliente', 1, '$copias', '$color', '$papel', '$faz', '$observacion')";

if (mysqli_query($conn, $insertar_pedido)) {
    echo "<script>
            alert('Pedido guardado correctamente. Ahora subí tu archivo al Drive.');
            window.location.href='subir_archivo.php';
            </script>";
} else {
    echo "Error al guardar el pedido: " . mysqli_error($conn);
}

if (mysqli_query ($conn, $insertar_pedido)){
    header( "Location: subirarchivo.php?msg=Pedido guardado correctamente. Ahora sube el archivo ");
    exit();

}else{
    echo "Error al guardar el pedido:  ". mysqli_error($conn);
}



mysqli_close($conn);


?>