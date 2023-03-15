<section class="w3l-footer-22-main">
		<!-- footer-22 -->
		<div class="footer-hny py-5">
			<div class="container py-lg-4">
				<div class="sub-columns row">
					<div class="sub-one-left col-lg-4 col-md-6">
						<h6>About </h6>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia dicta magni ea at,
							culpa atque, rerum dolorum voluptas alias qui temporibus ex expedita obcaecati vel
							asperiores totam distinctio nobis impedit minus.</p>

					</div>
					<div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
						<h6>Quick links</h6>
						<div class="footer-hny-ul">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
							<ul>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="contact.php">Support</a></li>
							</ul>
						</div>
					</div>

					<div class="sub-one-left col-lg-4 col-md-6 mt-lg-0 mt-md-5">
						<h6>Subscribe to our Newsletter </h6>
						<form action="" method="POST" class="footer-newsletter">
							<div class="">
								<input type="email" name="email" class="form-input" placeholder="Enter your email.." />
							</div>
							<button type="submit" class="btn" name="sub-submit" >Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="below-section">
			<div class="container">
				<div class="copyright-footer row">
					<div class="columns col-lg-6">
						<ul class="social footer">
							<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a></li>
						</ul>
					</div>
					<div class="columns copy-right col-lg-6">
						<p>© 2020 Handler. All rights reserved. Design by <a href="https://w3layouts.com/"
								target="_blank">
								W3Layouts</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- //titels-5 -->
		<!-- move top -->
		<button onclick="topFunction()" id="movetop" title="Go to top">
			<span class="fa fa-long-arrow-up"></span>
		</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->

	</section>
	</div>
</body>

</html>


<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>