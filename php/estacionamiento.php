<?php 

class Estacionamiento
{

public static function Guardar($patente)
{

$archivo= fopen("estacionados.txt","a");

$ahora=date("Y-m-d H:i:s");
$renglon=$patente."=>".$ahora."\n";//el => sirve de separador, separa la hora del tiempo

fwrite($archivo, $renglon);

fclose($archivo);
 echo "Esta guardado";
}

public static function Leer()
{
$listadoDeAutos= array();
$listaDeAutosLeida[] = "Primer Elemento"; //asi se agrega un elemento a un array

$archivo= fopen("estacionados.txt","r");

while(!feof($archivo))//mientras no llegue al final del archivo (find end of file)
{
$renglon=fgets($archivo);
//$listadoDeAutos[] = $renglon; 

$auto=explode("=>",$renglon);//cada auto tiene su fecha y su hora  // explode separa
$listadoDeAutos[]=$auto;//array de array //auto[0] = patente // auto[1]=fecha
}

fclose($archivo);
return $listadoDeAutos;
}

public static function SacarPatente($patente)
{

$miListadoEstacionado=Estacionamiento::Leer();


foreach ($miListadoEstacionado as $auto) 
{
	if($auto[0] == $patente)
	{ 
		$ahora=date("Y-m-d H:i:s");//string

		$diferencia = (strtotime($ahora)-strtotime($auto[1]));//primero va el mayor
		echo "Tiempo transcurrido: " .$diferencia;
	}
	

}

}


}

 ?>