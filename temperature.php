<?php 

	//adding values into variable $temps
	$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

	//first, we get the sum of all values
	$tempsTotal = array_sum($temps);
	//then we get the amount of values there're in $temps
	$tempsAmount = count($temps);

	//now, let's calculate the average
	$tempsAverage = $tempsTotal / $tempsAmount;
	//letting the value more rounded
	$tempsAverage = ceil($tempsAverage);
	echo $tempsAverage." is the average. <br>";


	//sort $temps to be possible see which are the lowest and highest
	sort($temps);
	//getting the firsts five numbers. It represents the five lowest
	$tempsLowest = array_slice($temps, 0, 5);
	print_r($tempsLowest);

	echo "<br>";
	
	//getting the lasts five numbers. It represents the five highest
	$tempsHighest = array_slice($temps, -5, 5);
	print_r($tempsHighest);
 ?>