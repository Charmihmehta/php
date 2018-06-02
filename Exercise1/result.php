<?php
	//get data
	$number_1 = $_POST['Number_1'];
	$number_2 = $_POST['Number_2'];
	$number_3 = $_POST['Number_3'];
	
	//find max min numbers
	
	$max_number=max($number_1,$number_2,$number_3);
	$min_number=min($number_1,$number_2,$number_3);
	
	//average of numbers
	
	$avg=($number_1+$number_2+$number_3)/3;
	
	//sum of numbers
	
	$sum=$number_1+$number_2+$number_3;
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
   
</head>
<body>
    <main>
        <h1>Result</h1>

        <label>High:</label>
        <span><?php echo $max_number; ?></span><br>

        <label>Low:</label>
        <span><?php echo $min_number; ?></span><br>

        <label>Sum:</label>
        <span><?php echo $sum; ?></span><br>

        <label>Avg:</label>
        <span><?php echo $avg; ?></span><br>

        
    </main>
</body>
</html>