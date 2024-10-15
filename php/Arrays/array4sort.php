<?php
// Ordenacion de arrays
// sort,rsort,asort,arsort,ksort,krsort
//1.- SORT se suele usar para arrays NO asociativos y ordena de forma usual excepto mayusculas que siempre iran primero que las minusculas

$nombres = ['manolo','juan','ana','zacarias','pedro'];
echo "<center>Método sort</center>";
echo "array nombres antes de prdenación con <b>sort</b>: ";
var_dump($nombres);
sort($nombres);
echo "array nombres despues de prdenación con <b>sort</b>: ";
var_dump($nombres);

//2.- RSORT r de reverse lo ordena de la Z-A o de menor a mayor

$nombres = ['manolo','juan','ana','zacarias','pedro'];
echo "<center>Método rsort</center>";
echo "array nombres antes de prdenación con <b>rsort</b>: ";
var_dump($nombres);
rsort($nombres);
echo "array nombres despues de prdenación con <b>rsort</b>: ";
var_dump($nombres);

// 3.- ASORT  ordena un array asociativo respetando las claves
$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es',
    'al34' => 'zacarias@email.es'

];

echo "<center>Método asort</center>";
echo "array nombres antes de ordenación con <b>asort</b>: ";
var_dump($usuarios);
asort($usuarios);
echo "array nombres despues de ordenación con <b>asort</b>: ";
var_dump($usuarios);

// 4.- RSORT no suele usarse por que se carga las claves
$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es'

];

echo "<center>Método rsort</center>";
echo "array nombres antes de ordenación con <b>rsort</b>: ";
var_dump($usuarios);
rsort($usuarios);
echo "array nombres despues de ordenación con <b>rsort</b>: ";
var_dump($usuarios);

// 5.- ARSORT lo ordena respetando los valores de forma inversa respetando las claves
$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es',
    'al34' => 'zacarias@email.es'

];

echo "<center>Método arsort</center>";
echo "array nombres antes de ordenación con <b>arsort</b>: ";
var_dump($usuarios);
arsort($usuarios);
echo "array nombres despues de ordenación con <b>arsort</b>: ";
var_dump($usuarios);

// 6.- KSORT lo ordena a la inversa 
$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es',
    'al34' => 'zacarias@email.es'

];
echo "<center>Método ksort</center>";
echo "array nombres antes de ordenación con <b>ksort</b>: ";
var_dump($usuarios);
ksort($usuarios);
echo "array nombres despues de ordenación con <b>ksort</b>: ";
var_dump($usuarios);


// 7.- KRSORT lo ordena a la inversa 
$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es',
    'al34' => 'zacarias@email.es'

];

echo "<center>Método krsort</center>";
echo "array nombres antes de ordenación con <b>krsort</b>: ";
var_dump($usuarios);
krsort($usuarios);
echo "array nombres despues de ordenación con <b>krsort</b>: ";
var_dump($usuarios);

//8.- NATSORT este metodo ordena de forma natural (no puedes ponerlo en un asociativo)

$usuarios = [
    'manolo' =>'manolo@email.es',
    'user56' =>'ana@email.es',
    'zasca23'=> 'mariao@email.es',
    'ana34'=> 'anamariao@email.es',
    'al34' => 'zacarias@email.es'

];

echo "<center>Método natsort</center>";
echo "array nombres antes de ordenación con <b>natsort</b>: ";
var_dump($usuarios);
natsort($usuarios);
echo "array nombres despues de ordenación con <b>natsort</b>: ";
var_dump($usuarios);


// Algunas funciones de arrays interesante 
// implode,explode,count,compact
//array_push y array_pop // añade y quita al final de un array
echo"<hr>";

echo "<b> array push y array pop </b>";
$array = ['uno','dos','tres','cuatro',];
var_dump($array);
array_push($array,"manolo"); // añade al final del array
var_dump($array);
array_pop($array); // lo quita y lo devuelve
var_dump($array);

// array_unshift() añade un elemento al principio de un array
// array_shift() quita un elemento
echo "<hr>";
echo "array_unshift, array_shift";
$array = ['uno','dos','tres'];

array_unshift($array,"primer elemento");
var_dump($array);
array_shift($array);
var_dump($array);

// desordenar un array suffle()

$numeros=[1,2,3,4,5,6];
shuffle($numeros);
echo "La tirada del dado ha sido: " .$numeros[0];

// crear un array range()
echo "<hr>";
echo "range() crea un array desde el rango que le pongas";

$datos = range(2,10); // [2,3,4,5.....10] crea un array hasta 10
var_dump($datos);

$letrasMinusculas=range('b','p');
var_dump($letrasMinusculas);
$letrasMayusculas = range('A','D');
var_dump($letrasMayusculas);

//------------------------------ in_array() me dice si algo esta en un array o no;
echo "<hr>";

$colores=['Azul','Amarillo','Verde'];
$miColor= 'Azul';

if(in_Array($miColor,$colores)){
    echo "<br> $miColor está en el array colores";
} else{
    echo "<br> $miColor no esta en el array colores";
}








