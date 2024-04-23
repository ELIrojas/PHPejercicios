<?php
// match es un switch pero con expresiones regulares y con un return
//se puede hacer directamente como una asigancion a una varible 
//el valor que se genera dentro de la condicion pasa a estar dentro de la variable 

$edad=18;
// expresiones
$outputEdad = match (true){
    $edad <=2 => 'Eres un bebe',
    $edad <=10 => 'Eres un niño',
    $edad <=18 => 'Eres un adolescente',
    $edad <=65 => 'Eres un adulto',
    default => 'Eres un adulto'
};
//para mostrar dentro del bloque php El HTML
// echo'<h1>'.$outputEdad.'</h1>';
//Arrays guardar cadebas de texto y permite mezclar, crecer de manera dinamica

$mejoresLenguajes=["Python","Java","Rubi","C",20,12,"Monday","Thrusday"];
//para colocar al final de la lista 
$mejoresLenguajes[]="Php";
// Si queremos colocar en una posición específica
$mejoresLenguajes[2]= "Sql";

// Si deseamos imprimir toda la lista
foreach($mejoresLenguajes as $key =>$element){
    echo "<li>". $key ." ". $element . "</li>";
 }

 // METODO PARA OBTENER LA LONGITUD 
 //agregando KEY para obtener el indice 

  function obtenerLongitud($arreglo1 )  {
    return count($arreglo1);
    
  }
  //LLAMANDO AL ARREGLO PARA OBTENER LA LONGITUD 
  $longitud = obtenerLongitud($mejoresLenguajes);
  echo " <h1>La longitud del arreglo es: $longitud</h1>";

?>

<!-- Para mostrar en HTML fuera del bloque de php -->
<h3>El mejor lenguaje es <?=$mejoresLenguajes[1] ?></h3>

<style>
    body{
        background:green;
    }
    h1{
        text-align: center;
        color: white;
    }
</style>