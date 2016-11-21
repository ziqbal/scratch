<?php

// 12x17=204

$rows = 12 ;
$cols = 17 ;

$tiles = array( ) ;
$markers = array( ) ;

$total = $rows * $cols ;

for( $i = 0 ; $i < $total ; $i++ ) {

	$tiles[ ] = 1 ;
	$markers[ ] = 0 ;

}

//////////
$scrollsource = array( ) ;
$scrolltarget = array( ) ;

for($j=1;$j<$rows;$j++){
	for($i=0;$i<$cols;$i++){
		$pos = $total - ($cols*$j) + 1 + $i ;
		$scrolltarget[ ] = $pos ;
		$scrollsource[ ] = $pos - $cols ;
	}
}

//print("$pos\n");

//////
file_put_contents("tiles.txt", implode("\n",$tiles));
file_put_contents("markers.txt", implode("\n",$markers));
file_put_contents("scrollsource.txt", implode("\n",$scrollsource));
file_put_contents("scrolltarget.txt", implode("\n",$scrolltarget));
