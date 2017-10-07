   <?php
   
   session_start();
   ?>
   
   <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	   <style>
	 td 
{
    text-align:center; 
    vertical-align:middle;
}

body{
	
	background-color:#990000;
}

table{
	margin-left: 500px;
	
	margin-top:100px;
	
	
}

table,td  {
	border: 2px solid grey;
	border-collapse: collapse;
	padding: 15px;
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: bold;
}

th  {
	border: 2px solid grey;
	border-collapse: collapse;
	padding: 15px;
	font-family: 'Roboto', sans-serif;
	font-size: 15px;
	font-weight: bold;
}

table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
 .navbar-header .navbar-brand:hover,
.navbar-header .navbar-brand:focus,
.navbar-collapse .navbar-nav > li > a:hover,
.navbar-collapse .navbar-nav > li > a:focus {
    color: #990000;

}



.navbar-header .navbar-brand,
.navbar-header .navbar-brand,
.navbar-collapse .navbar-nav,
.navbar-collapse .navbar-nav{
	font-weight: bold;
	font-family: 'Roboto', sans-serif;
} 

.form-group, footer{
font-family: 'Roboto', sans-serif;
}

legend{
font-family: 'Roboto', sans-serif;
font-weight: bold;
}

.btn {
    background-color: #990000; 
    border: none;
    color: white;
	padding: 7px;
    text-align: center;
    display: inline-block;
    font-size: 15 px;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	font-weight: bold;
}

.btn:hover {
    background-color: #990000;
    color: white;
}

html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url(1.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(2) {
    background: url(4.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.item:nth-child(3) {
    background: url(3.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: fixed;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  margin-top: 20px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
#test{
position: relative;
    top: 620px;
	color:white;
}
#test1{
  background-color: #990000; 
    border: none;
    color: white;
	padding: 7px;
    text-align: center;
    display: inline-block;
    font-size: 15 px;
	 position: relative;
    top: 610px;
}


@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}


input[type=submit]
{
    background-color: #990000;
    border: none;
    color: white;
	border-radius: 5px;
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: bold;
	margin-top:9px;
    padding: 8px 16px;
    text-decoration: none;
	width: 50%
    cursor: pointer;
}

input[type=button]
{
    background-color: #990000;
    border: none;
    color: white;
	border-radius: 5px;
	font-family: 'Roboto', sans-serif;
	font-size: 12px;
	font-weight: bold;
    padding: 8px 16px;
    text-decoration: none;
	width: 50%
    cursor: pointer;
	
}

	 </style>
    </head>
    <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-eye-open"></span>RedEye</a>
    </div>
	    <div>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="nav navbar-nav">
   <li><a data-toggle="modal" data-target="#login-modal" style="cursor:pointer">Book a Ride!</a></li>
	<li><a href="ShoppingCart.html">Order Snacks</a></li>
	<li><a href="aboutUs.html">About Us</a></li>
	<li><a href="Events.html">Events</a></li>
	<li><a href="locations.html">Areas Covered</a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Interact with Us<span class="caret"></span></a>
    <ul class="dropdown-menu">
	<li><a href="Complaint.html">Grievances</a></li>
    <li><a href="contactUs.html">Contact Us</a></li>
	<li><a href="NUPD.html">NUPD-Services</a></li>
    </ul>
	
    </li>
    </ul>
    <div>
	
	<form class="navbar-form navbar-right" role="search">
    <div class="input-group">
	<a href="tel:+8572609895"><i class="icon-search"></i><input type = "button" value="Emergency: (857)-260-9895"></a>
     </div>
     </form>
    <li><form class="testing" action="logout.php" method='post' accept-charset='UTF-8'>
	<input type="submit" name="logout" value="logout" >
				  </form>
   </li>
    </div>
  </div>
</nav>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form action='login.php' method='post' accept-charset='UTF-8'>
				  <input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="Submit" class="login loginmodal-submit" value="Submit" >
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";
	  $dbname ="ride_details";
	$var_value=$_SESSION["login_user"];
	
	
     // Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT fname,lname,ride_time,ride_date FROM ride_details WHERE userid='$var_value'";
$result = mysqli_query($conn, $sql);

      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b;" >
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Ride Time</th>
		  <th>Ride Date</th>
		  
          
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result )){
            echo "<tr>
			  <td>{$row['fname']}</td>
              <td>{$row['lname']}</td>
              <td>{$row['ride_time']}</td>
			  <td>{$row['ride_date']}</td>
           </tr>";
		   }
			?>
      </tbody>
    </table>
     <?php
	
	 $conn->close();?>
    </body>
    </html>