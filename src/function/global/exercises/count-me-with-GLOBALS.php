<?php
$count = 0;
function countMe(){
   echo $GLOBALS['count']++;
}
countMe();
echo $count;