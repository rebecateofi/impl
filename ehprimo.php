<?php
function ehprimo($m){
	if ($m%2) {
		return 1;
	}
	$z = sqrt($m/2);
	for ($i=0; $i < $z; $i++) { 
		if (($m%2*$i+1)==0) {
			return 1;
		}
	}
	return 0;
}
$m = 7;
print ehprimo($m);
?>