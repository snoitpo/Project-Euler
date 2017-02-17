# project euler problem 1 solution
# https://projecteuler.net/problem=1


<?php
$toplam=0;
for($i=1;$i<1000;$i++)
{
if($i%3==0 OR $i%5==0)
{
$toplam+=$i;
}
}
echo $toplam;

?>
