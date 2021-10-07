<?php 

	require_once 'Modelo/claseadmin.php';

if($_POST){
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	
	$objSesion = new Admin();
	$sesion = $objSesion->consultaradmin();

	foreach ($sesion as $v) {
	
		if($usuario == $v['usuario'] && $contrasena==$v['pass'])
		{
							   session_start();
							   $_SESSION['id']= $v['id'];
							   $_SESSION['usuario']= $v['usuario'];
							   $_SESSION['pass']= $v['pass'];
							//header('location:?url=vista-productor');
							//require_once "Vista/vista-iniciosesion.php";
		                    header('location:vistacambiarvalores');
		                    echo "si entro";
							//exit;
		}
		  else {
		  		echo "no entro";
				header('location:vistainiciosesion');
		}
	}

}

 ?>