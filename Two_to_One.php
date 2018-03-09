/*
 *
 *Two to One
 *https://www.codewars.com/kata/5656b6906de340bd1b0000ac
 *
 */
<? php
function longest($a, $b) {
    $a = str_split($a);
    $b = str_split($b);
    $combi = array_merge($a,$b);
    $combi_unique = array_unique($combi);
    sort($combi_unique);
    $output = implode("",$combi_unique);
    return $output;
} 
