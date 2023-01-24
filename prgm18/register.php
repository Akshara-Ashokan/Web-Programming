<html>
<body>
<form method="post">
Enter Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname"><br><br>
Enter Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd"><br><br>
Enter Password again <input type="password" name="pwd2"><br><br>
<input type="submit" name="register" value="Register">
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","Akshara");
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["register"])){
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$pwd2=$_POST["pwd2"];
if($pwd == $pwd2){
	$sql="insert into user (username,password) values('$uname','$pwd')";
	if(mysqli_query($con,$sql)){
		echo "User created";
		header("Location:pgm_new18.php");
	}
}else{
	echo "Password Mismatch";
}
}
?>
