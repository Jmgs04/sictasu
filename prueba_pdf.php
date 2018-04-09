<?  include("funciones.php");ini_set("memory_limit", "225M");
 $link=mysql_connect("sql110.epizy.com","epiz_21831866","4m0r35m105");
mysql_select_db("epiz_21831866_sictasu",$link) OR DIE ("Error: No es posible establecer la conexión");
 $query="select distinct cod_vehi, fecha_salida from(SELECT * FROM salida  where fecha_salida  between '2015-08-27' and '2015-09-01' order by fecha_time )as cod order by fecha_salida desc,cod_vehi";
		$ini=cambia_fecha($inicio);$hast=cambia_fecha($hast);
		$Hora= date('h:i:s',time() - 1800 ); 
        $result =  mysql_query($query); or die('Error en la consulta SQL');
        $registros= mysql_num_rows($result);
        if($registros>0){
			$var="<style type='text/css'>body {
  margin: 30mm 8mm 8mm 4mm;
}
div.header,
div.footer {
  position: fixed;
  width: 100%;
  border: 0px ;
  overflow: hidden;
  padding: 0.1cm;
}
div.header {
  top: 0cm;
  left: 0cm;
  border-bottom-width: 1px;
  height: 2.8cm;
}hr {
  page-break-after: always;
  border: 0;
}
div.footer {
  bottom: 0cm;
	left: 0cm;
  border-top-width: 1px;
  height: 1cm;
}

div.footer table {
  width: 100%;
  text-align: center;
}
</style><body><div class='header'>
     <table width='100%' border='0' >
    <tbody>
      <tr>
        <td width='42%'><img src='pdf/images/header.jpg' width='400'  /></td>
        <td width='17%'>&nbsp;</td>
        <td width='41%' VALIGN='TOP' align='right'><p>Fecha: ".date('d/m/Y')." </p>
          <p>
        Hora: ".$Hora." ".date('a')."</p></td>
      </tr>
      </tbody>
  </table>
</div>

          <p align='center'><strong>SALIDAS DE VEHICULOS</strong><p align='center'><strong>DESDE EL 27-08-2015 HASTA EL 01-09-2015</strong><p >".utf8_decode("Se encontraron ".$registros." salidas de vehículos las cuales se detallan a continuación:")."</p>
          <table  border='1' align='center' style='text-align: center' cellspacing='0'>
            <tr align='center'  bgcolor='#CCCCCC'>
              <td >".utf8_decode(Nº)."</td>
              <td  style='text-align: center'>".utf8_decode(Línea)."</td>
              <td  style='text-align: center'>Cod_ Vehiculo</td>
              <td  style='text-align: center'>Propietario</td>
              <td  style='text-align: center'>Salidas</td>
              <td width='13%' style='text-align: center'>Fecha</td>
			  <td  style='text-align: center'>Hora</td>
            </tr>";
			 for ($i=0;$i<$registros;$i++)
{	$row=mysql_fetch_assoc($result,$i);
$query="SELECT nombre,nombre_linea from salida inner join vehiculo on salida.cod_vehi=vehiculo.cod_vehi inner join linea on vehiculo.cod_linea=linea.cod_linea inner join tiene_c on vehiculo.cod_vehi=tiene_c.cod_vehi inner join conductor on tiene_c.cedula=conductor.cedula where salida.cod_vehi='".$row['cod_vehi']."' and fecha_salida='".$row['fecha_salida']."'";
		  $result1 =  mysql_query($query); or die('Error en la consulta SQL');
			  $row2=mysql_fetch_assoc($result1,0);
$j++; ;$hora="";
            $var.="<tr align='center' >
              <td style='text-align: center'>".$j."</td>
              <td style='text-align: center'>".$row2['nombre_linea']."</td>
              <td style='text-align: center'>".$row['cod_vehi']."</td>
              <td style='text-align: center'>".utf8_encode(ucwords(strtolower($row2['nombre'])))."</td>";
			   $query="SELECT * FROM salida where cod_vehi='".$row['cod_vehi']."' and fecha_salida='".$row['fecha_salida']."'";
		  $result1 =  mysql_query($query); or die('Error en la consulta SQL');
			  $registros1= mysql_num_rows($result1);
             $var.= "<td style='text-align: center'>".$registros1."</td>
              <td style='text-align: center'>".cambia_fecha($row['fecha_salida'])."</td>";
			  for ($a=0;$a<$registros1;$a++){
				  $row1=mysql_fetch_assoc($result1,$a);
			  $hora.=$row1['hora']."<br>";}
			  $var.="<td style='text-align: center'>".$hora."</td>
            </tr>";
}
          $var.="</table></p>  
    <footer>
      <h5>Generado por Sistema de Control de Tasa de Uso SICTASU</h5>
    </footer>
 </body>";}

Require_once("dompdf/dompdf_config.inc.php");
$dompdf=new DOMPDF();
$dompdf->load_html($var);
$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
 ?>
