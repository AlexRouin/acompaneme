
<?php
$db_host="127.0.0.1";
$db_user="root";
$db_password="123";
$db_name="acompanamedb";
$db_table_name="USUARIO";

//ULTIMA PRUEBA SATISFACTORIA
//RECIVI Y MANDO PRUEVA DE REGRSO GILBERTO-TIJUANA
//probando GitHub
// ESTE SCRIPT ES SOLO DE PRUEBA NO USAR EN ACCION, AGREGAR UN CONTADOR DE FILAS Y UNA SETENCIA QUE BUSQUE EL CORREO Y USUARIO PARA NO REPETIR O CREAR CUENTAS DOBLES CON UN SOLO CORREO



   if(isset($_POST["usuario"])) { $usuario = $_POST["usuario"]; } else {$usuario ="";}
   if(isset($_POST["appaterno"])) { $Ap = $_POST["appaterno"]; } else {$Ap ="";}
   if(isset($_POST["apmaterno"])) { $Am = $_POST["apmaterno"]; } else {$Am ="";}
   if(isset($_POST["nombre"])) { $nombre = $_POST["nombre"]; } else {$nombre ="";}
   if(isset($_POST["dia"])) { $dia = $_POST["dia"]; } else {$dia ="";}
   if(isset($_POST["mes"])) { $mes = $_POST["mes"]; } else {$mes ="";}
   if(isset($_POST["anno"])) { $anno = $_POST["anno"]; } else {$anno ="";}
// CREO LA VARIABLE FECHA CON EL FORMATO CORRECTO PARA LA BD
$FECHA = $anno."-".$mes."-".$dia;

   if(isset($_POST["cpostal"])) { $cp = $_POST["cpostal"]; } else {$cp ="";}
   if(isset($_POST["ciudad"])) { $cid = $_POST["ciudad"]; } else {$cid ="";}
   if(isset($_POST["email"])) { $email = $_POST["email"]; } else {$email ="";}
   if(isset($_POST["tusuario"])) { $tu = $_POST["tusuario"]; } else {$tu ="";}
   if(isset($_POST["pass"])) { $pass = $_POST["usuario"]; } else {$pass ="123";}
    if(isset($_POST["nomart"])) { $nomart = $_POST["nomart"]; } else {$nomart ="";}
    if(isset($_POST["pais"])) { $pais = $_POST["pais"]; } else {$pais ="";}

    // Realizar REGISTRO
$sql = "INSERT INTO USUARIO(USUARIO,ApPaterno,ApMaterno,Nombre,FN,PAIS,CODIGO_POSTAL,CIUDAD,EMAIL,TIPO_USUARIO,PASSWORD,nomart) VALUES('".$usuario."','".$Ap."','".$Am."','".$nombre."','".$FECHA."','".$pais."',".$cp.",'".$cid."','".$email."','".$tu."','".$pass."','".$nomart."')";
//imprimir lla consulta solo para pruebas
//echo $sql;



$mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "cpnexion exitosa" . "\n";



if (!$resultado = $mysqli->query($sql)) {
    // EN CASO DE FALLAR
    echo "Lo sentimos, este sitio web está experimentando problemas.";
     echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // Podría ser conveniente mostrar algo interesante, solo puse salir
    exit;

		} else{echo "registro exitoso";
echo "<pre>";
     print_r($_POST);
      echo "</pre >";
	}


		$mysqli->close();
?>
