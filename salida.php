<?php
  $x=0;
  session_start(); 
  if ($_SESSION["nivel"]=='2') {
	 $x=1;require ('php/func_terminal.php'); 
//----------------------------------------------------------------------------------------------------------------
  $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
  mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
	$fecha=date('Y-m-d');
  $query="SELECT * from salida inner join vehiculo on vehiculo.cod_vehi=salida.cod_vehi  inner join linea on vehiculo.cod_linea1=linea.cod_linea where fecha_salida='$fecha' order by hora desc  ";//realiza la busqueda de registros
  $result =  mysql_query($query);
  if($result){
  $registros = mysql_num_rows($result);
  $j=$registros;
	$query="SELECT * from salida inner join vehiculo on vehiculo.cod_vehi=salida.cod_vehi  inner join linea on vehiculo.cod_linea1=linea.cod_linea where fecha_salida='$fecha' order by hora desc  limit 40";//realiza la busqueda de registros
  $result =  mysql_query($query);
  $registros=mysql_num_rows($result);
  if($registros>0){
  $var="<fieldset class='fieldset' >
        <legend class='legend2' style='font-size: 18px'> Detalle de Salidas </legend>
          <table width='100%' border='1' align='center' cellspacing='0'>
          <tr align='center' height='40' bgcolor='#CCCCCC'>
          <td width='3%' align='center'>Nº</td>
          <td width='29%' align='center'>Línea</td>
          <td width='17%'align='center'>Cod_ Vehiculo</td>
		      <td width='17%' align='center'>Hora</td>
		      <td width='17%' align='center'>Estado de pago</td>
          </tr>";
	
			 while ($row = mysql_fetch_assoc($result)){
$query2="SELECT * from deuda where cod_vehi='".$row['cod_vehi']."'";//realiza la busqueda de registros
$result2 = mysql_query ($query2);

if(mysql_num_rows($result2)>0) {
	//$deuda=mysql_num_rows($result2)*10;
	$estado_pago="<span style='cursor:pointer; color: rgba(195,0,24,0.82);' dir='".$row['cod_vehi']."' title='".$row['cod_vehi']."' lang='".$row['cod_vehi']."' onclick='xajax_muestra_pago(xajax.getFormValues(form1),this.title )'>&nbsp;Pendiente</span>";}
else {$estado_pago="<span style=' color: rgba(0,0,255,1);' >&nbsp;Pagado</span>";}
$hora="";
$var.="<tr align='center'>
              <td width='3%'align='center'>".$j."</td>
              <td width='29%'align='center'>".utf8_encode($row['nombre_linea'])."</td>
              <td width='17%'align='center'>".$row['cod_vehi']."</td>
              <td width='17%'align='center'>".$row['hora']."</td>
			  <td width='17%'align='center'>".$estado_pago."</td>
            </tr>";

$j--;
}//fin ciclo
$var.="</table></fieldset> ";}}
	 //----------------------------------------------------------------------------------------------------------------

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
	 
	 
$xajax->processRequests();
$xajax->printJavascript("xajax/");	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla13.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Salida</title>
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
     	 $ .mask.definitions ['~'] = '[t T a A 0123456789]';
     $("#cod").mask("~~-999");
 $("#tlf2").mask("(9999) 999-9999");
  });
</script>
 <script type="text/javascript">
        var GB_ROOT_DIR = "./greybox/";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<style type="text/css">
#principal div #form1 fieldset table tr .Estilo18 iframe {
	text-align: center;
}
.f {
	color: #000;
	font-size: 18px;
}
.g {
	font-size: 16px;
}
</style>
<!-- InstanceEndEditable -->

<link href="/sictasu/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.Estilo18 strong {
	color: #333;
}
#principal #seccionmenu #seccionmenu2 #css3menu1 li ul li a {
	font-size: 16px;
}
#principal #seccionmenu table tr td .Estilo14 strong {
	font-size: 14px;
}
</style>
</head>

<body>
<div >
  <header>
    <div id="banner" align="center"><img src="imagenes/SICTASU.png" width="80%" height="190px"/> </div>
  </header>
<style type="text/css">
#pie footer h5 {
	color: rgba(255,255,255,1);
}
</style>
  <div align="center">
    <table width="70%" border="0" align="center">
      <tr>
        <td align="right" ><div  align="left" style="font-size: 16px">
          <ul id="css3menu1">
            <li><a class="MenuBarItemSubmenu" href="#">Salida</a>
              <ul>
                <li><a href="salida.php">Chequear Vehiculo</a></li>
                <li><a href="buscar_vehi.php">Buscar Vehiculo</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu" >Caja</a>
              <ul>
                <li><a href="caja.php">Realizar corte</a></li>
                <li><a href="historial_caja.php">Historial</a></li>
              </ul>
            </li>
            <li><a class="MenuBarItemSubmenu">Reportes</a>
              <ul>
                <li><a href="reporte_salida.php">Salida</a></li>
                <li><a href="reporte_pagos.php">Pagos</a></li>
                <li><a href="reporte_morosos.php">Morosos</a></li>
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
   	  <div  >  <form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return false" >
<fieldset >
  <legend class="legend" align="right" style="font-size: 18px">Nueva Salida</legend>
  <p>&nbsp;</p>
  <table width="766" border="0" cellspacing="0" class="Estilo18">
    <tr  id="cod_vehi">
      <td width="49%" align="right">Código del Vehículo&nbsp;&nbsp;&nbsp;&nbsp; </td>
      <td width="25%" align="left"><label for="cod_vehi"></label>
        <input name="cod" type="text" id="cod" onkeypress="return validarnumeros_vehi(event)" size="4" maxlength="5"  autocomplete="off" autofocus="autofocus" onchange="xajax_revisa_vehi(this.value)" class="Estilo18"/> 
        <span style="cursor:pointer; color: rgba(0,0,255,1);"  >
        <input type="hidden" name="num_filas" id="num_filas"  value="0"/>
        <input type="hidden" name="cant_filas" id="cant_filas"  value="0"/>
        </span></td>
      <td width="26%" align="left"><span style="cursor:pointer; color: rgba(0,0,255,1);"><img src="imagenes/editar.jpg" alt="buscar" width="51" height="56" style="cursor:pointer" title="continuar" onclick="xajax_revisa_vehi(xajax.getFormValues('form1'))" /></span></td>
    </tr>
    <tr id="pagar" style="display:none">
      <td colspan="3"><table width="100%" height="409" border="0" cellspacing="0" >
        <tr  >
          <td width="49%" height="48" align="right">Código del Vehículo&nbsp;&nbsp;&nbsp;&nbsp; <input type="hidden" name="cod_vehi3" id="cod_vehi3"  value="0"/></td>
          <td width="51%" align="left" id="cod_vehi2">&nbsp;</td>
        </tr>
        <tr  >
          <td height="50" align="right">Línea&nbsp;&nbsp;&nbsp;&nbsp; </td>
          <td align="left" id="linea"><label for="cod_vehi3"></label></td>
        </tr>
        <tr  id="cod_vehi4">
          <td height="48" align="right">Fecha pendiente&nbsp;&nbsp;&nbsp;&nbsp; </td>
          <td align="left" id="fecha"><label for="cod_vehi4"></label></td>
        </tr>
        <tr  id="cod_vehi5">
          <td height="44" align="right">Deuda&nbsp;&nbsp;&nbsp;&nbsp; </td>
          <td align="left" id="monto"><label for="cod_vehi5"></label>
            <? echo $deuda;?> Bs </td>
        </tr>
        <tr  id="cod_vehi7">
          <td height="44" align="right">Monto a pagar&nbsp;&nbsp;&nbsp;&nbsp; </td>
          <td align="left" id="monto2"><label for="cod_vehi7"></label>
            <input name="pago" type="text" class="Estilo18" id="pago"    onchange="xajax_pagar_vehi(this.title,this.value, this.alt)"  autofocus="autofocus" size="2" maxlength="2" onkeypress="return validarnumeros(event)"/>
            Bs</td>
        </tr>
        <tr  id="cod_vehi6">
          <td height="117" align="right">Pagar&nbsp;&nbsp;&nbsp;&nbsp; </td>
          <td align="left"><img src="/sictasu/imagenes/pagar_vehi.png" alt="." width="111" height="106" /></td>
        </tr>
        <tr>
          <td height="47" align="right">&nbsp;</td>
          <td align="left"><input name="button" type="button" class="Estilo14" id="button" value="Cancelar" onclick="if(confirm('Desea cancelar la operacion?'))xajax_oculta_pago(xajax.getFormValues('form1'))"/></td>
        </tr>
      </table></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr  id="resp3">
      <td height="4" class="Estilo18" colspan="3" id="descripcion"><?php echo $var;?>
        <table   border="0" class="listado">
          <tbody  align="center" id="tbDescripcion">
          </tbody>
        </table>
      </fieldset></td>
    </tr>
    <tr>
      <td height="4" class="Estilo18" colspan="3"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</fieldset> </form>
   	  </div>
	  </div>
<!-- InstanceEndEditable -->



  <div id="pie">
    <footer style="font-size: 18px; color: #FFF;">
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