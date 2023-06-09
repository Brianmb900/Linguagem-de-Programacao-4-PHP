﻿<?php
// Exercício - TABUADA (1 a 10)
# Realizar uma tabuada em PHP.

# Use os controles de fluxo:
# a) For
# b) While
# c) Do While

echo "Tabuadas com For: <br>";
$n = 1;
for($j = 1; $j <= 10; $j++){
	for($i = 1; $i <=10; $i++){
		echo $n." x ".$i." = ". $n * $i."<br>"; 
	}
	echo "<hr>";
	$n++;
}

echo "Tabuadas com While: <br>";
$n = 1;
$i = 1;
for($j = 1; $j <= 10; $j++){
	while($i <=10){
		echo $n." x ".$i." = ". $n * $i++."<br>"; 
	}
	echo "<hr>";
	$i = 1;
	$n++;
}

echo "Tabuadas com Do While: <br>";
$n = 1;
$i = 1;
for($j = 1; $j <= 10; $j++){
	do{
		echo $n." x ".$i." = ". $n * $i++."<br>"; 
	}while($i <=10);
	echo "<hr>";
	$i = 1;
	$n++;
}
?>