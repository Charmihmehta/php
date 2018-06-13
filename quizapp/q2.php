<html>
<head>
<?php
session_start();

?>
<style>
 #table1 {
    border-collapse: collapse;
}
 </style>
</head>
<body>
<form>
2.The hardest substance available on earth is
 <table border="1" id="table1">
  
   
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Gold">
		Gold
<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Iron">
		Iron<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Diamond">
		Diamond<br>
	   </td>
   </tr>
    <tr>
	   <td>
	    <input type="radio" name="gender" value="Platinum">
		Platinum<br>
	   </td>
   </tr>
  
   
 </table></br></br>
<input type="button" name="b1" value="Question 2" onClick="window.location = 'q3.php';" >
 </form>
</body>
</html>