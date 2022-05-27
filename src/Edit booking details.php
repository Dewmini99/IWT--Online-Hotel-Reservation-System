<?php
include_once 'config.php';
?>
<DOCTYPE html>
<head>
<title>Secret Mirage</title>
<link rel="stylesheet" type="text/css" href="style/style1.css">
<script type="text/javascript" src="js/myscript1.js"></script>
</head>
<body>
<hr id="hline">
<div style="background-image: url(image/header_.jpg); background-size: 100% 100%;">

<img src="image/Logo.png"width="150"height="150" title="Secret Mirage" align="left" style="margin-right:20px margin-top:10px;">

<a href="https//www.facebook.com">
<img src="image/log_in.png"width="60"height="70" title="log in" style="float:right;margin:10px 50px"></a>

<a href="https://www.facebook.com">
<img src="image/sign_in.png"width="60"height="70" title="sign in" style="float:right;margin:10px 0px" align="right"></a>

<h1 style="color:1F9684; font-size:40;">  Secret Mirage </h1>
<span style="font-size:200%;color:yellow;">&starf;&starf;&starf;&starf;&starf;</span>
<br>
<input type="text" placeholder="Search.." style="float:right; margin: 0px 40px">

<br><br>
</div>

<hr id="hline">
<ul class="menu">
<li class="menu"><a href="http://courseweb.sliit.lk/">Home</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">About</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Packagers</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Facilities</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Flexible Cancellation</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Review</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Location</a></li>
<li class="menu"><a href="http://courseweb.sliit.lk/">Contact Us</a></li>
</ul>


<div class="booking data table" style="border-style:groove; border-color:DarkBlue">
	<table border="1" width="100%">
	<tr>
	<th class="col1">booking id</th>
	<th class="col1">Customer name</th>
	<th class="col1">Contact number</th>
	<th class="col1">Arrival</th>
	<th class="col1">Number of guests</th>
	<th class="col1">Package type</th>
	<th class="col2">Length of stay</th>
	<th class="col1">subtotal</th>
	<th class="col1">Card Type</th>
	<th class="col1">Card Number</th>
	<th class="col1">Card Holder Name</th>
	
	</tr>
	<?php
	$sql="select * from booking";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){
		
		echo"<tr><td>".$row["booking_id"]."</td><td>".$row["customer_name"]."</td><td>".$row["contact_number"]."</td><td>".$row["event_date"]."</td><td>".$row["number_of_guests"]."</td><td>".$row["package_type"]."</td><td>".$row["length_of_stay"]."</td><td>".$row["sub_total"]."</td><td>".$row["card_type"]."</td><td>".$row["card_nmber"]."</td><td>".$row["card__hname"]."</td></tr>";
		
		}
		
	}
	else{
		echo "empty table";
	}
	?>
	</table>
</div>








<br>







<hr id ="hline">

<div style="background-color:8F96A8;">
<br>
<img src = "Image/Logo.png" alt = "Logo Icon" width="93" height="93" align="left" style="margin:10px 0px;margin-right:20px;">

<img src= "Image/Scanbarcode.png" width="120" height="120" align="right" style="margin:10px 40px">

<img src = "Image/Letter.jpg" alt= "Letter Icon" width="20" height="20" align ="left" style="margin-top:20px;">
<h4> Secret Mirage,PO Box.100,Bandarawela Rd,Ella,Sri Lanka. </h4 >

<img src = "Image/Telephone2.jpg" alt= "Telephone Icon" width="20" height="20" align ="left">
<h4>+94141231234 </h4>

<img src = "Image/Mail.jpg" alt= "Mail Icon" width="20" height="20" align ="left">
<h4> secretmirage@gmail.com </h4>
<br>
<a href="https://www.visa.com.lk/pay-with-visa/click-to-pay-with-visa.html">
<img src= "Image/Visa.png" width="40" height="30" align="left" style="margin:0px 0px"></a>

<a href="https://www.mastercard.us/en-us/personal/ways-to-pay/click-to-pay.html">
<img src= "Image/Mastercard.png" width="50" height="30" align="left" style="margin:0px 50px"></a>

<a href="https://www.americanexpress.lk/en/online-services/online-payments">
<img src= "Image/Americanexpress.jpg" width="50" height="30" align="left" style="margin:0px 10px"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Discover.jpg" width="50" height="30" align="left" style="margin:0px 50px"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Googleplay.jpg" width="70" height="30" align="left" style="margin:0px 10px; margin-right:550px"></a>



<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Facebook.jpg" width="30" height="30" align="left" style="margin:0px 30px"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Twitter.jpg" width="30" height="30" align="left" style="margin:0px 20px"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Instagram.jpg" width="40" height="40" align="left" style="margin:-5px 30px"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/G.png" width="30" height="30" align="left" style="margin:0px 20px"></a>

<a href="https://www.youtube.com/">
<img src= "Image/Subscribe.jpg" width="80" height="30" align="left" style="margin:0px 10px"></a>
<br><br>
</div>

<hr id ="hline">

</body>
</html>