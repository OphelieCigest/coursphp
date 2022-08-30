<!-- //Clock shows h hours, m minutes and s seconds after midnight.

//Your task is to write a function which returns the time since midnight in milliseconds. -->

<!-- Example:
h = 0
m = 1
s = 1

result = 61000
Input constraints:

0 <= h <= 23
0 <= m <= 59
0 <= s <= 59 -->

Retourner l'heure depuis minuit en milliseconds actuellement il est 15 h et  minutes
<?php
function past($h, $m, $s) {
    return ($h * 3600 + $m * 60 + $s) * 1000;
}




// ou autre manière
const MILISECONDS_IN_SECOND = 1000;
const MILISECONDS_IN_MINUTE = 60 * MILISECONDS_IN_SECOND;
const MILISECONDS_IN_HOUR = 60 * MILISECONDS_IN_MINUTE;  
 

function passeminuit($h, $m, $s) {
 
  $result = $h * MILISECONDS_IN_HOUR + $m * MILISECONDS_IN_MINUTE + $s * MILISECONDS_IN_SECOND;
    
  return $result;
}