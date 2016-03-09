

<?php


$name=$_POST['ONAME'];
$desc=$_POST['DESC'];
$place=$_POST['PLACE'];
$date=$_POST['DATEE'];


require("class.phpmailer.php");
include("class.smtp.php");
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->Host = 'smtp.gmail.com';
$mailer->SMTPAuth = true;
$mailer->Username = 'angelhacktest@gmail.com';
$mailer->Password = 'Angelhack123';
$mailer->From = 'Angelhack123';
$mailer->FromName = 'Admin';
$mailer->Body = $name;
$mailer->Subject = $desc + $place;
$mailer->SMTPSecure = 'ssl';
$mailer->SMTPDebug = 1;
$mailer->Port = 465;

$dbhost = '127.0.0.1';
$dbuser = 'vyas';
$dbpass = 'vyas';
$dbtable='employee';
$dbname='angelhack';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


//$res = mysql_query("SELECT mailid FROM employee");

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT mailid FROM employee";
$result = $conn->query($sql);


	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["mailid"]. "<br>";
		$mailer->AddAddress($row["mailid"]);
		$mailer->Send();
    }
} else {
    echo "0 results";
}
$conn->close();
   
?>