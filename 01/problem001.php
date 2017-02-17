<?php
$start=microtime(true);

$toplam=0;
for($i=1;$i<1000;$i++)
{
if($i%3==0 OR $i%5==0)
{
$toplam+=$i;
}
}


$end=microtime(true);
$time=$end-$start;

echo "answer = $toplam ---- $time ms !!!  ";
?>
