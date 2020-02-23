<?php
function busca($x, $v){
	$u = count($v);
	$l=0;
	$meio = 1;
	while ($l<=$u) {
		$m = intdiv($u+$meio,2);
		if($x == $v[$m]){
			return $m;
		}if($x>$v[$m]){
			$meio = $m + 1;
			$l=$m+1;
		}else{
			$u = $m-1;
			
		}
	}
	return -1;
}
$x = 7;
$v = array();
$v = [1,2,3,4,5,6,7];
print busca($x,$v);
?>