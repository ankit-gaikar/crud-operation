<?php
$a=7;
for($n=1;$n<=10;$n++)
{
    echo $a*$n;
    
}

?>
<!-------swap---------->
<?php
$a=3;
$b=5;
$test=$a;
$a=$b;
$b=$test;
echo 'a'.$a;
echo 'b'.$b;

?>
<!-----star pattern------>
<?php
for($n=0;$n<=5;$n++)
{
    for($j=0;$j<$n;$j++)
{
echo '*';
}
echo "<br>";
}

?>
