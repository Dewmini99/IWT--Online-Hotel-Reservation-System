<?php
include_once 'config.php';
if(isset($_post['update']))
{   
    $booking_id=$_POST["booking_id"];
	$customer_name=$_POST["customer_name"];
	$contact_number=$_POST["contact_number"];
	$event_date=$_POST["event_date"];
	$number_of_guests=$_POST["number_of_guests"];
	$package_type=$_POST["package_type"];
	$length_of_stay=$_POST["length_of_stay"];
	$sub_total=$_POST["sub_total"];
	$card_type=$_POST["card_type"];
	$card_nmber=$_POST["card_nmber"];
	$card__hname=$_POST["card__hname"];
	
	$result=mysqli_query($conn,"UPDATE booking SET customer_name='$customer_name',contact_number='$contact_number',event_date='$event_date',number_of_guests='$number_of_guests',package_type='$package_type',length_of_stay='$$length_of_stay',sub_total='$sub_total,card_type='$card_type',card_nmber='$card_nmber',card__hname='$card__hname' WHERE event_id=$booking_id");
    header("Location:Admin.html");
}
?>


<DOCTYPE html>
<head>
<title>Secret Mirage</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<script type="text/javascript" src="js/myscript.js"></script>
</head>
<body>
<hr id="hline">
<div style="background-image: url(image/header_.jpg); background-size: 100% 100%;">

<img src="image/Logo.png"width="150"height="150" title="Secret Mirage" align="left" style="margin-right:20px margin-top:10px;">

<a href="https//www.facebook.com">
<img src="image/log_in.png"width="60"height="70" title="sign in" style="float:right;margin:10px 50px" class="demo opacity hover-opacity-off"></a>

<a href="https://www.facebook.com">
<img src="image/sign_in.png"width="60"height="70" title="log in" style="float:right;margin:10px 0px" align="right" class="demo opacity hover-opacity-off"></a>

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




<div style="background-image: url(image/form2.jpeg); background-size: 100% 100%;">
<br><br>

<div><h1 align="center">Update Event Details <h1></div>

<div>

<?php
$booking_id=$_GET['booking_id'];
$result=mysqli_query($conn,"select from booking where booking_id=$booking_id");
while($row=mysqli_fetch_array($result))
{
	 $booking_id=$_POST["booking_id"];
	$customer_name=$_POST["customer_name"];
	$contact_number=$_POST["contact_number"];
	$event_date=$_POST["event_date"];
	$number_of_guests=$_POST["number_of_guests"];
	$package_type=$_POST["package_type"];
	$length_of_stay=$_POST["length_of_stay"];
	$sub_total=$_POST["sub_total"];
	$card_type=$_POST["card_type"];
	$card_nmber=$_POST["card_nmber"];
	$card__hname=$_POST["card__hname"];
	
}
?>

<div class="container1">
  <form method="POST" action="Editbooking.php"/>
  <div class="row">
    <div class="col-25">
      <label for="fname">Customer ID</label>
    </div>
    <div class="col-75">
      <input type="text1" id="customer_id" name="c_id"value=<?php echo $customer_id;?>>
    </div>
  </div>
  
  
 <div class="row">
    <div class="col-25">
      <label for="fname">Customer name</label>
    </div>
    <div class="col-75">
      <input type="text1" id="c_name" name="c_name"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="email">Contact number</label>
    </div>
    <div class="col-75">
      <input type="text1" id="c_no" name="c_no"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  <div><h1 align="center">Billing Details<h1></div>
  
  <div class="row">
    <div class="col-25">
      <label for="email">Arrival</label>
    </div>
    <div class="col-75">
      <input type="text1" id="arrival" name="arrival"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="email">Number of guests</label>
    </div>
    <div class="col-75">
      <input type="text1" id="c_gsts" name="c_gsts"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="email">Package type</label>
    </div>
    <div class="col-75">
      <input type="text1" id="pkg_type" name="pkg_type"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="email">Length of stay</label>
    </div>
    <div class="col-75">
      <input type="text1" id="l_stay" name="l_stay"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>

<div><h1 align="center">Payment Details<h1></div>

<div class="row">
    <div class="col-25">
      <label for="email">subtotal</label>
    </div>
    <div class="col-75">
      <input type="text1" id="s_total" name="s_total"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
 <div class="row">
    <div class="col-25">
      <label for="email">Card Type</label>
    </div>
    <div class="col-75">
      <input type="text1" id="c_type" name="c_type"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="email">Card Number</label>
    </div>
    <div class="col-75">
      <input type="text1" id="c_nmber" name="c_nmber"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="email">Card Holder Name </label>
    </div>
    <div class="col-75">
      <input type="text1" id="h_name" name="h_name"value=<?php echo $customer_id;?>></textarea>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="fed">">update</label>
    </div>
    
  
  
  
    <input type="hidden" value="Update" name="booking_id" value=<?php echo $_GET['booking_id'];?>>
  
  <div class="row" align="right">
    <input type="submit" value="Update">
    
  </div>
  
  </form>
</div>
<br><br>
</div>
</div>

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
<img src= "Image/Visa.png" width="40" height="30" align="left" style="margin:0px 0px" class="demo opacity hover-opacity-off"></a>

<a href="https://www.mastercard.us/en-us/personal/ways-to-pay/click-to-pay.html">
<img src= "Image/Mastercard.png" width="50" height="30" align="left" style="margin:0px 50px" class="demo opacity hover-opacity-off"></a>

<a href="https://www.americanexpress.lk/en/online-services/online-payments">
<img src= "Image/Americanexpress.jpg" width="50" height="30" align="left" style="margin:0px 10px" class="demo opacity hover-opacity-off"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Discover.jpg" width="50" height="30" align="left" style="margin:0px 50px" class="demo opacity hover-opacity-off"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Googleplay.jpg" width="70" height="30" align="left" style="margin:0px 10px; margin-right:520px"class="demo opacity hover-opacity-off" ></a>



<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Facebook.jpg" width="30" height="30" align="left" style="margin:0px 30px" class="demo opacity hover-opacity-off"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Twitter.jpg" width="30" height="30" align="left" style="margin:0px 20px" class="demo opacity hover-opacity-off"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/Instagram.jpg" width="40" height="40" align="left" style="margin:-5px 30px" class="demo opacity hover-opacity-off"></a>

<a href="https://portal.discover.com/customersvcs/universalLogin/ac_main">
<img src= "Image/G.png" width="30" height="30" align="left" style="margin:0px 20px" class="demo opacity hover-opacity-off"></a>

<a href="https://www.youtube.com/">
<img src= "Image/Subscribe.jpg" width="80" height="30" align="left" style="margin:0px 30px" class="demo opacity hover-opacity-off"></a>
<br><br>
</div>

<hr id ="hline">

</body>