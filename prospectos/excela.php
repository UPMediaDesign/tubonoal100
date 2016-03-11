<?php 
	header("Content-type: application/vnd.ms-excel" ) ; 
	header("Content-Disposition: attachment; filename=regimenb.xls" ) ; 
    include('../parts/abre_conexion.php');
	?>
                   
       <?php             
              $hotsdb = "localhost";
$basededatos = "cuenta2";    // sera el valor de nuestra BD 

$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "root";    // sera el valor de nuestra BD 

$tabla = "contacto";    // sera el valor de una tabla 
//$tabla_db2 = "otratabla";    // sera el valor de otra tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");   
	?>   
                   
 
                   
                   
                   <table>
                        <tr>
                        	<th>ID</th>
                        	<th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                        </tr>


                  		
                                 <?php
//execute the SQL query and return records
$result = mysql_query("SELECT id, Nombre, Apellido, Email, Telefono, Ciudad FROM regimena");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   
   //foreach($row as $value){
 echo "<tr>" ;  
   echo "<td>".$row{'id'}."</td>";
   echo "<td>".$row{'Nombre'}."</td>";
   echo "<td>".$row{'Apellido'}."</td>";
   echo "<td>".$row{'Email'}."</td>";
   echo "<td>".$row{'Telefono'}."</td>";
   echo "<td>".$row{'Ciudad'}."</td>";
 echo "</tr>";
//  }
  
}


?>  	
                        </tr>
                 
                    </table>
        
        
           <?php  include('../parts/cierra_conexion.php');?>
                    
                    
    