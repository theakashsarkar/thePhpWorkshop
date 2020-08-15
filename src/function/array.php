<?php
function argCount(){
  $numberArags = func_num_args();
  echo "You passed $numberArags"; 
}
argCount(1,2,3,4,5);