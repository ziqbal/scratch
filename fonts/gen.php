<?php

/*
SPACE 32
ABCDEFGHIJKLMNOPQRSTUVWXYZ // 65 90
abcdefghijklmnopqrstuvwxyz // 97 122
_- // 45 95
0123456789 // 48 ... 57
. 46
? 63
@ 64

Add index value ...

ASCII -> COSTUME
0 0
1 1
2 2
3
4
...
*/

$chars = array( ) ;
$chars[ ] = " " ;
$chars[ ] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
$chars[ ] = "abcdefghijklmnopqrstuvwxyz" ;
$chars[ ] = "0123456789" ;
$chars[ ] = '_-?.@' ;

print_r($chars);

