<?php
include_once 'config.php';
$sql = ""DELETE FROM BOOKING"
if (mysqlli_query($conn,$sql)) {
	echo "Record deleted successfully";
	header ('Refresh:0; url=submitpayment.php');
}else {
	echo "Error deleting recrd! ". mysqli_error($conn);
}
mysqli_close($conn);
?>