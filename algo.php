<?php


//$str = readline('Entrez un nombre : \n');
//$num = intval($str);
$num = round(1,15);

function make_A_Tree(int $n) : string 
{
	$i = 0;
	$html = '';
	while($i <= $n){
		$html .= str_repeat('a', $i) . '<br>';
		$i = $i + 1;
	}while($i > 0){
		$html .= str_repeat('a', $i) . '<br>';
		$i = $i - 1;
	}
	return $html;
}

echo make_A_Tree($num);
