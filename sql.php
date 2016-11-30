<?php
$data = file("file.txt");
$da=file("fileo.txt");
$length=count($data);
$inc=$length;
for ($x = 0; $x < $length; $x++)
{   
echo(" ('");
echo $data[$x];
echo("', '");
echo $da[$inc];
echo("'), ");
$inc--;

}
   ?>
