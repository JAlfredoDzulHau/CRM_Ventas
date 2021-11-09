<?php
 ?>
<?php
include_once "funciones.php";
$ok = agregarVenta($_POST["id_cliente"], $_POST["monto"], $_POST["fecha"]);
if ($ok) {
    header("Location: ventas.php");
} else {
    echo "Error guardando venta";
}
