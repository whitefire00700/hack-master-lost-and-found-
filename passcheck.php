<?php

$host="127.0.0.1"; // Host name
$username="vyas"; // Mysql username
$password="vyas"; // Mysql password
$db_name="angelhack"; // Database name
$tbl_name="security"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['SID'];
$mypassword=$_POST['SPASS'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE secid='$myusername' and secpass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:emp_login.html");
}
else {
//echo "Wrong Username or Password";
header("location:invalid.html");
}
?>