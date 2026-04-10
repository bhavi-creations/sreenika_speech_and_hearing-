<!-- ==================== FOOTER SECTION ==================== -->
<footer class="rjy-footer-base">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Sreenika speech and hearing Center</h4>
                    <p class="rjy-footer-desc ">
                        <a class="navbar-brand" href="#">
                            <img src="./assets/img/logo_1.png" alt="Sreenika Logo " class="img-fluid" style="width:340px; height: auto;">
                            <!-- <img src="logo_1.png" alt="Sreenika Logo"> -->
                        </a>
                    </p>
                    <div class="rjy-social-cluster ">
                        <!-- <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/sreenikahearing" class="rjy-social-link" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-instagram"></i></a> -->

                        <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/" class="rjy-social-link" target="_blank"><img src="./assets/img/facebook.png" alt=""></a>
                        <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><img src="./assets/img/instagram.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCnu0TOuz35XAg2cLUQ82vBA " class="rjy-social-link" target="_blank"><img src="./assets/img/youtube.png" alt=""></a>
                        <a href="https://x.com/sreenikahearing" class="rjy-social-link" target="_blank"><img src="./assets/img/twitter.png" alt=""></a>
                        <a href="https://whatsapp.com/channel/0029Va9UdOMATRSkZRJYGC3a" class="rjy-social-link" target="_blank"><img src="./assets/img/whats.png" alt=""></a>
                        <!-- <a href="#" class="rjy-social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="rjy-social-link"><i class="bi bi-youtube"></i></a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Quick Links</h4>
                    <ul class="rjy-footer-links">
                        <li><a href="index.php"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="bi bi-chevron-right"></i> About Us</a></li>
                        <li><a href="service.php"><i class="bi bi-chevron-right"></i> Services</a></li>
                        <li><a href="blogs.php"><i class="bi bi-chevron-right"></i>Blogs </a></li>
                        <li><a href="gallery.php"><i class="bi bi-chevron-right"></i> Gallery</a></li>
                        <li><a href="contact.php"><i class="bi bi-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Our Service</h4>
                    <ul class="rjy-footer-links">
                        <li><a href="service.php#audio_section"><i class="bi bi-chevron-right"></i>Audiology Services</a></li>
                        <li><a href="service.php#speech_services"><i class="bi bi-chevron-right"></i> Speech Services</a></li>
                        <li><a href="service.php#hearing_service"><i class="bi bi-chevron-right"></i> Hearing Aids</a></li>
                        <!-- <li><a href="#"><i class="bi bi-chevron-right"></i> Steel Sheets</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Binding Wire</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Angles & Beams</a></li> -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Get in Touch</h4>
                    <p class="rjy-footer-desc">
                        F9R3+F6Q, Road No. 12, Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet, Hyderabad, Telangana 500049
                    </p>
                    <p class="rjy-footer-desc">
                        Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet, Hyderabad, Telangana 500049</p>
                    <div class="mb-3 d-flex ">
                        <!-- <i class="bi bi-telephone-fill"></i> -->
                        <div class="rjy-contact-data">

                            <h5>Phone Number</h5>
                            <p> +91 9392189262</p>
                        </div>
                    </div>
                    <div   href="mailto:infosreenika@gmail.com">
                       <p class="footer_mail" style="font-size: 18px; color: black;"> <i class="bi bi-envelope-fill"></i> &nbsp;   infosreenika@gmail.com</p>
                    </div>

                    <!-- <a href="mailto:infosreenika@gmail.com"
                        class="rjy-submit-btn"
                        style="padding: 12px 30px; display:inline-block; text-decoration:none;">
                        infosreenika@gmail.com
                    </a> -->
                </div>
            </div>
        </div>

        <div class="rjy-footer-bottom">
            <p class="rjy-copyright-text">
                &copy; 2026 <a href="#">Sreenika speech and hearing</a>. All Rights Reserved.

            </p>
        </div>
    </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- count script -->
<script>
    const counters = document.querySelectorAll('.stat-number');

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const speed = 200; // smaller = faster

        const updateCount = () => {
            const increment = target / speed;

            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>


<!-- whats app  -->
<a href="https://api.whatsapp.com/send?phone=917207109262" style="color: #fff;" class="whatsapp-link"
    target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>


<!-- call  icon  -->
<a href="tel:+917207109262" style="color: #fff;" class="call_link  "
    target="_blank">
    <img src="./assets/img/Call.png" alt="" style="width:50px;  height:50px;" ;>
</a>



<!-- social media icons   -->
<!-- <div class="social-icons text-center">
    <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/</a>" target="_blank">
        <img src="./assets/img/facebook.png" class="img-fluid" alt="" /></a>
    <a href="https://www.instagram.com/sreenikashrcenter/?igshid=YTQwZjQ0NmI0OA%3D%3D" target="_blank">
        <img src="./assets/img/instagram.png" class="img-fluid" alt="" /></a>
    <a
        href="https://www.youtube.com/channel/UCnu0TOuz35XAg2cLUQ82vBA " target="_blank">
        <img src="./assets/img/youtube.png" class="img-fluid" style="border-radius: 5px" alt="" /></a>
    <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGf2vQQmL7DggAAAZOb8_Ig1psDzUY6Ex_ftJ4pZkD1aIFj3kdOHryXuY7GfodYvgBWmiQoF_cxvqXTNeJnp2AWonOU5Y8S1tESajEAnjGx-IOYl90YsDASyxljsxPa-fknkKM=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fsreenika-speech-and-hearing-rehabilitation-center-b44525297%3Futm_source%3Dshare%26utm_campaign%3Dshare_via%26utm_content%3Dprofile%26utm_medium%3Dandroid_app " target="_blank">
        <img src="./assets/img/linkedin.png" class="img-fluid" alt="" /></a>
</div> -->

<!-- 3 image slide script -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        grabCursor: true,

        speed: 600, // 👈 movement speed (ms) – 300 fast, 600 smooth

        autoplay: {
            delay: 2000, // next slide start delay
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });
</script>




<!-- image slider  -->
<script>
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    let index = 0;

    function getVisibleSlides() {
        if (window.innerWidth < 576) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }

    function autoSlide() {
        let visible = getVisibleSlides();
        index++;

        if (index > slides.length - visible) {
            index = 0;
        }

        track.style.transform = `translateX(-${index * (100 / visible)}%)`;
    }

    setInterval(autoSlide, 2500);

    // Reset position on resize
    window.addEventListener('resize', () => {
        index = 0;
        track.style.transform = `translateX(0%)`;
    });
</script>

</body>

</html>