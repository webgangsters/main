<?php 
session_start();
?>

<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<meta name="description" content="Mobile Online Shop" />
	<meta name="keywords" content="Latest Mobile, Best Mobile, Mobile Price" />
	<meta name="author" content="WebGangsters" />
		
	<title>MobileGangster | Mobile Online Store</title>
	
	<link rel="stylesheet" type="text/css" href="../template.css" />
		
</head>
	
	
<body>
	<div id="container">
	<!-- Header Start -->
		<div id="header">
				<?php include('../header/header.html'); ?>
		</div>
	<!-- Header End -->

	<!-- Navigation Start -->
		<div id="navigation">
				<?php include('../navigation/navigation.html'); ?>
		</div>
	<!-- Navigation End -->
	
	<!-- Mobile Search Box Start -->	
		<div id="tripsearch">
			<table border="0" class="tripsearch">
				<tr>
					<td colspan="2"><img src="../img/mobile_search.gif" alt="Search Your Mobile" /></td>
				</tr>
				<tr>
					<td>Keywords</td>
					<td><input class="tripsearch" type="text" value="keywords" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Search" /></td>
				</tr>
			</table>
		</div>
	<!-- Mobile Search Box End -->
	
	<!-- User Login Box Start -->
		<div id="userlogin">
			<?php include('../php/login.php'); ?>
		</div>
	<!-- User Login Box End -->
	
	<!-- Content Start -->
		<div>
		<!-- Special Offer Start -->
			<div id="special">
				<table border="0" class="special">
					<tr>
						<td class="special"><img src="../img/special.gif" alt="Special Offer This Month" /></td>	
					</tr>
					<tr>
						<td class="special"><img src="../img/loc_ayersrock.jpg" alt="Ayers Rock" /></td>
					</tr>
				</table>
			</div>
		<!-- Special Offer End -->
		
		<!-- News Start -->
			<div id="news">
				<table border="0" class="news">
					<tr>
						<td class="news"><img src="../img/news.gif" alt="Latest News" /></td>	
					</tr>
					<tr>
						<td class="news"><img src="../img/loc_ayersrock.jpg" alt="Ayers Rock" /></td>
					</tr>
				</table>
			</div>
		<!-- News End -->
		
		<!-- Popular Mobile Start -->
			<div id="popular">
				<table border="0" class="popular">
					<tr>
						<td id="toppopular" colspan="2"><img src="../img/popular.gif" alt="Most Popular Mobile" /></td>
					</tr>
					<tr class="popular" style="background-color:#32CD32; color:white;">
						<th>Mobile</th>
						<th>Price</th>
					</tr>
					<tr class="popular">
						<td><a href="../trips/ayersrock.php">HTC Sensation</a></td>
						<td>from $99</td>
					</tr>
					<tr class="popular">
						<td><a href="../trips/cooberpedy.php">Samsung Galaxy S II</a></td>
						<td>from $109</td>
					</tr>
					<tr class="popular">
						<td><a href="../trips/kalgoorlie.php">iPhone 4</a></td>
						<td>from $279</td>
					</tr>
					<tr class="popular">
						<td><a href="../trips/darwin.php">Google Nexus S</a></td>
						<td>from $79</td>
					</tr>
				</table>
			</div>
		<!-- Popular Destination End -->
		</div>
	<!-- Content End -->
	
	<!-- Footer Start -->
		<div id="footer">
				<?php include('../footer/footer.html'); ?>
		</div>
	<!-- Footer End -->
	</div>
</body>
</html>
