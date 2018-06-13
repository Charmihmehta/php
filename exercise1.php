 <html>
 <head>
 <style>
 #table1 {
    border-collapse: collapse;
}
 </style>
 <?php
	$data=Array
	(
		"John"=> Array
		(
			"Subjects"=>Array
			(
				"Maths"=>75,
				"Geogrophy"=>79,
				"History"=>81,
				"Physics"=>90,
				"English"=>77,
			),
		),
		
		"Mary"=> Array
		(
			"Subjects"=>Array
			(
				"Maths"=>76,
				"Geogrophy"=>80,
				"History"=>79,
				"Physics"=>88,
				"English"=>64,
			),
		),
		"Anne"=> Array
		(
			"Subjects"=>Array
			(
				"Maths"=>91,
				"Geogrophy"=>92,
				"History"=>90,
				"Physics"=>94,
				"English"=>93,
			),
		),
		"Mark"=> Array
		(
			"Subjects"=>Array
			(
				"Maths"=>61,
				"Geogrophy"=>60,
				"History"=>64,
				"Physics"=>69,
				"English"=>63,
			),
		),
		"Rita"=> Array
		(
			"Subjects"=>Array
			(
				"Maths"=>82,
				"Geogrophy"=>84,
				"History"=>83,
				"Physics"=>86,
				"English"=>91,
			),
		),
		
		
	);
 ?>
 </head>
 <body>
 <table border="1" id="table1">
	<thead>
	
		<tr>
		    <th>Name</th>
            <th>Maths</th>
            <th>Geography</th>
            <th>History</th>
            <th>Physics</th>
            <th>English</th>
			<th>GPA</th>
			<th> Highest</th>
			<th> Highest Subject</th>
			<th> Lowest</th>
			<th> Lowest Subject</th>
		</tr>
   
	</thead>
	<tbody>
	<?php 
$sum=0;
$sum1=0;
$sum2=0;
$sum3=0;
$sum4=0;

	foreach($data as $student=>$info){
		 echo "<tr><td>$student</td>";
		  $firstRow = true;
		
		 // $a =$info['Maths'];
		
            foreach ($info as $key => $value) {
				 if (strpos($key, "Subjects") === 0) {
                    if (!$firstRow) {
                        echo "<tr>";
                    } 
					
						$value1   = array_slice($value, 0,5);
						$average = array_sum($value1) / count($value1);
						
						$value2 = max($value1);
					    $key = array_search($value2, $value1);
						$value3 = min($value1);
					    $key3 = array_search($value3, $value1);
						
                    echo "<td>{$value['Maths']}</td>";
                    echo "<td>{$value['Geogrophy']}</td>";
                    echo "<td>{$value['History']}</td>";
                    echo "<td>{$value['Physics']}</td>";
                    echo "<td>{$value['English']}</td>";
					echo "<td>$average</td>";
					echo "<td>$value2</td>";
					echo "<td>$key</td>";
					echo "<td>$value3</td>";
					echo "<td>$key3</td>";
					echo"</tr>";
					
					$sum +=$value['Maths'];
					$avg1=$sum/5;
					
					$sum1 +=$value['Geogrophy'];
					$avg2=$sum1/5;
					
					$sum2 +=$value['History'];
					$avg3=$sum2/5;
					
					$sum3 +=$value['Physics'];
					$avg4=$sum3/5;
					
					$sum4 +=$value['English'];
					$avg5=$sum4/5;
					
				
                    $firstRow = false;

	           }
			   
		}
	
	}
	?>
	<tr>
	<td>Average</td>
		<td><?php echo $avg1 ?></td>
 <td><?php echo $avg2 ?></td>
<td><?php echo $avg3 ?></td>
<td><?php echo $avg4 ?></td>
<td><?php echo $avg5 ?></td>		
	</tr>
	<tr>
	<td>Highest Marks</td>
		<td><?php  ?></td>
 <td><?php  ?></td>
<td><?php ?></td>
<td><?php  ?></td>
<td><?php  ?></td>		
	</tr>
	<tr>
	<td>Highest Name </td>
		<td><?php  ?></td>
 <td><?php  ?></td>
<td><?php  ?></td>
<td><?php  ?></td>
<td><?php  ?></td>		
	</tr>
	
	

	
	</tbody>
 
 </table>
 </body>
 </html>