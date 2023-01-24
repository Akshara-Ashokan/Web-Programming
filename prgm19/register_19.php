<html>
<head>
<title>Registration form</title>
<head>
<body>
<h1><center>STUDENT REGISTRATION FORM</center></h1>
<center>
<table border="1" >
<form method="post">
<tr>
<td> FIRST NAME</td>
 <td><input type="text" name="name" size="30">(max 30 characters)</td>
</tr>
<tr>
 <td> LAST NAME</td>
 <td><input type="text" name="Lname" size="30">(max 30 characters)</td>
</tr>
<tr>
 <td> DATE OF BIRTH</td>
 <td><input type="date" name="dob" size="15"></td>
</tr>
<tr>
 <td> EMAIL ID</td>
 <td><input type="text" name="mail" size="35"></td>
</tr>
<tr>
 <td> MOBILE NUMBER</td>
 <td><input type="text" name="mob" size="12">(10 digit number)</td>
</tr>
<tr>
 <td> GENDER</td>
 <td><input type="radio" name="gender" value="Male" size="30"><label>Male</label>
 <input type="radio" name="gender" value="Female" size="30"><label>Female</label>
</td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="uname"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="register" value="Register"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","Akshara");
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["register"])){
$fname=$_POST["name"];
$lname=$_POST["Lname"];
$dob=$_POST["dob"];
$email=$_POST["mail"];
$mob=$_POST["mob"];
$gender=$_POST["gender"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
echo $email;
echo $gender;
echo $mob;
	$sql="insert into student (username,password,firstname,lastname,dob,mobile,email,gender) values('$uname','$pwd','$fname','$lname','$dob','$mob','$email','$gender')";
	if(mysqli_query($con,$sql)){
		echo "<script>alert('User created')</script>";
		header("Location:prgm19.php");
	}else{
		echo("Error description: " . $mysqli -> error);
		}
}
?>
