<?php


 if(isset($_POST['btn_add']))
 {
	
	$_POST['result']=$_POST['number1'] + $_POST['number2'];
 }
 else if(isset($_POST['btn_sub'])){
	 $_POST['result']=$_POST['number1'] -$_POST['number2'];
 }
 else if(isset($_POST['btn_mul'])){
	 $_POST['result']=$_POST['number1'] *$_POST['number2'];
 }
 else if(isset($_POST['btn_div'])){
	$_POST['result']=$_POST['number1'] /$_POST['number2']; 
 }
 else if(isset($_POST['btn_clear'])){
	 $_POST['result']='';
	 $_POST['number1']='';
	 $_POST['number2']='';
 }

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<div id="parent">
<form action="" method="post" name="form1" id="form1">
	Number1:<input type="text" name="number1"  value="<?php if(isset($_POST['number1'])){echo $_POST['number1'];} ?>" pattern="^[1-9]\d*(\.\d+)?$" title="Numbers are allowed" required></br></br>
	Number2:<input type="text" name="number2" value="<?php if(isset($_POST['number2'])){echo $_POST['number2'];} ?>" pattern="^[1-9]\d*(\.\d+)?$" title="Numbers are allowed" required></br></br>
	Result:<input type="text" id="result" name="result" value="<?php if(isset($_POST['result'])){echo $_POST['result'];} ?>" readonly></br></br>
	<center>
	<input type="submit" value="+" name="btn_add">
	<input type="submit" value="-" name="btn_sub">
	<input type="submit" value="X" name="btn_mul">
	<input type="submit" value="/" name="btn_div"></br></br>
	</center>

	<center><input type="submit" value="Clear All" name="btn_clear" ></center>
	</form>
	</div>
</body>
</html>