/*
 *Rectangle into Squares
 *https://www.codewars.com/kata/55466989aeecab5aac00003e
 *
 *
 */
<?php
function sqInRect($lng, $wdth) {
    
if($lng == $wdth){
	return null;
}

if($lng > $wdth){
	$longside = $lng;
	$shortside = $wdth;
}
else{
	$longside = $wdth;
	$shortside = $lng;
}


while($shortside > 1){
	
	$arr[] = $shortside;
	
	
	$lng = $shortside;
	$wdth = $longside - $shortside;
		
	if($lng > $wdth){
		$longside = $lng;
		$shortside = $wdth;
	}
	else{
		$longside = $wdth;
		$shortside = $lng;
	}
}

if($shortside >= 1){
	 for($i = 1 ; $i <= $longside; $i++){
		$arr[] = $shortside;
	}
}

return $arr;
}
