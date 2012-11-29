<?php

/*Utilize o PHP para efetuar as seguintes conversões:
	 a) de string para integer ok
	 b) de integer para string ok
	 c) de string para array ok
	 d) de array para string ok
	 e) de integer para float 
	 f) de float para string em formato de dinheiro: R$ 23,45
*/

	echo "Letra A";

$string = "1";

	$inteiro =  (int) $string;
	echo $inteiro;


	echo "Letra B";

$inteiro = 1;

	$string = intval($inteiro);
	echo $string;


	echo "Letra C";


$string = "Tiago";

	$array  (string $string [int $split_length ] );

	echo $array;


	echo "Letra D";

$array[] = ("string1","string2","string3");

	(implode(',', $array));

	echo $array;


	echo "Letra E";

$float = (int) 10.9;
 
	var_dump( $float );
	 
	echo $float;


	echo "Letra F";
 
$float = (string) 1.20;

	var_dump( $float ); 

	echo "R$" . $float;
?>

