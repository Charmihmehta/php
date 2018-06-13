<html>
<?php
if(isset($_POST['b1']))
{
 $_POST['ans1']="Yttrium";

 }
?>
<head>
<style>
 #table1 {
    border-collapse: collapse;
}
 </style>
</head>
<body>
<form method="post">
1.Which of the following is not an isotope of hydrogen?
 <table border="1" id="table1">
  
   
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Tritium">
		Tritium<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Deuterium">
		Deuterium<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Protium">
		Protium<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Yttrium">
		Yttrium<br>
	   </td>
   </tr>
  
   
 </table></br></br>
<input type="button" name="b1" value="Question 2" onClick="window.location = 'q2.php';" >
 </form>
</body>
</html>