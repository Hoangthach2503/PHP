<?php
$n =(int)$_POST['nhapN'];
$so=0;
for ($i = 1; $i <=$n/2; $i++) {
   if($n%$i==0)
       $so+=$i;
}
if($n==$so)
    echo $n." là số hoàn hảo";
    else echo $n." không là số hoàn hảo";