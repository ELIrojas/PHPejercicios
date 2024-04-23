<?php
//tiempo de ejecucion (logica de programa)
//variables  globales para utilizarla en cualquier lugar de nuesta app
define('LOGO_URL', '../images.png');
// contantes pue ir en MAYUSCULAS Tiempo de compilacion (verficaciones de sintaxis)
const name1="yaqueli";
$name='Elisss';
$lasName='Rojas';
$age='10';

var_dump($name);
echo gettype($lasName)."\n";
var_dump($age);

$suma=$age+1;//lo comvierte en suma 11

echo "My name is $name $lasName, I am $age years old.\n";
//html
$output="hola $name";
//constante son estaticas 
const NOMBRE='Eli';

$isOld=$age>40;

if ($isOld){
    echo "<h1 style='color:pink';> Soy muy mayor</h1>";
}else{
    echo "<h1 style='color:red';> No soy muy mayor</h1>";
}
// ternaria

$outputAge=$isOld?'soy muy viejo':'Soy muy joven';
?>

<h1> <?= $outputAge ?> </h1>
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200"> 

<h1 > <?=$name?> </h1>
<h1 > <?=$lasName?> </h1>
<h1 > <?=$age?> </h1>
<h1 > <?=$suma?> </h1>

<!-- style -->

<style> 
h1{
    text-align: center;
    color: white;
    transition: all;
}
 body {
    background-color: black;
 }
</style>