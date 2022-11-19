<?php

include "model/conexion.php";

if (!empty($_POST['save'])) {
    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $code = $_POST['code'];
    $curp = $_POST['curp'];
    $titulo = $_POST['titulo'];
    $ctc = $_POST['ctc'];

    $query = "INSERT INTO user(Nombres, Apellido, Matricula, curp, titulo, ctc) VALUES ('$name','$apellido', '$code', '$curp', '$titulo', '$ctc')";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
        die("Fallo query");
    }

    echo "Saved";

    header("Location: alumnos.php");
}


?>