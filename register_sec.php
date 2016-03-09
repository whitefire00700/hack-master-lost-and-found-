<?php

$dbhost = '127.0.0.1';
$dbuser = 'vyas';
$dbpass = 'vyas';
$dbtable='security';

echo "ss";
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$name=$_POST['NAME'];
$id=$_POST['ID'];
$pass=$_POST['PASS'];

echo "ss";


$sql= "INSERT INTO $dbtable(secname,secid,secpass) VALUES ('$name','$id','$pass') ";



mysql_select_db('angelhack');

/*mysql_query(sprintf("INSERT INTO $dbtable (object,desc,place,date) VALUES ('%s','%s','%s','%s')",
 mysql_real_escape_string($name),
 mysql_real_escape_string($desc),
 mysql_real_escape_string($place),
 mysql_real_escape_string($date)));*/

$q=mysql_query($sql)or die(mysql_error());
 

 //echo "success";
 
 header("location:successfully_reg.html");
 
 //{$name},{$book},{$ph},{$mail}

mysql_close();
?>

