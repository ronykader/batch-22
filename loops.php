<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Loop</title>
</head>
<body>

	<!-- 1,2,3,4,................100 -->


	<?php 
	
	// $data = [1, 2, 3, 4, 5, 6];

	// for( $i = 0; $i <= count($data); $i ++  ) {

	//  	echo $i . "<br>";
	//  }


	// $product = [
	// 	['name' => 'Apple', 'price' => 500], 
	// 	['name' => 'Orange', 'price' => 300], 
	// 	['name' => 'Asus', 'price' => 200], 
	// 	['name' => 'Acer', 'price' => 100], 
	// ];

	// foreach( $product as $rk )
	//  	echo $rk['name']. "-" . $rk['price']. "<br>";

	// $test = ['Rony','Anik', 'Avizit', 'Belal'];






	 ?>



	<!-- <h2>User List</h2>
	<ul>
		<?php 
			//foreach ($test as $key => $username ) { ?>
			//	<li><?php// echo $username . " - key is - ". $key ; ?></li>
			<?php //}

		 ?>


	</ul>


	<h2>Product List</h2>

	<ul>
		<?php

			//foreach ($product as $data ) {
				//echo "<li>" . $data['name'] . "<span style='color: red;'> Price ".$data['price']." tk</span> "."</li>";
			//}

		 ?>
		<li>Product One </li>
	</ul> -->



	<?php 
		// echo true === "1";
		// echo 5>2;
		// echo 'r' > 'R';


		$data = 50;

		if ( $data == 10 ) {
			echo "Data er man 10";
		} else if( $data == 20 ) {
			echo "Data er man 20";
		} else if ( $data == 30 ) {
			echo "Data er man 30";
		} else if ( $data > 100 ) {
			echo "Data er man 100 er thaka soto";
		} else {
			echo "J Data er sothik man daua hoi nai";
		}

	 ?>

	
</body>
</html>
