<?php
    $key=$_GET["key"];

$array=array();
$res = array();
$query=mysql_query("SELECT * FROM demo WHERE CONCAT( nameFirst,  ' ', nameLast )  LIKE '%{$key}%'");
$result = $conn->query($mysql_qry);
    while($row=mysql_fetch_assoc($result))
    {
      $array[] = $row['title'];
    }
for($x=0;$x<5;$x++)
{
$res[$x]=$array[$x]; //taking 5 results
}
    echo json_encode($res);

?>