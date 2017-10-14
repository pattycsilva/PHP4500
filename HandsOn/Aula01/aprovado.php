<?php

//condicao aprovado -> nota >=7 && frequencia>=8
//condicao recuperacao -> nota >= 5 && <70 && 70 && frequencia >=8
//condicao reprovado -> nota <5 || frequencia <8


$nota=6;
$frequencia=8;

if ($nota>=5 && $frequecia >=8) 
{

	echo "APROVADO";
}

elseif ($nota >=5 && $frequencia <=7) 
{
 	echo "RECUPERACAO";
}  

elseif ($nota < 5 || $frequencia < 8) 
{
 	echo "REPROVADO";
}  


