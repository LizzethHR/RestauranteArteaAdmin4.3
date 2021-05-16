<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php
 include_once("modelo\conexion.php");


     //Consulta para realizar insercion

      $Query= "INSERT INTO producto(nombre_producto,descripcion_producto,precio_producto) VALUES('".$_POST["nombreP"]."','".$_POST["descripcionP"]."','".$_POST["precioP"]."')";

      // $Query= "INSERT INTO producto(nombre_producto,descripcion_producto,precio_producto,id_categoria,imagen_producto) VALUES('','".$_POST["nombreP"]."','".$_POST["descripcionP"]."','".$_POST["precioP"]."','5','".$_POST["fileP"]."')";
// $Query = "INSERT INTO categoria (id_categoria,categoria) VALUES ('','".$_POST["nombreP"]."')";
          //Ejecucion de Consulta
       $Result = $conection->query($Query);

       if($Result!=null)
          	print("Se agrego");

       else
         	print("No se pudo agregar");


//      if(!$resultado){
//        echo 'Error al registrarse';
//      } else{
//        echo 'Producto registrado exitosamente';
//      }
//
// //cerrar conexion
// mysqli_close($conexion);
  ?>

  </body>
  </html>
