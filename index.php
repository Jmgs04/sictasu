<?php
$x=0;
 session_start();  
  if ($_SESSION["nivel"]=='1') {
	 $x=1;
	 switch(date("m")){
	 case 1: 
	 $mes="Enero";
	 break;
	 case 2:
	 $mes="Febrero";
	 break;
 	 case 3:
	 $mes="Marzo";
	 break;
	  case 4:
	 $mes="Abril";
	 break;
	  case 5:
	 $mes="Mayo";
	 break;
	  case 6:
	 $mes="Junio";
	 break;
	  case 7:
	 $mes="Julio";
	 break;
	  case 8:
	 $mes="Agosto";
	 break;
	  case 9:
	 $mes="Septiembre";
	 break;
	  case 10:
	 $mes="Octubre";
	 break;
	  case 11:
	 $mes="Noviembre";
	 break;
	  case 12:
	 $mes="Diciembre";
	 break;
	 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin t&iacute;tulo</title>
 <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="javascript/validar.js"></script> 
    <script type="text/javascript" src="javascript/calendario.js"></script>
    <script language="jscript" type="text/javascript" src="calendario/calendar.js"></script>
<script language="jscript" type="text/javascript" src="calendario/calendar-es.js"></script>
<script language="jscript" type="text/javascript" src="calendario/calendar-setup.js"></script>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/calendar-system.css" rel="stylesheet" type="text/css" media="all" title="system"/>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->


 <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/estilosinicio.css" />
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
<!-- InstanceEndEditable -->

<link href="/sictasu/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="principal">
  <header>
    <div id="banner" align="center"> <img  src="imagenes/SICTASU.PNG" width="100%" height="190" align="middle"/> </div>
  </header>
<!--  <table width="553" height="45"><tr>
    <td width="35">&nbsp;</td>
    <td width="506">&nbsp;</td>
  </tr> 
    </table>-->
<style type="text/css">
#pie footer h5 {
	color: rgba(255,255,255,1);
}
</style>
  <div id="seccionmenu" class="es"><div id="seccionmenu2" align="center">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <ul id="css3menu1" class="topmenu">
	<li><a class="MenuBarItemSubmenu" href="#">Elemento 1</a>
	  <ul>
	    <li><a href="#">Elemento 1.1</a></li>
	    <li><a href="#">Elemento 1.2</a></li>
	    <li><a href="#">Elemento 1.3</a></li>
	    </ul>
	  </li>
	<li><a href="#">Elemento 2</a></li>
	<li><a class="MenuBarItemSubmenu" href="#">Elemento 3</a>
	  <ul>
	    <li><a class="MenuBarItemSubmenu" href="#">Elemento 3.1</a>
	      <ul>
	        <li><a href="#">Elemento 3.1.1</a></li>
	        <li><a href="#">Elemento 3.1.2</a></li>
	        </ul>
	      </li>
	    <li><a href="#">Elemento 3.2</a></li>
	    <li><a href="#">Elemento 3.3</a></li>
	    </ul>
	  </li>
	<li><a href="#">Elemento 4</a></li>
</ul>
    </div>
    <table width="100%" border="0">
      <tr>
        <td align="right" ><span class="Estilo18">Usuario: <? echo $_SESSION["usuario"]?>&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
      </tr>
    </table>
  </div>
</div>
<!-- InstanceBeginEditable name="EditRegion3" -->
	<div id="principal">
		<header></header>
   	  <div id="contenido" align="center">
      	  <section id="formulario">
            <h3>&nbsp;</h3>
            <div class="div" id="mision">
             
            <h3 id="h3mision">MISIÓN/VISIÓN</h3><p>Promover y ofrecer al ciudadano un medio que le permita participar de manera directa y organizada, individual o asociada, en la actividad de control social Municipal
               <h3>&nbsp;</h3>
               <h3>&nbsp;</h3>
            <h3>OBJETIVOS</h3>
           <p>Ofrecer un servicio de calidad en atención a quienes interactúan con el Gobierno Municipal.</p>

           <p>Brindar asesoría, información y documentación vinculada con la gestión pública y la participación ciudadana.</p>

           <p>Atender las iniciativas de la comunidad en el proceso de participación ciudadana</p>
           </div>
          </section>
   	  </div>
	  </div>
<!-- InstanceEndEditable -->



  <div id="pie">
    <footer>
      <h5>Aplicación Web del Terminal de Pasajeros Ciudad de Juan Griego<br />
        Alcaldía de Marcano<?php echo"<br>Juan Griego, ". date("d")." de ". $mes." de ".date("Y")?></h5>
    </footer>
  </div>
</div>

</body>
<!-- InstanceEnd --></html>
<?php
 }
 if($x==0){
	
	 echo "<script>document.location.href='login.php';</script>\n";
	 }

?>