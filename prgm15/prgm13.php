<!DOCTYPE html>

<head>
	<title>Program in PHP</title>
</head>

<?php
$num = $_POST['num'];
if($num%2==0){
  $result = "even";
}
else
{
   $result = "odd";
}

?>
<body>
    <div id="page-wrap">
	<h1>Even or Odd</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="num" id="num" required="required" value="<?php echo $num; ?>" /> <b> Number</b>
            </p>
           	<p><input type="submit" name="btn" value="submit">
            <p>
                <?php echo $result; ?>
            </p>
            
	  </form>
    </div>
</body>
</html>
