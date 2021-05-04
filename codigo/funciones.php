<?php

function conectar_base(){
    
    $base="LA_PIÑATA_FELIZ";
    $c=mysqli_connect("localhost","administrador","123456");
    
    
    
}

function buscaranimadores(){
        
        $tabla="animadores";
          
        conectar_base();
        
        mysqli_select_db($c, $base);
        
        $resultado= mysqli_query($c, "SELECT * FROM $tabla");
        
        echo "<table align=center border=2>";
            echo "<tr>";
                echo"<td>IDANIMADOR</td>";
                echo"<td>NOMBRE_ANIMADOR</td>";
                echo"<td>ESPECIALIDAD</td>";
                echo"<td>PRECIO</td>";
            echo "</tr>";
            
        while ($registro = mysqli_fetch_row($resultado)){
            echo "<tr>";
                  foreach($registro  as $clave){
            echo "<td>",$clave,"</td>";
         }
        }
         echo "</table>";
         mysqli_close($c);

}
function buscarfiestas(){
    
     $tabla="fiestas";
          
        conectar_base();
        
        mysqli_select_db($c, $base);
        
        $resultado= mysqli_query($c, "SELECT * FROM $tabla");
        
        echo "<table align=center border=2>";
            echo "<tr>";
                echo"<td>IDCLIENTE</td>";
                echo"<td>NOMBRE_CLIENTE</td>";
                echo"<td>DIRECCIÓN</td>";
                echo"<td>EMAIL</td>";
            echo "</tr>";
            
        while ($registro = mysqli_fetch_row($resultado)){
            echo "<tr>";
                  foreach($registro  as $clave){
            echo "<td>",$clave,"</td>";
         }
        }
         echo "</table>";
         mysqli_close($c);
    
}
function buscarfiestasporcliente(){
    
        $tabla1="fiestas";
        $tabla2="clientes";
        $tabla3="animadores";
        $tabla4="tiposdefiestas";
          
        conectar_base();
        
        mysqli_select_db($c, $base);
        
        $resultado= mysqli_query($c, "SELECT $tabla2.NombreCliente,$tabla2.Email,$tabla2.Direccion,$tabla1.IdFiesta,$tabla1.Fecha,$tabla1.Duracion,
        $tabla4.NombreFiesta,$tabla1.Numero,$tabla1.EdadMedia,$tabla3.Especialidad,
        $tabla3.NombreAnimador FROM (($tabla1 JOIN $tabla2 on $tabla1.IdFiesta=$tabla2.IdFiesta) JOIN $tabla3 on $tabla1.Especialidad=$tabla3.Especialidad)
        join $tabla4 on $tabla1.IdFiesta=$tabla4.IdFiesta where $IdCliente = '$codigo' ");
        
        echo "<table align=center border=2>";
            echo "<tr>";
                echo"<td>IDANIMADOR</td>";
                echo"<td>NOMBRE_ANIMADOR</td>";
                echo"<td>ESPECIALIDAD</td>";
                echo"<td>PRECIO</td>";
            echo "</tr>";
            
        while ($registro = mysqli_fetch_row($resultado)){
            echo "<tr>";
                  foreach($registro  as $clave){
            echo "<td>",$clave,"</td>";
         }
        }
         echo "</table>";
         mysqli_close($c);
    
    
}









































?>
