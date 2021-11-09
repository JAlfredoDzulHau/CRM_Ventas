<?php
 ?>
<?php
include_once "funciones.php";
$ok = actualizarCliente($_POST["nombre"], $_POST["edad"], $_POST["departamento"], $_POST["id"]);
if (!$ok) {
    echo "Error actualizando.";
} else {
    header("Location: clientes.php");
}
