<?php
$n =(int)$_POST['nhapN'];
$gt=1;
for ($i = $n%2+2; $i <=$n; $i+=2) {
    $gt*=$i;
}
    echo $n."!=".$gt;