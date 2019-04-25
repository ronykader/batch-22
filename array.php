<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<h2>Array Data</h2>
	<?php 

		// $test = "Hello Bangladesh";

		$name = "Md.Tarikl Islam";
		$city = "Dhaka";
		$likes = 'JavaScript';



		// $array = array("Md.Tarikul Islam","Dhaka","JavaScript");

		// echo $array[0];

		// $array = ["Md.Tarikul Islam","Dhaka","JavaScript"];
		// $array2 = ["Kustia","MongoDB","Python"];
		// // echo $array[1];

		// // $array[1] = "Pabna";

		// // $array[0] = 'Abid Pranto';

		// // $array[] = "PHP";
 		
 	// 	$newArray = array_merge($array2,$array);
		// echo "<pre>";
		// print_r($newArray);

		// Associative Array
		// $AssociativeArray = array(
		// 			'name' => 'Rony',
		// 			'city'=>'Dhaka',
		// 			'likes'=>'PHP'
		// 		);

		// $AssociativeArray['city'] = 'Pabna';

		// echo "<pre>";
		// print_r($AssociativeArray);
		// echo $AssociativeArray['likes'];


		// Mulit-Dimensional Array

		$multiDimensionalArray = array(
			'key_one' => array('name' => 'Pobitro Raj','City' => 'Dhaka', 'likes' => 'WordPress'),
			'key_two' => array('name' => 'Shalihin', 'city' => 'Noakhali', 'likes' => 'Money'),
			'key_three' => array('name'=> 'Tamim', 'city' => 'Barishal', 'likes' => 'Birani')
		);



		// echo $multiDimensionalArray[0][2];
		echo "<pre>";
		print_r($multiDimensionalArray);

		echo $multiDimensionalArray['key_three']['city'];




	?>




</body>
</html>