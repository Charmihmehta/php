<?php
$dsn = 'mysql:host=localhost;dbname=test2';
$username = 'mgs_user';
$password = 'pa55word';

// creates PDO object

try {
    $db = new PDO($dsn, $username, $password);
    echo '<p>You are connected to the database!</p>';
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo "<p>An error occurred while connecting to
             the database: $error_message </p>";
}

if(isset($_POST['submit']))
{
date_default_timezone_set('America/Toronto');
$date = date('m/d/Y h:i:s a', time());
 
 $name= $_POST['user_name'];
 $weight= $_POST['user_weight'];
 $height= $_POST['user_height'];
 //$message= $_POST['message'];
 if($height==0)
 {
	$message="Cannot divide by zero"; 
 }
 else
 {
 $bmi=$weight/($height*$height);
 if($bmi<18.5)
 {
	 $status="Underweight";
	 $message="You should eat a little bit more";
 }
 else if($bmi>=18.5 && $bmi<=24.9)
 {
	  $status="Normal";
	 $message="Keep doing what you are doing";
 }
 else if($bmi>=25.0 && $bmi<=29.9)
 {
	 $status="Overweight";
	 $message="You should cut down on your food a little bit"; 
 }
 else if($bmi>=30.0)
 {
	  $status="Obese";
	 $message="You should really do something about your appetite ASAP";
 }
  $sql="INSERT INTO USER (user_name,user_height,user_weight,user_bmi,user_status,user_time,user_msg) VALUES(?,?,?,?,?,?,?)";
 
$statement = $db->prepare($sql);
$statement->bindValue(1,$name);
$statement->bindValue(2,$weight);
$statement->bindValue(3,$height);
$statement->bindValue(4,$bmi);
$statement->bindValue(5,$status);
$statement->bindValue(6,$date);
$statement->bindValue(7,$message);
if($statement->execute())
{
	echo "<script>alert('added!'); </script>";
}
else{
	echo "<script>alert('not added!'); </script>";
}
$statement->closeCursor();

}
 
 }
 


?>

<html>
	<body>
	<form action="index.php" method="post">
		Name: <input type="text" name="user_name" value="<?php if(isset($_POST['user_name'])){echo $_POST['user_name'];} ?>" required></br>
		Weight(kg):<input type="text" name="user_weight" value="<?php if(isset($_POST['user_weight'])){echo $_POST['user_weight'];} ?>" pattern="^[0-9]\d*(\.\d+)?$" title="Only numbers" required></br>
		Height(m):<input type="text" name="user_height" value="<?php if(isset($_POST['user_height'])){echo $_POST['user_height'];} ?>" pattern="^[0-9]\d*(\.\d+)?$" title="Only numbers" required></br>
		<input type="submit" name="submit"/></br>
	 
		Your BMI is <label><u><?php if(isset($bmi)){echo $bmi;} ?></u></label>
		.Which is consider as <label><u><?php if(isset($status)){echo $status;} ?></u></label>
		. <label><u><?php if(isset($message)){echo $message;} ?></u></label>
	
		
		
	</form>
	<input type="button" value="View BMI" 
onClick="document.location.href='all.php'" />
	</body>
</html>