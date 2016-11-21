<?php

//17x12
//204

// Empty data foreach direction
$north = array( ) ;
$south = array( ) ;
$west = array( ) ;
$east = array( ) ;

// Init all directions to pint to the same tile
for( $i = 1 ; $i < 205 ; $i++ ) {

	$north[ $i ] = $i ;
	$south[ $i ] = $i ;
	$west[ $i ] = $i ;
	$east[ $i ] = $i ;

}

// All tiles that have a north
for( $y = 1 ; $y < 12 ; $y++ ) {

	for( $x = 0 ; $x < 17 ; $x++ ) {

		$tileSource = ( $y * 17 ) + $x + 1 ;
		//$tileTarget = ( $y * 17 ) + $x + 1 ;
		$tileTarget = $tileSource - 17 ;

		$north[ $tileSource ] = $tileTarget ;

	}

}


// All tiles that have a south 
for( $y = 0 ; $y < 11 ; $y++ ) {

	for( $x = 0 ; $x < 17 ; $x++ ) {

		$tileSource = ( $y * 17 ) + $x + 1 ;
		//$tileTarget = ( $y * 17 ) + $x + 1 ;
		$tileTarget = $tileSource + 17 ;

		$south[ $tileSource ] = $tileTarget ;

	}
}

// All tiles that have a west 
for( $y = 0 ; $y < 12 ; $y++ ) {

	for( $x = 1 ; $x < 17 ; $x++ ) {

		$tileSource = ( $y * 17 ) + $x + 1 ;
		//$tileTarget = ( $y * 17 ) + $x + 1 ;
		$tileTarget = $tileSource - 1 ;

		$west[ $tileSource ] = $tileTarget ;

	}
}

// All tiles that have a east 
for( $y = 0 ; $y < 12 ; $y++ ) {

	for( $x = 0 ; $x < 16 ; $x++ ) {

		$tileSource = ( $y * 17 ) + $x + 1 ;
		//$tileTarget = ( $y * 17 ) + $x + 1 ;
		$tileTarget = $tileSource + 1 ;

		$east[ $tileSource ] = $tileTarget ;

	}
}


file_put_contents( "markers-north.txt" , implode( "\n" , $north ) ) ;
file_put_contents( "markers-south.txt" , implode( "\n" , $south ) ) ;
file_put_contents( "markers-west.txt" , implode( "\n" , $west ) ) ;
file_put_contents( "markers-east.txt" , implode( "\n" , $east ) ) ;


