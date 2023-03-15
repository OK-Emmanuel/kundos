<?php 
if(isset($_POST['sub-submit'])){
    $email = $_POST['email'];
    $export = "INSERT INTO subscribers(sub_email)
                VALUES('$email')";
    $export2 = mysqli_query($connection, $export);
    if($export2){
        echo "<script>alert('Subscriber added successfully')</script>";
        echo "<script>window.location.href</script>";
    }
 
}
?>

<!doctype html>
<html lang="eng">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Handler a Corporate Category Bootstrap Responsive Website Template | Contact :: W3layouts</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>

<!--/top-header-content-->
<section class="w3l-top-header-content">
	<div class="hny-top-menu">
		<div class="top-hd">
			<div class="container-fluid">
				<div class="row">
					<div class="social-top col-lg-6">
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
						<li>
							<a href="#">
								<span class="fa fa-linkedin"></span>
							</a>
						</li>
					</div>
					<div class="accounts col-lg-6">
						<li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">+142
								5897555</a>
						</li>

						<li class="top_li"><span class="fa fa-envelope-o"></span><a href="mailto:info@example.com">Need help? Contact us via email</a>

						</li>
						<li class="top_li1"><span class="fa fa-map-marker"></span> 158 Avenues Street </li>
					</div>
				</div>
			</div>
		</div>
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php"><span class="fa fa-podcast" aria-hidden="true"></span> <label class="lohny">H</label>andler</a>
				<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.php">
					<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Services</a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
		<!--//nav-->
	</div>

</section>
<!--//top-header-content-->