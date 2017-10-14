<?php

//condicao aprovado -> nota >=7 && frequencia>=8
//condicao recuperacao -> nota >= 5 && <70 && 70 && frequencia >=8
//condicao reprovado -> nota <5 || frequencia <8

$nota=8;
$frequencia=8;


switch (true) {
	case ($nota>=5 && $frequecia >=8):
		echo "APROVADO";
		break;

		case ($nota >=5 && $frequencia <=7):
		echo "RECUPERACAO";
		break;

		case ($nota < 5 || $frequencia < 8):
		echo "REPROVADO";
		break;
	
	default:
		# code...
		break;
}
 
	


