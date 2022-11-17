<?php
    session_start();
    if (!empty($_POST["btnIngresar"])) {
        if (!empty($_POST['code'])) {
                $code = $_POST["code"];
                $sql = $conexion -> query(" SELECT * FROM user WHERE code = '$code' ");
                if ($datos = $sql -> fetch_object()) {
                    $_SESSION['id'] = $datos -> id;
                    $_SESSION['Nombre'] = $datos -> nombre;
                    $_SESSION['matrícula'] = $datos -> matricula;
                    $_SESSION['apellido'] = $datos -> apellido;
                    header('location: profile_certificaciones.php');
                }
        }else {
            echo "campos vacios";
        }
    }    

?>

