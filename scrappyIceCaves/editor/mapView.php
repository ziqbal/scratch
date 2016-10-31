<?php

$id = basename( __FILE__ , '.php' ) ;

print( '<div id="'.$id.'">' ) ;

print("<table>");

for($j=0;$j<14;$j++){

  print( "<tr>" ) ;

  for($i=0;$i<19;$i++){

    print( "<td>" ) ;

    print( "<img src='tiles/emptycell.png'/>" ) ;

    print( "</td>" ) ;


  }

    print( "</tr>" ) ;

}

print("</table>");

print( '</div>' ) ;

?>


<script>

var <?=$id?>App = new Vue( {

  el : '#<?=$id?>' ,

  data : {

    chosenid : ''

  } ,

  methods : {

    test : function ( event ) {

    	this.chosenid = event.currentTarget.id ;

    } 

  }

} ) ;

</script>

