<?php
declare(strict_types = 1);
function howManyTimesDidWeTellYou(int $numberOfTime): string 
{
    return "You told me {$numberOfTime} time";
}
echo howManytimesDidWeTellYou(1);