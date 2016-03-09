<?php
$dbhost = 'mysql12.000webhost.com';
$dbuser = 'a1160721_vyas';
$dbpass = 'ftpaccess22';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$search =$_POST['HSearch'];

$sql = 'SELECT Name, Book, Dept, Phone, Email FROM bookdb WHERE Dept="$search"';

mysql_select_db('a1160721_bookapp');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}


// Conversion to JSON 


$res = mysql_query("SELECT Name, Book, Dept, Phone, Email FROM bookdb WHERE Dept='$search' ");
$rows = array();
   while($r = mysql_fetch_assoc($res)) {
     $rows[] = $r;
   }

 print json_encode($rows);

mysql_close($conn);
?>