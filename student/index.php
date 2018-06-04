<?php

$con ='mysql:host=localhost;dbname=student';
$username='mgs_user';
$password='pa55word';
try{
$db=new PDO($con,$username,$password);
echo'<p>Connected<p>';
}
catch(PDOException $e)
{
	$msg = $e->getMessage();
	echo"<p>not Connected<p>";
}
$query= 'SELECT * FROM student_details';
if(isset($_POST['btn1']))
{
	$query = 'SELECT * FROM student_details ORDER BY std_gpa ASC';
}
if(isset($_POST['btn2']))
{
	$query = 'SELECT * FROM student_details ORDER BY std_gpa DESC';
}
if(isset($_POST['btn3']))
{
	$query = 'SELECT * FROM student_details ORDER BY std_name ASC';
}
if(isset($_POST['btn4']))
{
	$query = 'SELECT * FROM student_details ORDER BY std_lst_name ASC';
}
$stm = $db->prepare($query);
$stm->execute();
$students = $stm->fetchAll();
$stm->closeCursor();



?>

<html>
<body>
<form id="form1" method="post" action="index.php">
<section>
<table >
    <tr>
		<th>Student Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>GPA</th>
		
	</tr>

	<?php foreach($students as $student) {?>
	
	
	<tr>
		<td><?php echo $student['std_id']; ?></td>
		<td><?php echo $student['std_name']; ?></td>
		<td><?php echo $student['std_lst_name']; ?></td>
		<td><?php echo $student['std_email']; ?></td>
		<td><?php echo $student['std_gpa']; ?></td>
	</tr>

	
	<?php }?>
	</table>
	
	</section>
	<table>
	<tr>
	<td><input type="submit" name="btn1" id="btn1" value="GPA A-Z"></td>
	<td><input type="submit" name="btn2" id="btn2" value="GPA Z-A"></td>
	<td><input type="submit" name="btn3" id="btn3" value="FirstName A-Z"></td>
	<td><input type="submit" name="btn4" id="btn4" value="LastName A-Z"></td>
	
	</tr>
	</table>
	</form>
</body>
</html>