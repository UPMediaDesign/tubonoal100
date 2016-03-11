<?php 
	header("Content-type: application/vnd.ms-excel" ) ; 
	header("Content-Disposition: attachment; filename=regimenb.xls" ) ; 
    include('../parts/abre_conexion.php');
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
$result = mysql_query("SELECT id, Nombre, Apellido, Email, Telefono, Ciudad FROM regimenb");
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
                    
                    
    