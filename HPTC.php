<?php
 $fname = filter_input(INPUT_POST, 'fname');
 $uname = filter_input(INPUT_POST, 'uname');
 $email = filter_input(INPUT_POST, 'email');
 $pass = filter_input(INPUT_POST, 'pass');
 if (!empty($uname)){
if (!empty($pass)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "safari";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO reg_form (fname, uname, email, pass)
values ('$fname', '$uname', '$email', '$pass')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","safari");
	$result = mysqli_query($conn,"SELECT * FROM reg_form WHERE uname='" . $_POST["uname"] . "' and pass = '". $_POST["pass"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>