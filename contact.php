<!-- 

CREATED AND DESIGNED BY:
---GLENMHAR PRIOL AURELIO--- 

-->

<?php include "includes/header.php" ?>
<!-- NAVIGATION -->
<body>
	<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid mt-0 mb-0 m-5 p-4">
                <a class="navbar-brand brand" href="index.php"><img src="img/svg/logo.svg" alt="logo" class="logo-brand" width="200" height="70"></a>
                <button class="navbar-toggler collapse-nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="me-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="careers.php">Careers</a>
                        </li>
                         <li class="nav-item">
                            <a class="btn btn-success contact p-2" href="contact.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16"><path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/></svg> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END OF NAVIGATION -->
     <div class="header">
		<img src="img/svg/about/header-logo-left.svg" class="float-left float-lg-left float-sm-left float-md-left" height="335">
		<img src="img/svg/about/header-logo-right.svg" class="float-right" height="335">
		<div class="about-us mt-3 mobile-centered contact-header">
			<h2 data-aos="fade-up" data-aos-duration="1000">CONTACT US</h2>
			<span class="underline-two"></span>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<!-- FORM INPUT -->
				<form method="post" name="frmContact" id="contactForm" class="needs-validation p-5" action="https://formspree.io/f/mjvlpdzn" autocomplete="off" novalidate>
					<div class="row mb-3">
						<div class="col-sm-12">
							<input type="text" class="form-control txtBox focused" id="validationCustom01" name="name" placeholder="Name" required>
							<div class="invalid-feedback">Please provide your full name</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-12">
							<input type="text" class="form-control txtBox" id="validationCustom02" name="company-name" placeholder="Company Name (Optional)">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-12">
							<input type="email" class="form-control txtBox" id="validationCustom03" name="email" placeholder="email@example.com" required>
							<div class="invalid-feedback">Please provide a valid email</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-12">
							<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control txtBox" id="validationCustom04" name="phone-number" placeholder="Phone Number" required>
							<div class="invalid-feedback">Please provide a valid contact number</div>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-12">
							<textarea class="form-control txtBox" id="messageBox" name="message" rows="5" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-12">
					 		<button class="btn btn-success btn-submit" type="submit" style="width: 100%; border-radius: 100px; padding: 0.6em; background: #E88817; border: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16"><path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/></svg>  Send Message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-6">
				<div>
					<div class="d-flex justify-content-center align-items-center">
						<div class="d-grid text-center p-3">
							<h3 style="text-decoration: none; font-weight: 700;">Let's connect!</h3>
							<p style="font-size: 16px;" class="mt-2 connect-header">We would like to hear you! You can call or text us on our telephone numbers provided or email us for inquiries.</p>
							<br>
							<div class="telNumContainer" data-aos="fade-left" data-aos-offset="90" data-aos-duration="500">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#046306" class="bi bi-telephone-fill mt-3" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
								<h4 class="mt-3" style="text-decoration: none; font-weight: 700">(+63 2) 8668 4508</h4>
								<h4 style="text-decoration: none; font-weight: 700">(+63 49) 566 9070</h4>
								<p style="font-size: 15px; color: #c4c4c4">Our Telephone Numbers</p>
							</div>
							<div class="emailContainer" data-aos="fade-left" data-aos-offset="90" data-aos-duration="1000">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#E88817" class="bi bi-envelope-fill" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
								<h4 class="mt-3" style="text-decoration: none; font-weight: 700">inquiry@ashirbpo.com</h4>
								<p style="font-size: 15px; color: #c4c4c4">Email us for inquiries</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
    <!-- Back to top button -->
	<button class="back-to-top hidden"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-arrow-up-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/></svg></button>
<?php include "includes/footer.php" ?>