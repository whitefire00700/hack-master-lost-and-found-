<?php

$host="127.0.0.1"; // Host name
$username="vyas"; // Mysql username
$password="vyas"; // Mysql password
$db_name="angelhack"; // Database name
$tbl_name="employee"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['EID'];
$mypassword=$_POST['EPASS'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE mailid='$myusername' and pass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:index.html");
}
else {
	
//echo "Wrong Username or Password";
header("location:invalid.html");
}
?>