<?php   session_start();
date_default_timezone_set('America/Caracas');
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
	 }	 $nivel=0;
require ('xajax/xajax.inc.php');
$xajax = new xajax();
$xajax->setCharEncoding('ISO-8859-1');
$xajax->decodeUTF8InputOn();
//---------------------------------------------------------------------------------------------------------------------------
function entrar($form){
$respuesta=new xajaxResponse();
extract ($form);
$link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105") OR DIE ("Error: No es posible establecer la conexión");
mysql_select_db("epiz_21831866_sictasu",$link);
$query="select * from usuario where nomb_usu='$usuario' and ced_usu='$ced_usu' and clave='$password' "; 
$result =  mysql_query($query) or die("Error en la consulta SQL"); 
$Exist= mysql_num_rows($result);
  if($Exist > 0)  
{
 $row = mysql_fetch_assoc($result,0);
 $nivel=$row['nivel'];
$_SESSION['usuario'] = ucwords($row['nomb_usu']); 
$_SESSION['password'] = $row['clave'];
$_SESSION['ced_usu'] = $row['ced_usu'];  
$_SESSION['nivel']=$nivel;
$_SESSION['turno']=$row['turno'];
$_SESSION['timezone']=date_default_timezone_set('America/Caracas');
}

if($nivel==1){
 $respuesta->redirect("entrada.php");
}
 if($nivel==2){
 $respuesta->redirect("salida.php");}
 if($nivel==3){
 $respuesta->redirect("index_admin.php");}
return $respuesta;
}//fin funcion
//----------------------------------------------------------------------------------------------------------------------------
$xajax->registerFunction("entrar");
$xajax->processRequests();
$xajax->printJavascript("xajax/"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
  <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
   <link rel="stylesheet" href="css/estilologin.css" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
  
    <script type="text/javascript">
	
	$(document).ready(function(e) {
		 $(document).on('focus','input:text',function(){
					$(this).css("background-color","rgba(220,220,220,0.5)");
	});    	
		 $(document).on('blur','input:text',function(){
					$(this).css("background-color","rgba(255,255,255,0.5)");
	});   
	
	 $(document).on('focus','input:password',function(){
					$(this).css("background-color","rgba(220,220,220,0.5)");
	});    	
		 $(document).on('blur','input:password',function(){
					$(this).css("background-color","rgba(255,255,255,0.5)");
	}); 	
        //$("#formlogin").dialog({height:400, width:400});
	
			
    });
	</script>
<style type="text/css">
#pie footer h5 {
	color: rgba(255,255,255,1);
	font-size: 14px;
}
</style>
</head>

<body>
<div id="fondo"></div>
<div id="principal">
	<header>
     	<div id="banner">
        <img src="imagenes/SICTASU.png" width="100%" height="190px"/>
        </div>
</header>
<form id="formlogin" method="post" onsubmit="xajax_entrar(xajax.getFormValues('formlogin'));return false" title="Login">
  <div id="divlogin"><h3>Inicio de Sesión</h3></div>

  <p>
    <input name="usuario" type="text"  class="Estilo14" id="usuario" placeholder="Usuario" autocomplete="off" value="prue" size="15"/>
  </p>
  <p>
    <input name="ced_usu" type="text" class="Estilo14" id="ced_usu" placeholder="Cedula" autocomplete="off" value="123" size="15" align="right"/>
  </p>
  <p>
    <input name="password" type="password" class="Estilo14" id="password" placeholder="Contraseña" value="123" size="15" t/>
  </p>
  <p><br>
    <input type="submit" value="Acceder" id="enviar" class="Estilo14"/><br><br>
  </p>
</form><p>&nbsp;</p>
<div id="pie">
    <footer style="font-size: 14px">
      <h5>Aplicación Web del Terminal de Pasajeros Ciudad de Juan Griego<br />
        Alcaldía de Marcano<?php echo"<br>Juan Griego, ". date("d")." de ". $mes." de ".date("Y")?></h5>
    </footer>
  </div>
	
</body>
</html>