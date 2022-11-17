<?php
    session_start();
    if (!empty($_POST["btnIngresar"])) {
        if (!empty($_POST['code'])) {
                $code = $_POST["code"];
                $sql = $conexion -> query(" SELECT * FROM user WHERE code = '$code' ");
                if ($datos = $sql -> fetch_object()) {
                    $_SESSION['ID'] = $datos -> id;
                    $_SESSION['Nombre'] = $datos -> nombre;
                    $_SESSION['apellido'] = $datos -> apellido;
                    $_SESSION['matricula'] = $datos -> matricula;
                    header('location: profile.php');
                }
        }else {
            echo "campos vacios";
        }
    }    

?>

