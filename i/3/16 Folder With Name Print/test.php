<?php
$array  = scandir("c:/");
$length = sizeOf($array);
$i;
for($i=0;$i<$length;$i++)
{
	echo $array[$i]."<br>";
}
?>