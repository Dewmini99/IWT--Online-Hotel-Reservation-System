<?php
	include_once 'config.php';

?>

<?php
	$customer_name = $_POST["c_name"];
	$contact_number = $_POST["c_no"];
	$event_date = $_POST["arrival"];
	$number_of_guests = $_POST["c_gsts"];
	$package_type = $_POST["pkg_type"];
	$length_of_stay = $_POST["l_stay"];
	$sub_total = $_POST["s_total"];
	$card_type = $_POST["c_type"];
	$card_nmber = $_POST["c_nmber"];
	
	
	$sql = "insert into booking(booking_id,customer_name,contact_number,event_date,number_of_guests,package_type,length_of_stay,sub_total,card_type,card_nmber)values('','$customer_name','$contact_number','$event_date','$number_of_guests','$package_type','$length_of_stay','$sub_total','$card_type','$card_nmber')";
	
	if(mysqli_query($conn,$sql)) {
		echo "<script>alert ('Record inserted successfully!!!')</script>";
		header("Location:booking.html");
	}
	else{
		echo"<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
	

?>