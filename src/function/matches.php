<?php
$text = "We would like to see if any spaces followed by three word characters
are in this text";
$pattern = "/\s\w{3}/i";
$matches = [];
// preg_match($pattern,$text,$matches);
preg_match_all($pattern,$text,$matches);
print_r($matches);