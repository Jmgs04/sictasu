<?php
$x=0;
 session_start();  
  if ($_SESSION["nivel"]=='2')  {
	 $x=1;
	 require ('php/func_terminal.php');  
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
<title>Reporte Salida</title>
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
<script src="/sictasu/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/calendar-system.css" rel="stylesheet" type="text/css" media="all" title="system"/>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<style type="text/css">
.Estilo18 strong {
	color: #333;
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
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <fieldset >
    <legend class="legend" align="right"> Reporte Salida</legend>
    <p>&nbsp;</p>
    <table width="800" border="0" align="center" cellspacing="0">
      <tr align="center">
        <td width="42%">Desde
          <label for="desde"></label>
          <input name="desde" type="text" class="Estilo14" id="desde" size="10" maxlength="10" readonly="readonly" />
          &nbsp;&nbsp; <img src="/sictasu/imagenes/cal.jpg" alt="j" name="calf" width="26" height="23" id="calf" style="cursor:pointer" />
          <script type="text/javascript">
				Calendar.setup({
				inputField : "desde",
				ifFormat   : "%d-%m-%Y",
				button     : "calf",
				align      : "Br",
				range      :[2015,<? echo date("Y");?>],
				singleClick : true
				});
			      </script></td>
        <td width="45%">Hasta
          <label for="hasta"></label>
          <input name="hasta" type="text" class="Estilo14" id="hasta" size="10" readonly="readonly"/>
          &nbsp;&nbsp;<img src="/sictasu/imagenes/cal.jpg" alt="j" width="26" height="23" name="calf2" id="calf2"  style="cursor:pointer" />
          <script type="text/javascript">
				Calendar.setup({
				inputField : "hasta",
				ifFormat   : "%d-%m-%Y",
				button     : "calf2",
				align      : "Br",
				range      :[2015,<? echo date("Y");?>],
				singleClick : true
				});
			      </script>
          </label>
          &nbsp;&nbsp; <span style="cursor:pointer; color: rgba(0,0,255,1);" onclick="xajax_salidas_vehi(xajax.getFormValues('form1'))">Buscar</span></td>
        <td width="13%">&nbsp;</td>
      </tr>
      <tr>
        <td height="58" colspan="3" id="resp" align="center"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
  </fieldset>
</form>
<p></p>
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