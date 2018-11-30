<?php
	$n = 100;
	echo 'Bilangan Prima : ';
	for($i=1;$i<=$n;$i++){
		$c=0;
		for($j=1;$j<=$i;$j++){
			if($i%$j==0){
				$c=$c+1;
			}
		}
		if ($c==2){
			echo $i.' ';
		}
	}
	
?>