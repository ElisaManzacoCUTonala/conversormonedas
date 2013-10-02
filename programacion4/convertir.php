<?php
   $conv=$_POST["conv"];
   
   if("isset($_POST["monto"])){
      define("cantidad",$_POST["monto"])
   }else{

   }  
   echo "son";
   if($conv==1){
     echo cantidad*1.15;
     echo "MXN";
   }else{
     echo cantidad/20;
     echo "Dolar";
   }
?>
