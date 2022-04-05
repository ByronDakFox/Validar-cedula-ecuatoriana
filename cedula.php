<?php

function resta($var1, $var2){
    return $var1-$var2;
}

function claveAleatoria(){
	$rand = range(100000, 999999);
	shuffle($rand);
	foreach ($rand as $val) {
		return $val;
}

}

function cedula($cedula){
	$array=[];
	$suma=0;
	$decimoSup="";
	$ultimoDig=(int)($cedula[strlen($cedula)-1]."");

	for ($i=0; $i < strlen($cedula)-1 ; $i++) { 
		if($i%2==0){
			$array[$i] = (int)$cedula[$i]*2;
		}else{
			$array[$i] = (int)$cedula[$i];
		}

		if($array[$i]>=10){
			$array[$i]=$array[$i]-9;
		}
	}

	for ($i=0; $i < count($array); $i++) { 
		$suma+=$array[$i];
	}

	$decimoSup = $suma."";

	if($suma<10){
		$suma=10-$suma;
	}else{
		$suma = ((int)($decimoSup[0]."")+1)*10-$suma;
	}

	if($suma==$ultimoDig){
		return 'Ecuatoriana';
	}else{
		return 'No es ecuatoriana';
	}	

}
