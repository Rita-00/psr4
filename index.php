<?php

 function customAutoload(string $className)
 {
     $path = str_replace('candy\\', DIRECTORY_SEPARATOR, $className);

     require_once __DIR__ . "/src/$path.php";
 }

 spl_autoload_register('customAutoload');

 $candy=new\Candy\Candy();

 $chocolate = new\Candy\Chocolate(18);
 echo $chocolate->review();

 $toffee = new\Candy\Toffee(2);
 echo $toffee->buy_quantity(8);

 $marmalade = new\Candy\Marmalade(6);
 echo $marmalade->buy_quantity(8);
?>
