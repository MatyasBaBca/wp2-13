<?php 


$number = filter_input(INPUT_GET, "number"); // Vem parametr GET, ten v URL //
$min = filter_input(INPUT_GET, "min");
$max = filter_input(INPUT_GET, "max"); 


?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<form action="" method="GET">

		Počet: <input type="number" name="number"><br><br>
		Nejmenší: <input type="number" name="min"><br><br>
		Nejvetší: <input type="number" name="max"><br><br>

		<button>Submit</button>
	</form>
	<?php for ($i=0; $i < $number; $i++) {  
		$value1 = rand($min,$max); 
	
echo '<img src="monster.png" style="width:'.$value1.'px; height '.$value1.'px">';	

}
?>


</body>

</html>