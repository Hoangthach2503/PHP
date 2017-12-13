<?php
$a =(int)$_POST['nhapN'];
$n=$a;
$rev = 0;

while($n > 0) {
    $temp = $n% 10;
    $rev = ($rev *  10) + $temp;
    $n = (int) $n / 10;
}
if(($rev/10)==$a)
echo $a." là số tự đối xứng";
else echo $a." không là số tự đối xứng";