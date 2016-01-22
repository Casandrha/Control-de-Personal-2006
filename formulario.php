<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Trabajo Final</title>
<style type="text/css" media="screen">  

		body { margin-top: 80px;      
		       margin-left: 150px;
			   margin-right: 100px;
               margin-bottom: 60px;
			   font-family: Georgia, "Times New Roman",
               Times, serif; color: #2F4901;
       	       background-image: url(Gold.jpg) ;
			   }
			   
	    			
		table {                               /* Atributos de la tabla */
		
                 border-style: dotted; 
				 border-width: 1px; 
				 border-color: #BDB76B; 
                 background-color:#EEE8AA;
                 border-spacing:.5px;
				 font-family: verdana, arial; 
                 font-size: 10.5pt; 
				 color: #556B2F;
              }


 
		 </style>
		 
</head>

<body>



<h1>Listado completo de empleados</h1>
</br>
</br>
<p><a href="formulario.html">Ir al formulario de búsqueda
</br>
</br>
Búsqueda por palabra clave</a></p>
</br>
</br>
 <?php
@$conexion=mysql_connect("localhost", "root", "") or exit("No se pudo establecer una conexión");

@$dbseleccionada=mysql_select_db("empresa", $conexion) or exit("No se pudo seleccionar la base de datos");

$result = mysql_query("SELECT * FROM empleado", $conexion);
?>
<table width="680"  border = '1'>

<tr>
<td width="70"><b>Nº Empleado</b></td>
<td width="90"><b>Nombre</b></td>
<td width="90"><b>Apellido</b></td>
<td width="80"><b>Área de Trabajo</b></td>
<td width="20"><b>Edad</b></td>
<td width="30"><b>Salario</b></td>
<td width="80"><b>E-Mail</b></td>
</tr>

<?php
while ($row = mysql_fetch_row($result)){ 
?>
<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; ?></td>  
<td><?php echo $row[6]; }?></td>  
</tr>

</table>

<?php
mysql_free_result($result);
mysql_close();
?>
<p><a href="formulario.php">Arriba</a></p>


</body>
</html>
