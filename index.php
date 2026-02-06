<?php include 'header.php'; ?>
<!-- <div class="container mt-5 text-center text-white">
        <h1 style="color: var(--sreenika-accent);">Sreenika Speech & Hearing</h1>
        <p>Experience the new animated mobile menu. Resize your browser to test!</p>
    </div> -->

<!-- slider  -->
<div id="sreenikaSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner shadow-lg slider-container">

        <div class="carousel-item active" data-bs-interval="3000">
            <div class="img-wrapper">
                <img src="./assets/img/01.jpg" class="slider-img img-fluid" alt="Speech Therapy">
            </div>
            <!-- <div class="carousel-caption">
                    <h2 class="fw-bold">Speech Therapy</h2>
                    <p>Expert care for your child.</p>
                </div> -->
        </div>

        <div class="carousel-item" data-bs-interval="3000">
            <div class="img-wrapper">
                <img src="./assets/img/02.jpg" class="slider-img img-fluid" alt="Hearing Assessment">
            </div>
            <!-- <div class="carousel-caption">
                    <h2 class="fw-bold">Hearing Solutions</h2>
                    <p>Advanced diagnostic tests.</p>
                </div> -->
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#sreenikaSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sreenikaSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>





<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Column - Stats -->
            <div class="col-lg-2 col-md-12 order-lg-1 order-2">
                <div class="stats-column">
                    <div class="stat-item fade-in-up">
                        <div class="stat-number" data-target="10000">0+</div>
                        <div class="stat-label">Happy Patients</div>
                    </div>

                    <div class="stat-item fade-in-up">
                        <div class="stat-number" data-target="4">0+</div>
                        <div class="stat-label">Experts Doctors</div>
                    </div>

                    <div class="stat-item fade-in-up">
                        <div class="stat-number" data-target="13">0</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>

            </div>

            <!-- Middle Column - Image -->
            <div class="col-lg-5 col-md-12 order-lg-2 order-1">
                <div class="image-column">
                    <div class="image-wrapper">
                        <!-- Circular Badge -->
                        <div class="circular-badge">
                            <svg class="circular-text" viewBox="0 0 120 120">
                                <path id="circlePath" d="M 60, 60 m -50, 0 a 50,50 0 1,1 100,0 a 50,50 0 1,1 -100,0"
                                    fill="none" />
                                <text>
                                    <textPath href="#circlePath" startOffset="0%">
                                        <!-- ABOUT US • ABOUT US • ABOUT US • -->
                                        Sreenika speech and hearing
                                    </textPath>
                                </text>
                            </svg>
                        </div>

                        <!-- Main Image -->
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=1000&fit=crop"
                            alt="Professional Woman Working" class="main-image">
                    </div>
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="col-lg-5 col-md-12 order-lg-3 order-3">
                <div class="content-column">
                    <div class="section-tag">ABOUT US</div>
                    <!-- <span class="section-label fade-in-up delay-2">About Us</span> -->

                    <h2 class="section-title">
                        Advanced solutions for hearing restoration.
                    </h2>

                    <p class="section-description">
                        At Sreenika, our mission is to empower individuals through the gift of voice and hearing. We
                        provide a comprehensive therapeutic ecosystem tailored for all age groups, with a
                        specialized focus on pediatric developmental support. Our expertise spans across managing
                        speech delays, attention deficits, and behavioral challenges through scientifically-backed
                        intervention and personalized rehabilitation.
                    </p>

                    <a href="about.php" class="read-more-btn">
                        Read More
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- service section  -->







<section id="services" class="py-5 bg-white overflow-hidden">
    <div class="container py-lg-5 text-center">

        <div class="mb-5 reveal">
            <div class="section-tag">Our Services</div>
            <!-- <h6 class="text-uppercase fw-bold" style="color: #00d9ff; letter-spacing: 2px;">Our Services</h6> -->
            <h2 class="display-5 fw-bold" style="color: #002244;">Specialized Care Solutions</h2>
            <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
            </div>
        </div>

        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner p-4">

                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4 reveal fade-bottom">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/pure_tone_2.png"
                                    alt="Speech Therapy">
                                <div class="p-4">
                                    <h4 class="fw-bold">Pure Tone Audiometry</h4>
                                    <p class="text-muted">Pure Tone Audiometry (PTA) is a hearing test used to measure hearing levels and identify hearing loss.
                                    </p>
                                    <a href="service.php#audio_section" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 reveal fade-bottom">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/eustachian_tube_2.png"
                                    alt="Hearing Test">
                                <div class="p-4">
                                    <h4 class="fw-bold">Eustachian Tube Function</h4>
                                    <p class="text-muted">Eustachian Tube Function is a test used to evaluate middle ear pressure regulation and assess Eustachian tube performance.</p>
                                    <a href="service.php#audio_section" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 reveal fade-bottom">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/tone_decay_test.png"
                                    alt="Autism Support">
                                <div class="p-4">
                                    <h4 class="fw-bold">Tone Decay Test</h4>
                                    <p class="text-muted">Tone Decay Test is a hearing test used to assess auditory nerve function by measuring the ability to sustain hearing a continuous sound.</p>
                                    <a href="service.php#audio_section" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/speech_therapy_2.png"
                                    alt="Cochlear Implant">
                                <div class="p-4">
                                    <h4 class="fw-bold">Speech Therapy</h4>
                                    <p class="text-muted">Speech Therapy is a therapeutic service that helps improve speech, language, communication, and swallowing abilities.
                                    </p>
                                    <a href="service.php#speech_services" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/articulation_therapy_1.png"
                                    alt="Behavioral Therapy">
                                <div class="p-4">
                                    <h4 class="fw-bold">Articulation Therapy</h4>
                                    <p class="text-muted">Articulation Therapy is a specialized speech therapy that focuses on improving the clarity and correct pronunciation of speech sounds.
                                    </p>
                                    <a href="service.php#speech_services" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/auditory_verhal_therapy_2.png"
                                    alt="Voice Disorders">
                                <div class="p-4">
                                    <h4 class="fw-bold">Group Therapy</h4>
                                    <p class="text-muted">Group Therapy is a therapeutic approach where individuals receive treatment together to improve communication, social, and behavioral skills through guided interaction.</p>
                                    <a href="service.php#speech_services" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/behind_the_ear_2.png"
                                    alt="Cochlear Implant">
                                <div class="p-4">
                                    <h4 class="fw-bold">Behind The Ear (BTE)</h4>
                                    <p class="text-muted">Behind The Ear (BTE) is a type of hearing aid worn behind the ear that provides powerful amplification for various levels of hearing loss.
                                    </p>
                                    <a href="service.php#hearing_service" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/rechargeable-bte-2.png"
                                    alt="Behavioral Therapy">
                                <div class="p-4">
                                    <h4 class="fw-bold">Rechargeable BTE</h4>
                                    <p class="text-muted">Rechargeable BTE is a behind-the-ear hearing aid with a built-in rechargeable battery, offering convenience and reliable all-day hearing support.
                                    </p>
                                    <a href="service.php#hearing_service" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-card shadow-sm">
                                <img src="./assets/img/service/Hearing aid batteries.png"
                                    alt="Voice Disorders">
                                <div class="p-4">
                                    <h4 class="fw-bold">Hearing aid batteries</h4>
                                    <p class="text-muted">Hearing aid batteries are specialized power cells designed to provide reliable and long-lasting energy for hearing aids.</p>
                                    <a href="service.php#hearing_service" class="btn-link">Read More &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev custom-ctrl" type="button" data-bs-target="#serviceCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
            </button>
            <button class="carousel-control-next custom-ctrl" type="button" data-bs-target="#serviceCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
            </button>
        </div>
    </div>
</section>


<!-- portfolio -->
<section class="rjy-gallery-zone" id="gallery">
    <div class="container">

        <div class="mb-5 reveal text-center">
            <div class="section-tag">Gallery</div>

            <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

            <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
        </div>




        <!-- <div class="section-tag d-flex justify-content-between">Gallery</div> -->
        <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Portfolio</span>
                <h2 class="rjy-slider-title">Our Steel Works Gallery</h2>
                <p class="rjy-slider-desc">Explore our diverse range of completed projects</p>
            </div> -->

        <div class="rjy-gallery-grid">
            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 1" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-building rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">High-Rise Buildings</span> -->
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/sqare2.jpg"
                    alt="Gallery 2" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-hammer rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Industrial Works</span> -->
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 3" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-tools rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Fabrication</span> -->
                </div>
            </div>



            <div class="rjy-gallery-card">
                <img src="./assets/img/service/gallery_bottom.png"
                    alt="Gallery 4" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-house-fill rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Residential Projects</span> -->
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"

                    alt="Gallery 5" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-briefcase-fill rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Corporate Buildings</span> -->
                </div>
            </div>
            <div class="rjy-gallery-card">
                <img src="./assets/img/service/sqare2.jpg"
                    alt="Gallery 5" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-briefcase-fill rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Corporate Buildings</span> -->
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/gallery_bottom.png"
                    alt="Gallery 4" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-house-fill rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Residential Projects</span> -->
                </div>
            </div>


            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 6" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-shop rjy-gallery-icon"></i>
                    <!-- <span class="rjy-gallery-label">Commercial Spaces</span> -->
                </div>
            </div>
        </div>
    </div>
</section>






<!-- ==================== TESTIMONIALS SECTION ==================== -->
<section class="rjy-testimonial-arena" id="testimonials">
    <div class="container">


        <div class="mb-5 reveal text-center">
            <div class="section-tag">Testimonials</div>
            <h2 class="display-5 fw-bold" style="color: #002244;">What Our Clients Say</h2>

            <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

            <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
        </div>



        <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Testimonials</span>
                <h2 class="rjy-slider-title">What Our Clients Say</h2>
                <p class="rjy-slider-desc"></p>
            </div> -->

        <div class="rjy-testimonial-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rjy-testimonial-box">
                        <div class="rjy-testimonial-quote">"</div>
                        <div class="rjy-testimonial-content">
                            <div class="rjy-testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="rjy-testimonial-text">
                                With years of dedicated experience, Sreenika Speech and Hearing is a trusted center,
                                offering comprehensive speech, hearing, and language therapy services for children
                                and adults.
                            </p>
                            <div class="rjy-testimonial-author">
                                <img src="https://i.pravatar.cc/150?img=33" alt="Client 1"
                                    class="rjy-testimonial-avatar">
                                <div class="rjy-testimonial-info">
                                    <h5>Rajesh Kumar</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rjy-testimonial-box">
                        <div class="rjy-testimonial-quote">"</div>
                        <div class="rjy-testimonial-content">
                            <div class="rjy-testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="rjy-testimonial-text">
                                Sreenika Speech and Hearing provides excellent care with a very professional and
                                friendly approach. The therapists are patient, knowledgeable, and truly dedicated to
                                improving communication skills in children and adults.
                            </p>
                            <div class="rjy-testimonial-author">
                                <img src="https://i.pravatar.cc/150?img=47" alt="Client 2"
                                    class="rjy-testimonial-avatar">
                                <div class="rjy-testimonial-info">
                                    <h5>Priya Sharma</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rjy-testimonial-box">
                        <div class="rjy-testimonial-quote">"</div>
                        <div class="rjy-testimonial-content">
                            <div class="rjy-testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="rjy-testimonial-text">
                                We had a very positive experience at Sreenika Speech and Hearing. The therapy
                                sessions are well-planned, supportive, and effective. Highly recommended for anyone
                                looking for quality speech and hearing services.
                            </p>
                            <div class="rjy-testimonial-author">
                                <img src="https://i.pravatar.cc/150?img=12" alt="Client 3"
                                    class="rjy-testimonial-avatar">
                                <div class="rjy-testimonial-info">
                                    <h5>Anil Reddy</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CONTACT SECTION ==================== -->
<section class="rjy-contact-realm" id="contact">
    <div class="container">


        <div class="mb-5 reveal text-center">
            <div class="section-tag">Get in Touch</div>
            <h2 class="display-5 fw-bold" style="color: #002244;">Contact Us Today</h2>
            <p class="rjy-slider-desc">Let's discuss your steel requirements</p>

            <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

            <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
        </div>

        <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Get in Touch</span>
                <h2 class="rjy-slider-title">Contact Us Today</h2>
                <p class="rjy-slider-desc">Let's discuss your steel requirements</p>
            </div> -->

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="rjy-contact-panel">
                    <h3
                        style="color: var(--steel-primary); margin-bottom: 30px; font-size: 1.8rem; font-weight: 700;">
                        Contact Information
                    </h3>

                    <div class="rjy-contact-info-block">
                        <div class="rjy-contact-icon-circle">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="rjy-contact-data">
                            <h5>Our Location</h5>
                            <p> F9R3+F6Q, Road No. 12, Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet, Hyderabad, Telangana 500049
                            </p>
                        </div>
                    </div>

                    <div class="rjy-contact-info-block">
                        <div class="rjy-contact-icon-circle">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="rjy-contact-data">
                            <h5>Phone Number</h5>
                            <p>+91 93921 89262</p>
                        </div>
                    </div>

                    <div class="rjy-contact-info-block">
                        <div class="rjy-contact-icon-circle">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="rjy-contact-data">
                            <h5>Email Address</h5>
                            <p>sreenikaspeechand@gmail.com</p>
                        </div>
                    </div>

                    <div class="rjy-contact-info-block">
                        <div class="rjy-contact-icon-circle">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="rjy-contact-data">
                            <h5>Business Hours</h5>
                            <p>Mon - sun: 9:00 AM - 9:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="rjy-contact-panel">
                    <h3
                        style="color: var(--steel-primary); margin-bottom: 30px; font-size: 1.8rem; font-weight: 700;">
                        Send Us a Message
                    </h3>

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
    </div>
</section>
<?php include 'footer.php'; ?>