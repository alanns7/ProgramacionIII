<?php 

require_once '\php\estacionamiento.php';

if(isset($_POST['entrar']))//isset para saber si esta instanciado, si da null o no devuelve un bool (true or false)
 {
 	echo $_POST['entrar'].": ";
	echo $_POST['patente']."<br><br>";

	Estacionamiento::Guardar($_POST['patente']);
	//$miListado=Estacionamiento::Leer();
	//var_dump($miListado);
 }

 if(isset($_POST['salir']))//isset para saber si esta instanciado, si da null o no devuelve un bool (true or false)
 {
 	echo $_POST['salir'].": ";
	echo $_POST['patente'];

	Estacionamiento::SacarPatente($_POST['patente']);
 }



 ?>