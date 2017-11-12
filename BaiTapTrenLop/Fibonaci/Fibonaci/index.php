<?php
$n =(int)$_POST['nhapN'];
$so=0;
switch ($n){
    case 0: echo 1;
    break;
    case 1: echo "1  1";
    break;
    default:
       $a=1;
       $b=1;
       echo 1;
for ($i = 1; $i <=$n; $i++) {
    $c = $a;
    $a = $b;
    $b += $c;
    echo "  ".$a;
}

}  