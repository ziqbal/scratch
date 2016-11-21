<?php

// 12x17=204

$rows = 12 ;
$cols = 17 ;

$tiles = array( ) ;
$scroll = array( ) ;
$markers = array( ) ;

$total = $rows * $cols ;

for( $i = 0 ; $i < $total ; $i++ ) {

	$tiles[ ] = 1 ;
	$markers[ ] = 0 ;
	$scroll[ ] = 0 ;

}

$c = 0 ;

for($c=0;$c<($cols-1);$c++){

	for($i=0;$i<($rows);$i++){
		$k=$c+($cols*$i);
		$v=$k+2;
	//	print("$k=>$v\n");
		$scroll[$k]=$v;
	}

}

file_put_contents("tiles.txt", implode("\n",$tiles));
file_put_contents("markers.txt", implode("\n",$markers));
file_put_contents("scroll.txt", implode("\n",$scroll));
