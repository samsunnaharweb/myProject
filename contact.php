
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Contact Page</title>
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
</head>
<body>
	
	<div class="header">
	   <div class="mid">
	   
	      <div class="header_left">
		      <ul>
		      	<li>Hello : +8801786250933</li>
		      	<li>||</li>
		      	<li>Gmail : snaharsara20@gmail.com</li>
		      </ul>
		  
		  </div>
	
	      <div class="header_right">
		  		<div class="search">
                	<input class="searchbar" type="text" name="" placeholder="  Type To text...">
                	<a href=""><button class="searchbtn">Search</button></a>
            	</div>
		  
		  </div>
	
	   </div>
	
	</div>
	
	<div class="header_menu">
	
	   <div class="mid">
	   
	       <div class="header_menu_left">
		   
		       <a href="#"><img src="images/8.jpg" alt="" /></a>
		   
		   </div>
	   
	       <div class="header_menu_right">
		   
		       <ul>
		       	<li><a href="index.php">Home</a></li>
		       	<li><a href="about.php">About Us</a></li>
		       	<li><a href="service.php">Services</a></li>
		       	<li><a href="blog.php">Blog</a></li>
		       	<li><a href="contact.php">Contact Us</a></li>
		       </ul>
		   
		   </div>
	   
	   </div>
	
	</div>
	<?php 
		$errorName= $errorContact= $errorEmail= $errorMessage= "";
	?>
	
	<div class="error">
        <P><?php echo $errorName ?></P>
        <P><?php echo $errorContact ?></P>
        <P><?php echo $errorEmail ?></P>
        <P><?php echo $errorMessage ?></P>
    </div>
	<div class="our_contact_form">
		<form action="submit.php" method="post">
			<h1>Contact Us</h1>
			<p>
				<label for="">Your Name : <span>*</span> </label><br />
				<input type="text" name="name"/><br />
			</p>
			<p>
				<label for="">Contact No : <span>*</span> </label><br />
				<input class="con" type="number" name="contact" /><br />
			</p>
			<p>
				<label for="">Email : <span>*</span> </label><br />
				<input class="email" type="email" name="email"/><br />
			</p>
			<p>
				<label for="">Your Message :</label><br/>
				<textarea name="message" id="" cols="30" rows="10"></textarea><br />
			</p>
			<p>
				<input type="submit" name="submit" value="send" />
			</p>
		</form>
	</div>
	
	<div class="footer">
		<div class="footer-col">
			<h4>Restaurant</h4>
			<ul>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Program</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h4>Help</h4>
			<ul>
				<li><a href="#">shipping</a></li>
				<li><a href="#">returns</a></li>
				<li><a href="#">oder status</a></li>
				<li><a href="#">payment options</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h4>Online Shop</h4>
			<ul>
				<li><a href="#">first-foods</a></li>
				<li><a href="#">desi-foods</a></li>
				<li><a href="#">sweets</a></li>
				<li><a href="#">drinks</a></li>
				<li><a href="#">cakes</a></li>
			</ul>
		</div>
		<div class="footer-col1">
			<h4>Follow US</h4>
			<div class="social-links">
				<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
				<a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
		<div class="date">
			<?php echo date("Y"); ?>  @ samsunnahar sara
		</div>
	</div>
</body>
</html>





