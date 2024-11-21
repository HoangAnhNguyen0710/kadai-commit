<?php 
    $result = ' None ' ;
     if ( array_key_exists ( ' act ' , $_POST )) {
         $result = omikuji();
    }

    function  omikuji () {
         $fortune = [ " Great luck " , " Good luck " , " Medium luck " , " Small luck " , " Bad luck " , " Unlucky " ];
         return  $fortune [random_int( 0 , count ( $fortune ) - 1 )];
    }
?> 
<!DOCTYPE html> 
<html  lang = " ja " > 
    <head> 
        <meta  charset = " UTF-8 " > 
        <title> Fortune </title> 
    </head> 
    <body> 
        <h1> Fortune </h1> 
        <p> Fortune result: <?php  print  htmlspecialchars ( $result , ENT_QUOTES , " UTF-8 " ); ?> </p> 
        <form  action = " sample.php "  method = " POST " > 
            <button  type = " submit "  name = " act "  value = " draw " > Draw your fortune! </button> 
        </form> 
    </body> 
</html>