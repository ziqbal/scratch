<?php

$csv = array_map( "str_getcsv" , file( "country-list.csv" ) ) ;
array_shift( $csv ) ;

for( $i = 0 ; $i < 1000 ; $i++ ) {

	shuffle( $csv ) ;

}

//print_r( $csv ) ;//

$question=array();
$question[ ] = "What is the capital of _X_?" ;
$question[ ] = "_X_, what is the capital?" ;
$question[ ] = "Capital of _X_?" ;
$question[ ] = "The capital of _X_ is?" ;
$question[ ] = "Who knows the capital of _X_?" ;
$question[ ] = "Anyone know the capital of _X_?" ;
$question[ ] = "Do you know the capital of _X_?" ;
$question[ ] = "Tell me the capital of _X_..." ;
$question[ ] = "And the capital of _X_ is?" ;
$question[ ] = "What about the capital of _X_?" ;
$question[ ] = "For _X_, what is the capital?" ;

$total = count($question);

$countries = array( ) ;
$capitals = array( ) ;
$done = array( ) ;


$countriesHash=array();
$capitalsHash=array();

foreach( $csv as $v ) {


	$q = $question[ mt_rand( 0 , $total - 1 ) ] ;

	$q = str_replace("_X_", $v[0], $q);

	$t1=strtolower($v[0]);
	$t2=strtolower($v[1]);
	$t1=str_replace(' ', '', $t1);
	$t2=str_replace(' ', '', $t2);

	if( isset( $countriesHash[ $t1 ] ) ) {

		print($v[0]."???\n");

	}

	if(isset($capitalsHash[$t2])){
		print($v[0].$v[1]."???\n");
	}
	$countriesHash[$t1]=1;
	$capitalsHash[$t2]=1;


	$countries[ ] = $q ;
	$capitals[ ] = $v[ 1 ]."?" ;
	$done[ ] = "0" ;

}

//print_r( $countries ) ;
//print_r( $capitals ) ;
//print_r( $done ) ;


file_put_contents( "countries.txt" , implode("\n",$countries) );
file_put_contents( "capitals.txt" , implode("\n",$capitals) );
file_put_contents( "done.txt" , implode("\n",$done) );



