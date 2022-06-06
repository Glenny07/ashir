 	<!-- FOOTER -->
	<footer>
		<div class="container p-4">
			<div class="row mobile-parent">
				<div class="col-lg-4 col-md-12">
					<img src="img/svg/logo.svg" alt="Ashir Logo" height="100" width="200">
					<p class="p-footer mb-4">Ashir Business Process Outsource Corporation aims to engage in the business of process outsource services such as but not limited to accounting, bookkeeping, data encoding, payroll, tax compliance, social media marketing, telemarketing, customer support and other related services.</p>
					<div class="copyright">
						<?php echo "©Copyright ".date("Y"). " Ashir BPO Corporation";?> 
					</div>
				</div>
				<div class="col-lg-4 col-md-12 p-4">
					<h4 style="font-weight: 700; font-size: 20px">Location</h4>
					<p style="font-size: 15px">2F La Firenze Villa Caceres, Commercial Center, Balibago Sta. Rosa City Laguna Philippines 4026</p>
					<br>
					<h4 style="font-weight: 700; font-size: 20px">Telephone</h4>
					<p style="font-size: 15px">(+63 2) 8668 4508 | (+63 49) 566 9070</p>
				</div>
				<div class="col-lg-4 col-md-12 p-4">
					<h4 style="font-weight: 700; font-size: 20px">Careers</h4>
					<a href="accounting.php" style="font-size: 15px; text-decoration: none; color: #000;">Accounting Staff</a><br>
					<a href="softwareEngineer.php" style="font-size: 15px; text-decoration: none; color: #000;">Software Engineer/IT Staff</a><br>
					<a href="officeAssistant.php" style="font-size: 15px; text-decoration: none; color: #000;">Office Assistant/Messenger</a><br>
					<a href="accountingIntern.php" style="font-size: 15px; text-decoration: none; color: #000;">Accounting Intern</a><br>
					<a href="ITIntern.php" style="font-size: 15px; text-decoration: none; color: #000;">IT Intern</a>
				</div>
			</div>
		</div>
	</footer>
<!-- END OF FOOTER -->
	
	<!-- Jquery file -->
    <script src="bootstrap-5.0.2-dist/js/jquery-3.6.0.js"></script>
    <!-- JQUERY CDN LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- ANIMATION ON SCROLL LIBRARY LINK -->
    <script src="js/aos.js"></script>
    <!-- Custom Js -->
    <script type="text/javascript">
    	// Animation on-scroll
    	AOS.init({
    		offset: 350,
    		duration: 2000,
            disable: 'mobile',
    	});

    	// BACK TO TOP BUTTON
    	const showOnPx = 100; /*Button reveals when it reach the 100 pixels of the screen*/
    	const backToTopButton = document.querySelector(".back-to-top");
    	const scrollContainer = () =>{
    		return document.documentElement || document.body;
    	};
    	document.addEventListener("scroll", () => {
    		if(scrollContainer().scrollTop > showOnPx){
    			backToTopButton.classList.remove("hidden");
    		}else{
    			backToTopButton.classList.add("hidden");
    		}
    	});
    	const goToTop = () =>{
    		document.body.scrollIntoView({
    			behavior: "smooth",
    		});
    	};
    	backToTopButton.addEventListener("click", goToTop);

        // FORM VALIDATION
        ( function () {
            'use strict';

             var forms = document.querySelectorAll('.needs-validation');

             Array.prototype.slice.call(forms)
                .forEach(function (form){
                    form.addEventListener('submit', function(event){
                        if(!form.checkValidity()){
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated')}, false)
                })
        })()
    </script>
</body>
</html>