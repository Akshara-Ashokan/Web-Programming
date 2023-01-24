<html>   
<head>
<title>Form Validation</title>  
  </head>

<!---------------------body-------------------------->
<body><center>
      <form action="" method="POST" id="quiz-form">
            
            <table border='2' cellpadding='05'>
            <tr> <td>First Name</td><td><input type='text' name='fname'></td><td>Last Name</td><td><input type='text' name='lname'></td></tr>
            <tr> <td>Address</td><td><input type='text'name='address'></td><td>course&year</td><td><input type='text' name='crs'></td></tr>

            <tr> <td colspan='4'><center><b>Contact Details</b></center></td></tr>

            <tr> <td>Email</td><td><input type='text'name='email'></td><td>phone Number</td><td><input type='text' name='mob'></td></tr>
            

            <tr> <td  colspan='4'><center><input type="submit" name="btn" value="submit">&nbsp;&nbsp;<input type="reset" name="reset" value="reset"></center></td></tr>
            </table>
            
            
  	
     </form>

</center></body>

<?php
if($_POST)
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address=$_POST['address'];
$crs=$_POST['crs'];
$mob = $_POST['mob'];
 echo "<h1>Student registration form</h1>";
            echo "First Name:$fname<br>";
            echo "Last Name:$lname<br>";
	     echo "Address:$address<br>";
	     echo "Course:$crs<br>";
           echo "<h3>Contact Details</h3>";

            echo "Mobile number:$mob<br>";
            echo "Email:$email<br>";
            
 }
?>
</html>
