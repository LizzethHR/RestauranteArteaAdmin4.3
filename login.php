<?php
$alert = '';

	session_start();

if(!empty($_SESSION['active'])){  //if del rol
	  echo "LLEAMOS AL PRIMER IF DONDE SE ACTIVA SESSION Y PRESENTA EL MENÚ";
		//header('location: inicioADM.php');
			  if($data['id_rol']==1){
					     echo "entra a administrador	";
							 header('location: inicioADM.php');

			   	}else{
							if($data['id_rol']==2){
								 echo "entra a RECEPCIONISTA";
								 header('location: cabecera.html');
							}
					}
  }
else{
			if(!empty($_POST)){
				    if(empty($_POST['usuario']) || empty($_POST['password'])){
				     	$alert = 'Falta ingresar su usuario o su contraseña';
				     }
						else{
                require_once ("modelo\conexion.php");

								$user = $_POST['usuario'];
								$pass = $_POST['password'];

								$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario ='$user' AND password ='$pass'");
								$result = mysqli_num_rows($query);

						     	if($result > 0 ){

											$data = mysqli_fetch_array($query);//DE LA PRIMERA CONSULTA


												 	if($result > 0){

												 			 echo $data['id_rol'];

																		  if($data['id_rol'] ==1){ //Si es ADMINISTRADOR

																				 	 	 $_SESSION['active'] = true;
																				 		 $_SESSION['idUser'] = $data['id_usuario'];
																				 	   $_SESSION['rol'] = $data['id_rol'];
																				 	 	 $_SESSION['User'] = $data['usuario'];

																				 	   header('location: inicioADM.php');

														 				     }
														 	      	else{
																							if ($data['id_rol'] ==2) {
																									echo "SECCION ENVIA ARECEPCIONISTA";
																							   	$_SESSION['active'] = true;
																								 	$_SESSION['idUser'] = $data['id_usuario'];
																								 	$_SESSION['id_rol'] = $data['id_rol'];
																								 	$_SESSION['User'] = $data['usuario'];
																								 header('location: cabecera.html');
																							 }


														 	          	}
												   }//if linea 38

										}else{
													$alert = 'El usuario o la clave son incorrectos';
													session_destroy();
													}
												}  //corchete else linea 24
									} //linea 20 if
  }//corchete del else de linea 10

?>
