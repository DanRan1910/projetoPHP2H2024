<?php



//exe1: média dos alunos
$alunos = array('André' , 'Bruno' , 'Carlo' , 'Danzo' , 'Eduardo' , 'Fagner' , 'Gab' , 'Heito' , 'Iago' , 'Josefat');
$notas = array(8, 9, 8, 10, 7, 6, 5, 8, 9, 3);
$comb = array_combine($alunos, $notas);


$mediaalunos = (($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4] + $notas[5] + $notas[6] + $notas[7] + $notas[8] + $notas[9]) / 10);
echo "A média de todos os alunos é $mediaalunos";


if ($search =array_search(10, $comb)){;
echo "</br> O Aluno com maior nota (10) foi $search";
}
	
	elseif($search =array_search(9, $comb)){;
echo "</br> O Aluno com maior nota (9) foi $comb";
}
	elseif($search =array_search(8, $comb)){;
echo "</br> O Aluno com maior nota (8) foi $search";
}
?>