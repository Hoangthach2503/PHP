<?php
$n =@($_POST['NhapN']);
$leng=strlen($n);
$tong=0;
$a=$n;
$tich=1;
$i=0;
while ($a>0&&$i<$n-1){
    $temp=$a%10;
    $tong+=$temp;
    $tich=$tich*$temp;
    $a = (int) $a / 10;
    $i++;
}
echo $n." có tổng và tích của các chữ số của là: ".$tong.", ".$tich;