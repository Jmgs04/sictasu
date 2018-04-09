<? session_start();
include("php/func_terminal.php");
include("conectar.php");
$query="SELECT * FROM deuda where cod_vehi='$cod'";//realiza la busqueda del registro
$result =  mysql_query($query) or die("Error en la consulta SQL"); 
$j=1;
$registros= mysql_num_rows($result);
$query="SELECT * FROM vehiculo  inner join linea on vehiculo.cod_linea=linea.cod_linea  where cod_vehi='".$_SESSION['cod']."'";//realiza la busqueda del registro
	  $result1 =  mysql_query($query) or die("Error en la consulta SQL"); 
	  $row1=mysql_fetch_assoc($result1,0);
 $deuda=$registros*10;
?> <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
     <script type="text/javascript" src="javascript/validar.js"></script> 
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/calendar-system.css" rel="stylesheet" type="text/css" media="all" title="system"/>
<script src="jquery/jquery.min.js" type="text/javascript"></script>
<script language=javascript>
function pago()
{
alert("Pago realizado con exito");
//document.location.reload();
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="/sictasu/css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" height="325" border="0" cellspacing="0" >
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left" id="cod_vehi10">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left" id="cod_vehi9">&nbsp;</td>
  </tr>
  <tr  id="cod_vehi2">
    <td width="49%" height="48" align="right">Código del Vehículo&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td width="51%" align="left" id="cod_vehi"><? echo $_SESSION['cod'];?></td>
  </tr>
  <tr  id="cod_vehi3">
    <td height="50" align="right">Línea&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td align="left" id="linea"><label for="cod_vehi3"></label></td>
  </tr>
  <tr  id="cod_vehi4">
    <td height="48" align="right">Fecha pendiente&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td align="left" id="fecha"><label for="cod_vehi4"></label></td>
  </tr>
  <tr  id="cod_vehi5">
    <td height="44" align="right">Deuda&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td align="left" id="monto"><label for="cod_vehi5"></label><? echo $deuda;?>
   bs </td>
  </tr>
  <tr  id="cod_vehi7">
    <td height="44" align="right">Monto a pagar&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td align="left" id="monto2"><label for="cod_vehi7"></label>
      <input name="textfield2" type="text" class="Estilo18" id="textfield2" align="<? echo $_SESSION['cod'];?>"  onchange="xajax_pagar_vehi(this.align)"  autofocus="autofocus" size="4" maxlength="2"/>
      bs</td>
  </tr>
  <tr  id="cod_vehi6">
    <td height="47" align="right">Pagar&nbsp;&nbsp;&nbsp;&nbsp; </td>
    <td align="left"> <img src="/sictasu/imagenes/pagar_vehi.png" width="111" height="106" />http://www.forosdelweb.com/f29/recargar-ventana-padre-despues-cerrar-popup-540973/  parent.parent.GB_hide();</td>
  </tr>
</table>
</body>
</html>