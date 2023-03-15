<?php 
// Start session for each user
session_start();

// include database 
include('includes/db.php');

// Receive Form Inputs
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

// Send Form Inputs into Database
	$send  = "INSERT INTO agency(contact_name, contact_phone, contact_email, contact_message)
		VALUES('$name', '$phone', '$email', '$message')";
	$sent = mysqli_query($connection, $send);

// Return a Message if Successfully Inserted
	if ($sent) {
		$_SESSION['success'] = "Message sent successfully";
		// echo "<script>alert('Sent Successfully')</script>";
		header("Location: contact.php");
		exit(0);
	}


}

include('includes/topnav.php');
?>




    <section class="w3l-inner-page-main">
      <div class="breadcrumb-infhny">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Contact</h2>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
 
	<?php include('includes/session.php') ; ?>
	

	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container">
				<div class="contact-grids row py-lg-5">
					<div class="contact-left col-lg-6">
							<img src="assets/images/contact-sec.jpg" alt="" class="img-fluid">
					</div>
					<div class="contact-right col-lg-6 pl-lg-4">
							<h3>Contact</h3>
						<h4>Send Us A Message</h4>
						<p>We're here to answer any questions you may have and create an effective solution for your instructional needs.</p>
						<form action="" method="POST" class="signin-form mt-lg-5 mt-4">
							<div class="input-grids">
								<input type="text" name="fullname" placeholder="Full name" class="contact-input" />
								<input type="email" name="email" placeholder="Your email" class="contact-input" />
								<input type="number" name="phone" placeholder="Phone number" class="contact-input" />
							</div>
							<div  class="form-input">
								<textarea name="message" placeholder="Type your message here" required=""></textarea>
							</div>
							
							<button class="btn submit" type="submit" name="submit">Send Message</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		<div class="map-hny">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5603672241846!2d3.933284425076902!3d7.403054897301191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103993675ad4aaf1%3A0x3b78b39ccac24e3b!2sKUNDOS%20SOLUTIONS!5e0!3m2!1sen!2sng!4v1678890114330!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	   </div>
	</section>
	<!-- //contact-form -->


<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container">
				<div class="contact-grids row py-lg-5">
					<div class="contact-gridhny col-lg-4">
						<div class="con-gridhny-inf">
							<h6>Bisiness</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler1@example.com</a>
						</div>
					</div>
					<div class="contact-gridhny col-lg-4 my-lg-0 my-4">
						<div class="con-gridhny-inf">
							<h6>Press</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler2@example.com</a>
						</div>
					</div>
					<div class="contact-gridhny col-lg-4">
						<div class="con-gridhny-inf">
							<h6>Career</h6>
							<p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>
							<a href="mailto:handler1@example.com" class="link1 btn">handler3@example.com</a>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- //contact-form -->

	<?php 
	include('includes/footer.php');	
	?>