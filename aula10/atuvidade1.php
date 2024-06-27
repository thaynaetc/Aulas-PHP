<?php
   $valores = array (10,20,30,40);
   $media;
   $soma;

   foreach($valores  as $v){
     $soma+= $v;
   }
   $media=$soma/4;
   echo"A soma dos valores saõ: {$soma}\n";
   echo "A media dos valores são: {$media}\n";   
?>