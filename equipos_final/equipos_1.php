<?
$this->nivel=0;
include_once($_SERVER['DOCUMENT_ROOT'].'/sitem/incluir/cabecera.php');	

$this->acceso_db=new db_admin;
$this->enlace=$this->acceso_db->conectar_db();
if (is_resource($this->enlace)){
	$this->nueva_sesion=new sesiones;
	$this->nueva_sesion->especificar_enlace($this->enlace);
	$this->nueva_sesion->especificar_expiracion(1800);
	$this->nueva_sesion->especificar_nivel($this->nivel);
	$this->esta_sesion=$this->nueva_sesion->sesion();
	if(!($this->esta_sesion)){
			$this->contenido=0;
	}else{
			$this->contenido=1;
	
		}
}	
?>
<HTML>
<HEAD>
<TITLE>equipos final</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<!-- Script (equipos final) -->
<SCRIPT LANGUAGE="JavaScript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		equipos_05_ImageMap_01_over = newImage("images/equipos_05-ImageMap_01_over.gif");
		equipos_05_ImageMap_02_over = newImage("images/equipos_05-ImageMap_02_over.gif");
		equipos_08_ImageMap_02_over = newImage("images/equipos_08-ImageMap_02_over.gif");
		equipos_08_ImageMap_03_over = newImage("images/equipos_08-ImageMap_03_over.gif");
		equipos_08_ImageMap_04_over = newImage("images/equipos_08-ImageMap_04_over.gif");
		equipos_09_ImageMap_04_over = newImage("images/equipos_09-ImageMap_04_over.gif");
		equipos_09_ImageMap_05_over = newImage("images/equipos_09-ImageMap_05_over.gif");
		equipos_09_ImageMap_06_over = newImage("images/equipos_09-ImageMap_06_over.gif");
		preloadFlag = true;
	}
}

// -->
</SCRIPT>
<!-- End Preload Script -->
<link href="http://gemini.udistrital.edu.co/comunidad/grupos/sitem/incluir/style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF leftmargin="0" topmargin="0" ONLOAD="preloadImages();">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td> 
      <!--  (equipos final) -->
      <TABLE WIDTH=800 BORDER=0 CELLPADDING=0 CELLSPACING=0>
        <TR> 
          <TD COLSPAN=3> <table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="269"><IMG NAME="Index_01" SRC="images/Index_01.gif" WIDTH=269 HEIGHT=119 BORDER=0 USEMAP="#Index_01_Map"> 
                  <MAP NAME="Index_01_Map">
                    <AREA SHAPE="rect" ALT="" COORDS="164,84,236,104" HREF="../registrese_final/registrese.php"
	ONMOUSEOVER="changeImages('Index_01', 'images/Index_01-ImageMap_02_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_01', 'images/Index_01.gif'); return true;">
                    <AREA SHAPE="rect" ALT="" COORDS="74,84,126,104" HREF="../index.html"
	ONMOUSEOVER="changeImages('Index_01', 'images/Index_01-ImageMap_01_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_01', 'images/Index_01.gif'); return true;">
                  </MAP></td>
                <td width="212"><IMG NAME="Index_02" SRC="images/Index_02.gif" WIDTH=264 HEIGHT=119 BORDER=0 USEMAP="#Index_02_Map"> 
                  <MAP NAME="Index_02_Map">
                    <AREA SHAPE="rect" ALT="" COORDS="205,84,264,104" HREF="../foros_final/foros.html"
	ONMOUSEOVER="changeImages('Index_02', 'images/Index_02-ImageMap_05_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_02', 'images/Index_02.gif'); return true;">
                    <AREA SHAPE="rect" ALT="" COORDS="98,84,164,104" HREF="../noticias_final/noticias.html"
	ONMOUSEOVER="changeImages('Index_02', 'images/Index_02-ImageMap_04_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_02', 'images/Index_02.gif'); return true;">
                    <AREA SHAPE="rect" ALT="" COORDS="0,84,61,104" HREF="../chat_final/chat.html"
	ONMOUSEOVER="changeImages('Index_02', 'images/Index_02-ImageMap_03_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_02', 'images/Index_02.gif'); return true;">
                  </MAP></td>
                <td width="319"><IMG NAME="Index_03" SRC="images/Index_03.gif" WIDTH=267 HEIGHT=119 BORDER=0 USEMAP="#Index_03_Map"> 
                  <MAP NAME="Index_03_Map">
                    <AREA SHAPE="rect" ALT="" COORDS="141,84,200,104" HREF="#"
	ONMOUSEOVER="changeImages('Index_03', 'images/Index_03-ImageMap_07_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_03', 'images/Index_03.gif'); return true;">
                    <AREA SHAPE="rect" ALT="" COORDS="34,84,104,104" HREF="../seminarios_final/seminarios.html"
	ONMOUSEOVER="changeImages('Index_03', 'images/Index_03-ImageMap_06_over.gif'); return true;"
	ONMOUSEOUT="changeImages('Index_03', 'images/Index_03.gif'); return true;">
                  </MAP></td>
              </tr>
            </table></TD>
        </TR>
        <TR> 
          <TD> <IMG SRC="images/equipos_02.gif" WIDTH=295 HEIGHT=57></TD>
          <TD> <IMG SRC="images/equipos_03.gif" WIDTH=385 HEIGHT=57></TD>
          <TD> <IMG SRC="images/equipos_04.gif" WIDTH=120 HEIGHT=57></TD>
        </TR>
        <TR> 
          <TD> <IMG NAME="equipos_05" SRC="images/equipos_05.gif" WIDTH=295 HEIGHT=119 BORDER=0 USEMAP="#equipos_05_Map"></TD>
          <TD ROWSPAN=3 align="center" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td valign="top"><p>&nbsp;</p>
                  <!-- TemplateBeginEditable name="contenido" --> 
                  <div align="justify"> 
                    <div align="right"><font color="#000066" size="5">..............................</font><br>
                      <br>
                    </div>
                    <font color="#000066" size="2" face="Arial, Helvetica, sans-serif"> 
                    Haga clic en uno de los siguientes v&iacute;nculos para ingresar 
                    a la secci&oacute;n...</font><br>
                    <p><font color="#000066" size="4" face="Arial, Helvetica, sans-serif"> 
                      C</font><strong><font color="#000066" size="2" face="Arial, Helvetica, sans-serif">onsulta 
                      de informaci&oacute;n</font></strong> </p>
                    <p><a href='051.php' class="menuprincipal" onMouseOver="this.style.color='#0033CC';" onMouseOut="this.style.color='#000033';" > 
                      Equipos para Telemedicina</a><br>
                      <br>
                      <?
					if ($this->contenido==1){
					?>
                    </p>
                    <p><font color="#000066" size="4" face="Arial, Helvetica, sans-serif"> 
                      I</font><strong><font color="#000066" size="2" face="Arial, Helvetica, sans-serif">ngreso 
                      de informaci&oacute;n de Equipos para Telemedicina</font></strong></p>
                    <p><a href='013.php' class="menuprincipal" onMouseOver="this.style.color='#0033CC';" onMouseOut="this.style.color='#000033';" > 
                      Equipos para Telemedicina<br></a></p>
                  </div>
                  <?
				  }
				  
				  ?>
                  <!-- TemplateEndEditable --></td>
              </tr>
            </table></TD>
          <TD ROWSPAN=3> <IMG SRC="images/equipos_07.gif" WIDTH=120 HEIGHT=389></TD>
        </TR>
        <TR> 
          <TD> <IMG NAME="equipos_08" SRC="images/equipos_08.gif" WIDTH=295 HEIGHT=119 BORDER=0 USEMAP="#equipos_08_Map"></TD>
        </TR>
        <TR> 
          <TD> <IMG NAME="equipos_09" SRC="images/equipos_09.gif" WIDTH=295 HEIGHT=151 BORDER=0 USEMAP="#equipos_09_Map"></TD>
        </TR>
        <TR> 
          <TD height="35" COLSPAN=3> <IMG SRC="images/equipos_10.gif" WIDTH=800 HEIGHT=35></TD>
        </TR>
      </TABLE>
      <p> 
        <MAP NAME="equipos_05_Map">
          <AREA SHAPE="rect" ALT="" COORDS="35,85,176,119" HREF="../entidades_final/entidades.php"
	ONMOUSEOVER="changeImages('equipos_05', 'images/equipos_05-ImageMap_02_over.gif', 'equipos_08', 'images/equipos_08-ImageMap_02_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_05', 'images/equipos_05.gif', 'equipos_08', 'images/equipos_08.gif'); return true;">
          <AREA SHAPE="rect" ALT="" COORDS="34,28,175,73" HREF="../operadores_final/operadores.php"
	ONMOUSEOVER="changeImages('equipos_05', 'images/equipos_05-ImageMap_01_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_05', 'images/equipos_05.gif'); return true;">
        </MAP>
        <MAP NAME="equipos_08_Map">
          <AREA SHAPE="rect" ALT="" COORDS="34,74,147,119" HREF="../organizaciones_final/organizaciones.html"
	ONMOUSEOVER="changeImages('equipos_08', 'images/equipos_08-ImageMap_04_over.gif', 'equipos_09', 'images/equipos_09-ImageMap_04_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_08', 'images/equipos_08.gif', 'equipos_09', 'images/equipos_09.gif'); return true;">
          <AREA SHAPE="rect" ALT="" COORDS="34,11,147,56" HREF="../tecnologias_final/tecnologias.php"
	ONMOUSEOVER="changeImages('equipos_08', 'images/equipos_08-ImageMap_03_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_08', 'images/equipos_08.gif'); return true;">
        </MAP>
        <MAP NAME="equipos_09_Map">
          <AREA SHAPE="rect" ALT="" COORDS="34,74,130,119" HREF="equipos.php"
	ONMOUSEOVER="changeImages('equipos_09', 'images/equipos_09-ImageMap_06_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_09', 'images/equipos_09.gif'); return true;">
          <AREA SHAPE="rect" ALT="" COORDS="34,17,130,57" HREF="../servicios_final/servicios.html"
	ONMOUSEOVER="changeImages('equipos_09', 'images/equipos_09-ImageMap_05_over.gif'); return true;"
	ONMOUSEOUT="changeImages('equipos_09', 'images/equipos_09.gif'); return true;">
        </MAP>
        <!-- End  -->
      </p>
      <div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>