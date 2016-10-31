<?php

$id = basename( __FILE__ , '.php' ) ;

print( '<div id="'.$id.'">' ) ;

print( '<div id="">tileid={{tileid}}</div>' ) ;

$items = array( ) ;
$items[ ] = "tiles/1.png" ;
$items[ ] = "tiles/2.png" ;
$items[ ] = "tiles/3.png" ;
$items[ ] = "tiles/4.png" ;

foreach( $items as $itemk => $itemv ) {

	print( '<span v-on:click="test($event,'.$itemk.')">' ) ;
	print( '<img src="'.$itemv.'"/>' ) ;
	print( '</span>' ) ;

}

print( '</div>' ) ;

?>

<script>

var <?=$id?>App = new Vue( {

  el : '#<?=$id?>' ,

  data : {

    tileid : ''

  } ,

  methods : {

    test : function ( event , id ) {
    	var tagName =  event.target.tagName ; 
    	console.log(tagName+" "+id);

    	this.tileid = id ;

    } 

  }

} ) ;

</script>

