<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "bài tập 1";
echo "<br>";
echo "<br>";
echo "<br>";
$teamOne;
$teamTwo;
$teamOne = 12;
$teamTwo = ($teamOne *2) - 4;
echo "so thanh vien cua team 2 la : ";
echo ($teamOne *2) - 4;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Bai tap 2";
echo "<br>";
echo "<br>";
echo "<br>";
$money = 2000;
$candyPrices = 200;
$candyShell = 0 ;
$candy = 0 ;

//Mua kẹo
	echo "số kẹo mua được với giá 2000 là :";
	echo $candy = $money/$candyPrices;
	echo "<br>";
	echo "đổi kẹo";
	$candyShell = $candy;// vỏ kẹo = kẹo
	while ($candyShell >= 2){
	 	// trừ 2 cái vỏ cho 1 lần đổi kẹo
	$candyShell = $candyShell - 2; //2 vỏ là dc 1 kẹo	
	$candy = $candy + 1;
	//1 kẹo là dc 1 vỏ
	$candyShell = $candyShell + 1;
	}
echo "số kẹo có được ở đây: ";
echo $candy;

?>
