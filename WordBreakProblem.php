<?php
$dict = array("this","th","is","famous","word","break","b"
,"r","e","a","k","br","bre","brea","ak","problem");


$string = "wordbreakproblem";

function wordBreak($dict, $string, $out)
{
    if (strlen($string) == 0)
    {
       echo "\n" . $out;
    }
 
    for ($i = 1; $i <= strlen($string); $i++)
    { 
       $prefix = substr($string,0,$i);
      
      if (in_array($prefix, $dict))
        {
          wordBreak($dict,substr($string,$i), $out." ".$prefix);
        }
  }
}
wordBreak($dict,$string,"");
?>
