<?php
$name = '';
$name1 = null;

echo 'checking $name';
var_dump(isset($name));
echo '<br/>';
echo 'checking $name1';
var_dump(isset($name1));
echo '<br/>';
echo 'checking undeclared variable $name3: ';
var_dump(isset($name3));