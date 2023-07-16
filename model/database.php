<?php
require_once("./controller/conect.php");


function consultarProveedores(){
    global $mysqli;
    $query = "SELECT * FROM facturas ";
    return $resultadoM = $mysqli->query($query);

    return $resultadoM -> fetch_assoc();
}


function ingresosDia(){
    global $mysqli;
    
     $sql = "SELECT SUM(monto) as suma FROM facturas ";
     // Ejecuta la consulta y obtén el resultado
     $result = $mysqli->query($sql);
     // Verifica si se obtuvo algún resultado
     if ($result->num_rows > 0) {
         // Obtiene la primera fila del resultado
         $row = $result->fetch_assoc();
         // Accede al valor de la suma
         $suma = $row["suma"];
         // Retorna la suma
         return $suma;
     } 
 
}

?>