<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "artexpo";

$username=$_POST['username'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT * FROM artists where Username='$username' and Password='$password'";
//user_name='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
$result = mysqli_query($conn,$sql);

$ROW=mysqli_fetch_array($result);

if($ROW['username'] == $username && $ROW['password'] == $password)
{
	 $message = "Welcome";
        echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:upload1.html");
		
}
else
{
	$message = "incorrect";
	echo "alert('incorrect login details')";
	echo '</script>';
	 header("location:login.php");
}





?>