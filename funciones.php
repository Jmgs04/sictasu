<? // session_start(); 
    $inactivo = 900;
 
/*    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("Location: login.php"); 
        }
    }
 
    $_SESSION['tiempo'] = time();*/

  date_default_timezone_set('America/Caracas');
//---------------------- Funciones---------------------------------------------------------------------------
function primero($cod_vehi,$fecha){
	$caso=0;
  $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
  $query="SELECT * from deuda where cod_vehi='$cod_vehi' and fecha_deuda='$fecha'";
  $result =  mysql_query($query) or die("Error en la consulta SQL"); 
  $registros1= mysql_num_rows($result);
  if($registros1==0){// Si no tiene deuda, se debe verificar si ya pagó en tabla salida
  $resp="No tiene deuda". $registros1;
	  $query="SELECT * from salida where cod_vehi='$cod_vehi' and fecha_salida='$fecha'";
  $result =  mysql_query($query);
   $registros= mysql_num_rows($result);
   if($registros==0){// Primera vez que se registra
   $resp.="No ha pagado". $registros." ".$cod_vehi;
	  $query="INSERT INTO deuda (cod_vehi,monto_deuda,fecha_deuda)values('$cod_vehi','10','$fecha')";
  $result =  mysql_query($query) or die("Error en la consulta SQL"); }
    }
  return $resp;}//fin funcion

//--------------------------------------------------------------------------------------------------------------
function registros ($query,$cod,$nom){
 $connection=mysql_connect("host=localhost port=5432 password=12345 user=postgres dbname=new");
  $result =  mysql_query($query) or die("Error en la consulta SQL"); 
  $registros= mysql_num_rows($result);
  for ($i=0;$i<$registros;$i++)
{

$row = mysql_fetch_assoc ( $result,$i );

$opciones.='<option value="'.$row[$cod].'">'.htmlentities($row[$nom]).'</option>';

}
return $opciones;
}//fin funcion

//----------------------------------------------------------------------------------------------
function cambia_fecha($fecha){
$fecha=explode("-",$fecha);
$nueva=$fecha[2].'-'.$fecha[1].'-'.$fecha[0];
return $nueva;
}//fin funcion 

//------------------------------------------------------------------------------------------------
function fecha2(){
	$dia=date("w",time());
	switch ($dia){
		case 0:
			$var_fecha=date("d",time())." de ";break;
		case 1:
			$var_fecha=date("d",time())." de ";break;			
		case 2:
			$var_fecha=date("d",time())." de ";break;
		case 3:
			$var_fecha=date("d",time())." de ";break;
		case 4:
			$var_fecha=date("d",time())." de ";break;
		case 5:
			$var_fecha=date("d",time())." de ";break;
		case 6:
			$var_fecha=date("d",time())." de ";break;
	}//FIN SWITCH
	$mes=date("n",time());
	switch ($mes){
		case 1:
			$var_fecha=$var_fecha."Enero de ";break;
		case 2:
			$var_fecha=$var_fecha."Febrero de ";break;			
		case 3:
			$var_fecha=$var_fecha."Marzo de ";break;
		case 4:
			$var_fecha=$var_fecha."Abril de ";break;
		case 5:
			$var_fecha=$var_fecha."Mayo de ";break;
		case 6:
			$var_fecha=$var_fecha."Junio de ";break;
		case 7:
			$var_fecha=$var_fecha."Julio de ";break;
		case 8:
			$var_fecha=$var_fecha."Agosto de ";break;
		case 9:
			$var_fecha=$var_fecha."Septiembre de ";break;
		case 10:
			$var_fecha=$var_fecha."Octubre de ";break;
		case 11:
			$var_fecha=$var_fecha."Noviembre de ";break;
		case 12:
			$var_fecha=$var_fecha."Diciembre de ";break;	
	}//FIN SWITCH
	return $var_fecha.date("Y",time());}//Fin funcion
	
//------------------------------------------------------------------------------------------------
function total_caja(){
	$fecha=date('Y-m-d');
	$Hora= date('h:i:s',time() - 1800 );
 $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
 $query="select * from paga_salida where fecha_pago='$fecha'  and chequeado between '0' and '1'";
 $result =  mysql_query($query) or die("Error en la consulta SQL"); 
 $registros=mysql_num_rows($result);
  while ($row = mysql_fetch_assoc($result)){
	$acum=$acum+$row['monto_pago'];
	$query1="update paga_salida set chequeado='1' where cod_vehi='".$row['cod_vehi']."'";
	$result1 = mysql_query ($connection, $query1) or die("Error en la consulta SQL"); }
 return $acum;
}//fin funcion

//------------------------------------------------------------------------------------------------
function tipo_corte(){
	$fecha=date('Y-m-d');
	$Hora= date('h:i:s',time() - 1800 );
 $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
 $query="select tipo_corte from caja where fecha='$fecha' 
 ";
 $result =  mysql_query($query) or die("Error en la consulta SQL"); 
 $registros=mysql_num_rows($result);
 if($registros==0)$tipo_corte="01";
 else if($registros==1)$tipo_corte='02';
 else if($registros==2)$tipo_corte='03';

 return $tipo_corte;
}//fin funcion
//------------------------------------------------------------------------------------------------
function tipo_corte_letras($t){
	 if($t==1)$tipo_corte="Primer ";
 else if($t==2)$tipo_corte="Segundo ";
 else if($t==3)$tipo_corte="Tercer ";

 return $tipo_corte;
}//fin funcion
//------------------------------------------------------------------------------------------------
function par($num){
	if($num%2==0)
{
	return true;
}else{
	return false;
}
}//fin funcion
//------------------------------------------------------------------------------------------------
function bloqueo(){
 $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
 $query="update usuario set contrasena='0000'";
 $result =  mysql_query($query) or die("Error en la consulta SQL"); 
 return 0;
}//fin funcion
?>