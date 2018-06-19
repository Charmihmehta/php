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

$query = 'SELECT * FROM user';
          
$statement = $db->prepare($query);

$statement->execute();
$bmi = $statement->fetchAll();
$statement->closeCursor();
if(isset($_POST['highest']))
{
$query1 = 'SELECT user_name, Round(MAX(user_bmi),2) as bmi FROM user';
          
$statement = $db->prepare($query1);

$statement->execute();
$bmi1 = $statement->fetchAll();

$statement->closeCursor();

$query2 = 'SELECT user_name as name, Round(MIN(user_bmi),2) as bmii FROM user';
          
$statement1 = $db->prepare($query2);

$statement1->execute();
$bmi2 = $statement1->fetchAll();

$statement1->closeCursor();
}
?>
<html>
<body>
<table border="1">
<tr>
	<th>Name</th>
	<th>Height</th>
	<th>Weight</th>
	<th>BMI</th>
	<th>Status</th>
	<th>Time</th>
	<th>Mesage</th>
</tr>
<?php foreach ($bmi as $user) { ?>

<tr>
    <td><?php echo $user['user_name']; ?></td>
    <td><?php echo $user['user_weight']; ?></td>
	 <td><?php echo $user['user_height']; ?></td>
	  <td><?php echo $user['user_bmi']; ?></td>
	   <td><?php echo $user['user_status']; ?></td>
	    <td><?php echo $user['user_time']; ?></td>
		 <td><?php echo $user['user_msg']; ?></td>
</tr>

<?php } ?>
</table>
<form action="all.php" method="post">
<input type="submit" name="highest"/></br>
<table>

<tr>
    <td><?php if(isset($bmi1[0]['user_name'] )){echo $bmi1[0]['user_name']; } ?></td>
   
	  <td><?php if(isset($bmi1[0]['bmi'] )){echo $bmi1[0]['bmi']; } ?></td>
	  
</tr>




<tr>
 <td><?php if(isset($bmi2[0]['user_name'] )){echo $bmi2[0]['user_name']; } ?></td>
   
	  <td><?php if(isset($bmi2[0]['bmii'] )){echo $bmi2[0]['bmii']; } ?></td>
  
	  
</tr>

</table>
</form>
</body>
</html>