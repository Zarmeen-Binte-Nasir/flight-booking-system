<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';   
   ?>
<link rel="stylesheet" href="assets/css/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-ZvpUoO/+P2Q2cZjwR2U8lAWR+Rzj2YO5/8BA/91TRz8zCeEoixtMOo5r5qFw2RLf" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0BbEJ6fBP4zzr68Anf1L8r12ntxP1MZFLz5fs1vcxBiJmW8e6BP3p1zMZa" crossorigin="anonymous"></script>

<style>
.main-col {
    padding: 30px;
    background-color: whitesmoke;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    margin-top: 50px;   
}
.about-section {
    background-color: white;
    padding: 20px;
    margin-top: 30px;
    text-align: center;
}
.feedback-section {
    margin-top: 50px;
    text-align: center;
}
.feedback-card {
    background-color: white;
    padding: 20px;
    margin: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
.feedback-card img {
    border-radius: 50%;
    margin-bottom: 15px;
    width: 80px;
    height: 80px;
}
body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h2 {
    font-family: 'product sans', sans-serif;
    color: #2c3e50;
}

h1{
    font-size: 50px !important;
  margin-bottom: 20px;  
  color: white;  
  font-family :'product sans' !important;
  text-align: center;
}

p {
    color: #424242;
    font-size: 18px;
}
@media screen and (max-width: 900px){
    body {
        background: linear-gradient(to right, #2c3e50, #bdc3c7);
    }  
}
</style>
<main>
    <div class="container mb-5">
    <h1 class="text-center"><i class="fa-solid fa-plane-circle-check"></i>  ABOUT US</h1>
        <div class="col-md-12 main-col">
        <h2 class="text-center">Who We Are</h2>
            <div class="about-section">
                <p>Welcome to Online Flight Booking, where we aim to make travel seamless and stress-free. Our platform is dedicated to providing the best flight booking experience with a user-friendly interface and exceptional customer service.</p>
                <p>Since our inception, we've helped thousands of travelers reach their destinations with ease and confidence. At the heart of our service is the commitment to ensure your journey begins on the right note.</p>
                <img src="assets/images/about us.png" alt="About Us" style="width: 100%; border-radius: 10px;">
            </div>
            <div class="feedback-section">
                <h2>What Our Customers Say</h2>
                <div class="feedback-card">
                    <img src="assets/images/feedback1.png" alt="User Feedback">
                    <p>"Fantastic service! Booking flights has never been easier. Highly recommended!"</p>
                    <small>- John Doe</small>
                </div>
                <div class="feedback-card">
                    <img src="assets/images/feedback2.png" alt="User Feedback">
                    <p>"The customer support is excellent. They resolved my issue within minutes!"</p>
                    <small>- Sarah Johnson</small>
                </div>
                <div class="feedback-card">
                    <img src="assets/images/feedback3.png" alt="User Feedback">
                    <p>"Love the interface and the features. It made my trip planning so much better."</p>
                    <small>- Jane Smith</small>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-5">
	<em><h5 class="text-light text-center p-0 brand mt-2">
				<img src="assets/images/airtic.png" 
					height="40px" width="40px" alt="">				
			Online Flight Booking</h5></em>
	<div class="text-light text-center">Your journey is now just a click away!<br><br></div>
	
	
	</footer>	
   


</main>
<?php subview('footer.php'); ?> 

