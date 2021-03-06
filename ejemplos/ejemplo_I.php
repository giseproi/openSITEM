<?
/*** Classes***/
//Forma de incluir un archivo utilizando ruta absoluta:
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/db_admin.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/usuario.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/sesion.php');

/*** 
Crear una instancia de acceso a base de datos
***/
$acceso_db=new db_admin;

/***
Atributos específicos: 
@NONE
***/

/***
Método para abrir una conexión a la base de interés
@dbms
***/
//El motor a utilizar es MySQL (por defecto)

$this->enlace=$acceso_db->conectar_db();

if (is_resource($this->enlace)){
	//Busca una sesion
	$nueva_sesion=new sesiones;
	$nueva_sesion->especificar_enlace($this->enlace);
	$nueva_sesion->especificar_expiracion(1800);
	$esta_sesion=$nueva_sesion->sesion();
	
	//Si no existe crea una nueva
	if(!$esta_sesion){
		
		echo '<strong>No se ha encontrado una sesión válida.</strong><br>'; 
		$nueva_sesion->crear_sesion('','');
		$resultado = $nueva_sesion->guardar_valor_sesion("nombre","Paulo Cesar");
		$registro=$nueva_sesion->rescatar_valor_sesion("nombre");

		
	}else{

		echo $this->enlace.'<br>';
	}
		
}else{

	echo $this->enlace.'<br>';


}



?>
