<?
/*** Classes***/
//Forma de incluir un archivo utilizando ruta absoluta:
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/conexion_db.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/acceso_db.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/seleccion_db.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/usuario.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/clases/sesion.php');

/*** 
Crear una instancia de acceso a base de datos
***/
$acceso_db=new conexion_db;

/***
Valores por defecto
***/
$acceso_db->atributos_iniciales();

/***
Atributos específicos: 
@NONE
***/

/***
Método para abrir una conexión a la base de interés
@dbms
***/
//El motor a utilizar es MySQL:
$this->dbms='mysql';
$this->mensaje=$acceso_db->conectar_db($this->dbms);

/***
Imprimir identificadores de conexión
***/


//autenticar un usuario:
$nuevo_usuario=new usuario;
$nuevo_usuario->especificar_usuario('paulo_cesar');
$nuevo_usuario->especificar_clave('gardelmagaldy');
$this->mensaje=$nuevo_usuario->autenticar();
echo $this->mensaje;
?>
