<?php
$x=0;
 session_start();  
  if ($_SESSION["nivel"]=='3') {
	 $x=1; include("php/func_adminterminal.php");
	 $query="SELECT * from linea  order by cod_rel ";
	 $result= mysql_query($query);;
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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla14.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Linea</title>
 <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="javascript/validar.js"></script> 
         <script type="text/javascript" src="javascript/redirec.js"></script> 
    <script type="text/javascript" src="javascript/calendario.js"></script>
    <script language="jscript" type="text/javascript" src="calendario/calendar.js"></script>
<script language="jscript" type="text/javascript" src="calendario/calendar-es.js"></script>
<script language="jscript" type="text/javascript" src="calendario/calendar-setup.js"></script>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/calendar-system.css" rel="stylesheet" type="text/css" media="all" title="system"/>
<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script src="jquery/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
     $("#cod_vehi").mask(" 999-999");
 $("#tlf2").mask("(9999) 999-9999");
  });
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<style type="text/css">
#principal #contenido fieldset table tr #resp table {
	font-weight: bold;
}
</style>
<!-- InstanceEndEditable -->

<link href="/sictasu/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.Estilo18 strong {
	color: #333;
}
</style>
</head>

<body>
<div>
  <header>
    <div id="banner" align="center"> <img  src="imagenes/SICTASU.PNG" width="70%" height="190" align="middle"/> </div>
  </header>

<style type="text/css">
#pie footer h5 {
	color: rgba(255,255,255,1);
}
</style>
  <div align="center">
    <table width="70%" border="0" align="center">
      <tr>
        <td align="right" ><div align="left">
          <ul id="css3menu1" class="topmenu">
            <li><a class="MenuBarItemSubmenu" href="#">Usuario</a>
              <ul>
                <li><a href="nuevo_usu.php">Nuevo</a></li>
                <li><a href="editar_usu.php">Editar</a></li>
                <li><a href="lista_usuarios.php">Ver lista</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Linea</a>
              <ul>
                <li><a href="nueva_linea.php">Nuevo</a></li>
                <li><a href="edita_linea.php">Editar</a></li>
                <li><a href="lista_linea.php">Ver lista</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Vehiculo</a>
              <ul>
                <li><a href="nuevo_vehic.php">Nuevo</a></li>
                <li><a href="editar_vehic.php">Editar</a></li>
                <li><a href="lista_vehic.php">Ver lista</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Entrada</a>
              <ul>
                <li><a href="reporte_entrada-admin.php">Reporte Entrada</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Salida</a>
              <ul>
                <li><a href="reporte_salida-admin.php">Reporte Salida</a></li>
                <li><a href="reporte_pagos-admin.php">Reporte Pagos</a></li>
                <li><a href="reporte_morosos-admin.php">Reporte Morosos</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Caja</a>
              <ul>
                <li><a href="reporte_caja.php">Reporte Caja</a></li>
                <li><a href="reporte_morosos.php">Editar</a></li>
                <li><a href="lista_vehic.php">Ver lista</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" href="#">Base de Datos</a>
              <ul>
                <li><a href="respaldo_bd.php">Respaldo</a></li>
                <li><a href="restaurar_bd.php">Restaurar</a></li>
              </ul>
            </li>
            <li><a href="login.php">Salir</a></li>
          </ul>
        </div></td>
      </tr>
      <tr>
        <td align="right" ><p class="Estilo14">Usuario:&nbsp;<strong><? echo $_SESSION["usuario"]?></strong><strong>&nbsp;&nbsp;&nbsp;</strong></p></td>
      </tr>
      <tr>
        <td align="right" ><span id="liveclock" style="position:relative;left:0;top:0;" class="Estilo14"></span>
          <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='4' font-family='Verdana, Geneva, sans-serif' >Hora actual&nbsp;</font><b><font size='5' font-family='Verdana, Geneva, sans-serif' >"+hours+":"+minutes+":"
         +seconds+" "+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5
         //-->
          </script></td>
      </tr>
    </table>
  </div>
</div>
<!-- InstanceBeginEditable name="EditRegion3" -->
	<div  >
		<header></header>
   	  <div >
<form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return false" ><fieldset >
  <legend class="legend" align="right">
      Lineas Registradas
   </legend>
  <p>&nbsp;</p>
  <table width="920" border="0" cellspacing="0">
    <tr>
      <td width="100%" height="58" id="resp"><table width="100%" border="1" align="center" cellspacing="0">
        <tr align="center">
            <td width="5%"><strong>Cod de Linea</strong></td>
            <td width="26%"><strong>Nombre de Línea</strong></td>
            <td width="16%"><strong>Ruta</strong></td>
            <td width="12%"><strong>Tipo de ruta</strong></td>
            <td width="10%"><strong>Nº  Vehículos</strong></td>
            <td width="7%"><strong>Pasaje (Bs)</strong></td>
            <td width="10%"><strong>Estado</strong></td>
            <td width="14%"><strong>Acciones</strong></td>
            </tr>
            <? $registros=mysql_num_rows($result);
	while ($row = mysql_fetch_assoc( $result ))
	{
		$j++;$var='Desea borrar este usuario?';
     /*$query1 = "SELECT count(cod_vehi) as cantidad from vehiculo inner join linea on vehiculo.cod_linea=linea.cod_linea where linea.cod_linea='".$row['cod_linea']."' ";

	 $result1 = mysql_query($query1);
	 $row1=mysql_fetch_assoc($result1);		*/
	echo '<tr align="center" height="35">
      <td>'.$row['cod_linea'].'</td>
      <td>'.utf8_encode($row['nombre_linea']).'</td>
      <td>'.$row['ruta'].'</td>
      <td>'.$row['tipo_ruta'].'</td>
      <td>'.$row1['cantidad'].'</td>
	  <td>'.$row['costo_pasaje'].'</td>
	  <td>'.$row['estado'].'</td>';
	  if($row['estado']=='activa'){
      echo'<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="editar_linea.php?id='.$row['cod_linea'].'" ><img src="/sictasu/imagenes/editar.png" width="27" height="25" alt="Modificar" style="cursor:pointer"/></a>&nbsp;&nbsp;<img src="/sictasu/imagenes/inactivar.png" width="24" height="26" alt="'.$row['cod_linea'].'"  style="cursor:pointer" onclick="if(confirm(\'Desea inactivar esta linea?\'))xajax_inactivar_lin(this.alt)"/>&nbsp;&nbsp;<img src="/sictasu/imagenes/eliminar.png" alt="'.$row['cod_linea'].'" width="24" height="26" style="cursor:pointer" onclick="if(confirm(\'Realmente desea eliminar esta linea?\'))xajax_borrar_lin(this.alt)" /></td>
     ';}if($row['estado']=='inactiva'){ echo'<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="editar_linea.php?id='.$row['cod_linea'].'" ><img src="/sictasu/imagenes/editar.png" width="27" height="25" alt="Modificar" style="cursor:pointer"/></a>&nbsp;&nbsp;<img src="/sictasu/imagenes/activar.png" width="30" height="28" alt="'.$row['cod_linea'].'"  style="cursor:pointer" onclick="if(confirm(\'Desea activar esta linea?\'))xajax_activar_lin(this.alt)"/>&nbsp;<img src="/sictasu/imagenes/eliminar.png" alt="'.$row['cod_linea'].'" width="24" height="26" style="cursor:pointer" onclick="if(confirm(\'Realmente desea eliminar esta linea?\'))xajax_borrar_lin(this.alt)" /></td>';}echo ' </tr>';} ?>
          
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
    </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</fieldset></form>
   	  </div>
	  </div>
<!-- InstanceEndEditable -->


<footer>
      <h5 style="font-size: 14px; color: #FFF;">Aplicación Web del Terminal de Pasajeros Ciudad de Juan Griego <br />
    Alcaldía de Marcano<?php echo"<br>Juan Griego, ". date("d")." de ". $mes." de ".date("Y")?></h5>
    </footer>
 

</div>
</body>
<!-- InstanceEnd --></html>
<?php
 }
 if($x==0){
	
	 echo "<script>document.location.href='login.php';</script>\n";
	 }

?>