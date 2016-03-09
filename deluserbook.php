<?php
$dbhost = 'mysql12.000webhost.com';
$dbuser = 'a1160721_vyas';
$dbpass = 'ftpaccess22';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$user =$_POST['HUser'];
$bookname =$_POST['HDelbook'];

$sql = 'DELETE FROM bookdb WHERE Email="$user" AND Book="$bookname" ';

mysql_select_db('a1160721_bookapp');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}


// Conversion to JSON 


$res = mysql_query("DELETE FROM bookdb WHERE Email='$user' AND Book='$bookname'");

if($res=1)
{
 echo "Success !";
 }
 else
{
 echo "Failure !";
 }
mysql_close($conn);
?>