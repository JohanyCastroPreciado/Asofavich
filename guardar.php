<?php

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="registro"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombres=$_POST['nombres']; //name="nombres"
    $apellidos=$_POST['apellidos']; //name="correo"
    $correo=$_POST['correo']; //name="correoElectronico"
    $telefono=$_POST['telefono']; //name="telefono"
    $usuario=$_POST['usuario']; //name="usuario"
    $password=$_POST['password']; //name="password"

  
    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombres','$apellidos','$correo','$telefono','$usuario','$password')"; //manda a traer los valores de '$nombres','$apellidos','$correo',$telefono','$usuario','$contrasena'
    
    //ejecutamos la sentencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"hubo algun error"; //si algo sale mal mandanos este mensaje
    }else{
        echo"datos guardado correctamente <br><a href='perfil.html'>volver</a>"; //si todo sale bien mandanos este mensaje
    }
     
?>