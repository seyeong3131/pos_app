<html>

<?php
	$conn = mysqli_connect(
	  'localhost',
	  'root',
	  'apmsetup',
	  'cafe');
	$v1 = "INSERT INTO `order` (pirce_sum, order_contents) VALUES (5000000, 'ame*400EA, cafelatte*8EA')";
	$result = mysqli_query($conn, $v1);
	echo $result;
//	$row = mysqli_fetch_array($result);
 // 	echo '<h2>'.$row['menu'].'</h2>';
 // 	echo $row['price'];
?>


$v1 = 받아온값;

$v1 = db.save();

return 정상적ㅇ로 저장되엇습니다!;
eh

</html>