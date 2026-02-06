<?php include 'header.php'; ?>



<main id="main">

    <section id="contact" class="contact-section">
        <h1 class="d-flex justify-content-center">Contact us</h1>
        <div class="container">
            <div class="row mt-5">

                <!-- LEFT INFO -->
                <div class="col-lg-6 mb-4 d-flex align-content-center">
                    <div class="row ">

                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>
                                    F9R3+F6Q, Road No. 12, Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet, Hyderabad, Telangana 500049
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>sreenikaspeechand@gmail.com</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+91 93921 89262</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="col-lg-6">
                    <form action="contactform.php" method="POST" class="contact-form">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="contactname" class="form-control"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="email" name="contactemail" class="form-control"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="text" name="contactsubject" class="form-control"
                                    placeholder="Subject">
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="text" name="contactnumber" class="form-control"
                                    placeholder="Phone Number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="contactmessage" rows="6"
                                class="form-control" placeholder="Your Message" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn-send">Send Message</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>


    <section>
        <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.34189962935!2d78.35051807468527!3d17.491185099807645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93c3f864fd0b%3A0x60790d001e8035dc!2sSreenika%20Speech%20%26%20Hearing%20Child%20Development%20Center!5e0!3m2!1sen!2sin!4v1770346577424!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>




</main>


<?php include('./footer.php'); ?>


<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>