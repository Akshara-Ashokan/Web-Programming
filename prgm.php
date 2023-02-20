<?php
include "connection.php";
// <?php
// $con=mysqli_connect('localhost','root','','mca');
// if(!$con)
// {
// die("connection failed".mysqli_error($con));
// }
// 


//  if(isset($_POST['submit'])){

//     $username = $_POST['uname'];
//     $pass =$_POST['pass'];
//     $q="insert into user(username,pass)values('$username','$pass')";
//     if(mysqli_query($con,$q))
//     {
//         echo "added successfully";
//     }

    
//     }

    

    $q2 = "select * from user";
    $res =mysqli_query($con,$q2);


   

    // echo $row['username'];
    
    
    
?>



<html>
    <head></head>
    <body>
        <form method = "post" action ="">
            <!-- <label>Username</label><input type="text" name = "uname">
            <label>Password</label><input type="password" name="pass">
            <input type ="submit" name ="submit"> --> 
            <table border="1">
                <?php while($row = mysqli_fetch_assoc($res)){
                echo "<tr>
                    <td>";
                    
                    
                    echo $row['username']; 
                    
                    
                    ?></td>
                    <td>
                    <?php echo $row['pass']; ?></td> 
                </tr>

                <?php }?>
            </table>
        </form>
    </body>
</html>
