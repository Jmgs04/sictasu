<?php
$x=0;
 session_start();  
  if ($_SESSION["nivel"]=='2') {
	 $x=1;require ('php/func_terminal.php'); 
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
     $("#cod_vehi").mask(" 999-999");
 $("#tlf2").mask("(9999) 999-9999");
  });
</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<style type="text/css">
.Estilo4 {font-size: 16px}
.div #form1 fieldset table tr td p {
	text-align: center;
}
.div #form1 fieldset table tr td .Estilo14 tr td {
	text-align: center;
}
.div #form1 fieldset table tr td p {
	font-style: italic;
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
	<div >
		<header></header>
   	  <div  class="div"><form  method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return false" >
<fieldset >
  <legend class="legend" align="right">
      <strong style="color: #fff">Control de efectivo recaudado</strong></legend>
  <p>&nbsp;</p>
  <table width="910 px" border="0" cellspacing="0" id="caja" align="center" >
    <tr>
      <td>&nbsp;</td>
      <td width="10%" style="vertical-align:middle"><p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      <td width="71%" style="vertical-align:middle"><p>&nbsp;</p>
        <p><? echo tipo_corte_letras(tipo_corte());?>Corte de Dinero del Turno <? echo $_SESSION['turno'] ?> para hoy <? echo "<em>".date("d")." de ". $mes." de ".date("Y")."</em>"?></p>
        <p>&nbsp;</p>
        <p>hasta el momento se han recaudado <i><? echo total_caja()." bs" ?></i></p></td>
      <td width="17%"><img src="/sictasu/imagenes/descarga.jpg" width="136" height="108" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr align="center" valign="middle">
      <td>&nbsp;</td>
      <td colspan="3" style="vertical-align:middle"><p>&nbsp;</p>
        <p align="center" >Ingrese la cantidad de billetes y monedas según se indica
        <table width="382" border="0"  cellspacing="0"  align="center" class="centro">
          <tr>
            <td height="35">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="hidden" name="monto_t" id="monto_t" value="<? echo total_caja(); ?>" /><input type="hidden" name="tipo_corte" id="tipo_corte" value="<? echo tipo_corte(); ?>" /></td>
          </tr>
          <tr bgcolor='#CCCCCC'>
            <td height="35">Billetes</td>
            <td>Cantidad</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Monedas</td>
            <td>Cantidad</td>
          </tr>
          <tr>
            <td height="35" style="text-align: center">100&nbsp;&nbsp;</td>
            <td align="justify"><input name="b100" type="text" class="Estilo14" id="b100" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))"  autofocus="autofocus"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align: center">1&nbsp;&nbsp;</td>
            <td align="justify"><span >
              <input  name="m1" type="text" class="Estilo14" id="m1"   onkeypress="javascript: return validarnum(event);" size="2" maxlength="2" onchange="xajax_total(xajax.getFormValues('form1'))" />
            </span></td>
          </tr>
          <tr>
            <td height="33"style="text-align: center">50&nbsp;&nbsp;</td>
            <td align="justify"><label>
              <input name="b50" type="text" class="Estilo14" id="b50" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))"/>
            </label></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align: center">0.50&nbsp;&nbsp;</td>
            <td align="justify" ><span >
              <input  name="m0" type="text" class="Estilo14" id="m0"   onkeypress="javascript: return validarnum(event);" size="2" maxlength="2" onchange="xajax_total(xajax.getFormValues('form1'))"/>
            </span></td>
          </tr>
          <tr>
            <td height="34"style="text-align: center">20&nbsp;&nbsp;</td>
            <td align="justify" ><input name="b20" type="text" class="Estilo14" id="b20" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="34"style="text-align: center">10&nbsp;&nbsp;</td>
            <td align="justify" ><input name="b10" type="text" class="Estilo14" id="b10" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="text-align: center">Total</td>
            <td id="total_r">&nbsp;</td>
          </tr>
          <tr>
            <td height="36"style="text-align: center">5&nbsp;&nbsp;</td>
            <td align="justify" ><input name="b5" type="text" class="Estilo14" id="b5" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2" class="eliminar" id="msj">&nbsp;</td>
          </tr>
          <tr>
            <td height="32"style="text-align: center">2&nbsp;&nbsp;</td>
            <td align="justify" ><input name="b2" type="text" class="Estilo14" id="b2" size="2" maxlength="2"  onkeypress="javascript: return validarnum(event);" onchange="xajax_total(xajax.getFormValues('form1'))"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="1%">&nbsp;</td>
      <td colspan="3" align="center">&nbsp;</td>
      <td width="1%">&nbsp;</td>
    </tr>
</table>
  <p>&nbsp;</p>
  <p>
    <input name="button" type="button" class="Estilo14" id="button" value="Guardar" onclick="if(confirm('Los datos suministrados son correctos?'))xajax_caja(xajax.getFormValues('form1'),'1')"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="button2" type="button" class="Estilo14" id="button2" value="Cancelar" onclick="if(confirm('Desea cancelar la operacion?'))xajax_caja(xajax.getFormValues('form1'),'2')"/>
  </p>
</fieldset></form>
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