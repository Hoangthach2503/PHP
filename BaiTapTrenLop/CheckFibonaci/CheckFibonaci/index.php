<?php
$n =(int)$_POST['nhapN'];
$so=0;
$check=false;
if ($n == 1 || $n == 2) $check=true;
else {
 $a = 1;
 $b = 2;
 $c = 0;
while ($a <= $n) {
    $c = $a;
    $a = $b;
    $b += $c;
    if ($b == $n)
         $check=true;
}
}
if ($check==true)
    echo $n." thuộc dãy fibonaci";
    else
        echo $n." không thuộc dãy fibonaci";