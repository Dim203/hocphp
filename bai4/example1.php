<?php
//biến trong lập trình php
// Các nguyên tắc đặt tên biến trong php
/*
- Phải có ý nghĩa
- Nên đặt bằng tiếng anh
- Bắt đầu bằng dấu đô la $
- Không bắt đầu bằng số
- Sử dụng chữ cái hoa và chữ cái thường, số dấu gạch dưới
- Nên đắt theo quy tắt camel(có thể đặt theo quy tắt snake nếu được yêu cầu)
Ví dụ: kiểu Camel
- userName,myPhone
*kiểu snake:
- user_name. my_phone*/
//BT1: Đặt tên biến cho: Họ tên, tuổi, ngày sinh
$myName;
$myOld;
$myBrithday;
//Các phép toán cộng, trừ, nhân, chia
$x = 5;
$y = 10;
echo "X + Y là: ";
echo $x + $y;
echo "<br>";//xuống dòng
echo "X - Y là: ";
echo $x - $y;
//câu điều kiện
//if (điều kiện 1) {
//	Thực hiện câu lệnh ở đây nếu điều kiện 1 đúng
//}
echo "<br>";
if ($x == 5) {
	echo "X bằng 5";
}
echo "<br>";
if ($y == 11) {
	echo "y bằng 11";
}
//if (điều kiện 1) {
//	thực hiện lệnh nếu dk 1 đúng
//}
//elseif (điều kiện 2) {
//	thực hiện câu lệnh đều dk 2 đúng
//}
//else {
//	thực hiện cau lệnh nếu dk1 và dk2 sai
//}
echo "<br>";
if ($x == 6) {
	echo "x bằng 6";
} elseif ($x == 7) {
	echo "x băng 7";
} else {
	echo "X không bằng 6 không bằng 7";
}
//Phép chia dư trong php là dấu %;
echo "<br>";
Echo 5%3;
echo "<br>";
echo 6%2;
echo "<br>";
echo 9%8;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//BT2: cho trước 1 số x, kiểm tra số đó là chẵn hay lẻ
$x = 7;
if ($x%2==0) {
	echo "X là số chẵn";}
elseif ($x%2==1) {
	echo "X là số lẻ";}
	
?>