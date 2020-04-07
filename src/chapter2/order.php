<?php
 $str = 'You order total is : ';
 $order = 20;
 $additional = 5;
 $orderTotal = 0;
 $complete = false;
 $orderTotal = $order + $additional;
 if($orderTotal >= 25){
     $complete = true;
     echo $str . $orderTotal;
 }
?>