<?php
$colores = [
    "name" => "colores",
    "color" => "rojo",
    "intensidad" => "oscuro",
    "cantidad" => 12,
    "empaque" => "caja",
    "Lenguajes" => ["python", "JAVA"]
];

// Mostrar el diccionario
echo "<h1>Contenido del diccionario</h1>";
echo "<ul>";
foreach ($colores as $clave => $valor) {
    if(gettype($valor)=='array'){
        echo "<ul><strong>$clave:</strong>";
        foreach ($valor as $val){
            echo "$val ";
        }
    }else{
        echo "<ul><strong>$clave:</strong> $valor</ul>";
    }
}
echo "</ul>";

?>
