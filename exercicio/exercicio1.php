<?php

echo "<pre>";

$tamanhoArray = 10;
$numero = array();

for ($i=0; $i<= $tamanhoArray; $i++)
{

$numero[] = mt_rand(0,10);
echo $i;
echo "<br>";

}

var_dump($numero);

for ($i=0; $i<= $tamanhoArray; $i++)
{

echo $numero[$i] . ',';

}

echo "<hr>";

foreach ($numero as $key => $value) {
	if ($value % 2 ==0) {

		echo $value , ','; }
}

foreach ($numero as $key => $value) {
		if ($value % 2 != 0) {
			echo $value , ',';
		}
		
	}


$maior = $numero[0];


for ($i=0; $i < $tamanhoArray; $i++) { 
	if ($numero [$i] > $maior)

	 {
		$maior = $numero[$i];
		
	}
}

echo $maior;
echo "<hr>";