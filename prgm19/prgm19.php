<?php
session_start();
?>
<html>
<body>
<form method="post">
Enter Username <input type="text" name="uname"><br><br>
Enter Password&nbsp;&nbsp;<input type="password" name="pwd"><br><br>
<input type="submit" name="login" value="Login">
<input type="submit" name="register" value="Register">
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","Akshara");
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["login"])){
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$sql="select * from student where username='$uname' and password='$pwd'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
	while ($row = mysqli_fetch_row($result)) {
    		setcookie("id",$row[0],time()+3600);
  	}
  	header("Location:welcome_19.php");
	}
else
	echo "Login details error";
}
if(isset($_POST["register"])){
	header("Location:register_19.php");
}
?>
