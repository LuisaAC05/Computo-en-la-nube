<?php
include('Conexion.php');

    $Nombre=$_POST['Nombre'];
    $ApeP=$_POST['ApeP'];
    $ApeM=$_POST['ApeM'];
    $Correo=$_POST['Correo'];
    $Tel=$_POST['Tel'];
    $Nacionalidad=$_POST['Nacionalidad'];
    $Pais=$_POST['Pais'];
    $Estado=$_POST['Estado'];
    $Ciudad=$_POST['Ciudad'];



$Guardado="insert into registros (Nombre, ApellidoPaterno, ApellidoMaterno, Correo, Telefono, Nacionalidad, Pais, Estado, Ciudad) values ('$Nombre', ' $ApeP', '$ApeM', '$Correo', '$Tel', '$Nacionalidad', '$Pais', '$Estado', '$Ciudad');";

$Consulta=mysqli_query($Conexion, $Guardado);

mysqli_close($Conexion);
?>

