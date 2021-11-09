<?php
 ?>
<?php
include_once "funciones.php";
$ok = agregarCliente($_POST["nombre"], $_POST["edad"], $_POST["departamento"]);
if (!$ok) {
    echo "Error registrando.";
} else {
    header("Location: clientes.php");
}
