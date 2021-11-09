<?php
?>
<?php
include_once "funciones.php";
$ok = eliminarCliente($_GET["id"]);
if (!$ok) {
    echo "Error eliminando";
} else {
    header("Location: clientes.php");
}
