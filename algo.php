<?php


$str = readline('Entrez un nombre : \n');
$num = intval($str);

public function make_A_Tree(int $n) : string 
{
	$i = 0;
	$html = '';
	while($i <= $n){
		$html .= str_repeat('a', $i);
		$i = $i + 1;
	}while($i > 0){
		$html .= str_repeat('a', $i);
		$i = $i - 1;
	}
	return $html;
}

echo make_A_Tree($num);
