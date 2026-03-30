<?php include 'header.php'; ?>
<!-- <div class="container mt-5 text-center text-white">
        <h1 style="color: var(--sreenika-accent);">Sreenika Speech & Hearing</h1>
        <p>Experience the new animated mobile menu. Resize your browser to test!</p>
    </div> -->

<!-- slider  -->
<div id="sreenikaSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="2"></button>
    </div> -->

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


            <!-- <div class="col-lg-2 col-md-12 order-lg-1 order-2">
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

            </div> -->

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
            <div class="col-lg-7 col-md-12 order-lg-3 order-3">
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

                    <a href="about.php" class=" new_slider_section_card new_slider_section_active_tab" style="padding:10px">
                        Read More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- service section  -->







<!-- <section id="services" class="py-5  overflow-hidden" style="background:rgba(148, 190, 203, 0.3);">
    <div class="container py-lg-5 text-center">

        <div class="mb-5 reveal">
            <div class="section-tag">Our Services</div>
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
</section> -->





<!-- Hearing slider section   -->
<div class="container my-5">

    <<div class="text-center">
        <!-- <div class="index_service_speech"></div> -->
        <div class="section-tag">Hearing Services</div>
</div>

<div class="swiper mySwiper">





    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="behind_the_ear_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/behind_the_ear_1.png"
                            alt="Speech Therapy" class="img-fluid">
                        <div class="p-4">
                            <h4 class="fw-bold">Behind The Ear (BTE)</h4>
                            <p class="text-muted">A discreet hearing aid worn behind the ear that amplifies sound to improve hearing and communication in daily life. </p>
                            <a href="behind_the_ear_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="receiver_in_canal_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/receiver_in_canal_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Receiver In Canal (RIC)</h4>
                            <p class="text-muted">A lightweight hearing aid with the receiver placed in the ear canal, delivering clear sound and comfortable, natural hearing.
                            </p>
                            <a href="receiver_in_canal_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="Completely_in_canal_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/completely_in_canal_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Completely In Canal (CIC)</h4>
                            <p class="text-muted">A discreet hearing aid placed entirely inside the ear canal, providing natural sound and improved hearing with minimal visibility. </p>
                            <a href="Completely_in_canal_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="in_the_canal_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/behind_the_ear_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">In-The-Canal (ITC) (Instant Fit)</h4>
                            <p class="text-muted">A custom-fit hearing aid that sits partly in the ear canal, offering clear sound, comfort, and quick, easy fitting.
                            </p>
                            <a href="in_the_canal_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="invisible_in_the_canal_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Invisible-In-The-Canal-1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Invisible-In-The-Canal (IIC)</h4>
                            <p class="text-muted">A nearly invisible hearing aid placed deep in the ear canal, delivering natural sound discreetly for improved hearing.
                            </p>
                            <a href="invisible_in_the_canal_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="rechargeable_bte_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/rechargeable-bte-1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Rechargeable BTE</h4>
                            <p class="text-muted">A behind-the-ear hearing aid with built-in rechargeable battery, providing powerful sound and convenient all-day use.
                            </p>
                            <a href="rechargeable_bte_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="rechargeable_ric_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/rechargeable_ric-1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Rechargeable RIC</h4>
                            <p class="text-muted">A receiver-in-canal hearing aid with a rechargeable battery, offering clear sound and hassle-free all-day hearing.
                            </p>
                            <a href="rechargeable_ric_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="rechargeable_itc_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Rechargeable-itc-1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Rechargeable ITC</h4>
                            <p class="text-muted">An in-the-canal hearing aid with a rechargeable battery, providing comfortable fit and reliable all-day hearing.
                            </p>
                            <a href="rechargeable_itc_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="rechargeable_cic_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/rechargeable_cic_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Rechargeable CIC</h4>
                            <p class="text-muted">A completely-in-canal hearing aid with a rechargeable battery, offering discreet, comfortable, and all-day reliable hearing.
                            </p>
                            <a href="rechargeable_cic_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="ear_moulds_ear_plugs_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/ear_molds.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Ear Moulds/Ear Plugs</h4>
                            <p class="text-muted">Custom-made ear moulds and ear plugs that provide comfortable fit, protect hearing, and enhance sound quality.
                            </p>
                            <a href="ear_moulds_ear_plugs_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="hearing_aid_accesssories_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/hearing_aid_accesssories.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Hearing Aid Accesssories</h4>
                            <p class="text-muted">A range of accessories designed to enhance hearing aid performance, comfort, and convenience for everyday use.
                            </p>
                            <a href="hearing_aid_accesssories_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="hearing_aid_batteries_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Hearing aid batteries.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Hearing aid batteries</h4>
                            <p class="text-muted">Reliable batteries that power hearing aids for consistent, long-lasting performance and uninterrupted hearing.
                            </p>
                            <a href="hearing_aid_batteries_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>

        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="hearing_aid_services_repair_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Hearing aid services & repair.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Hearing aid services & repair</h4>
                            <p class="text-muted">Professional services to maintain, repair, and optimize hearing aids for reliable performance and clear hearing.
                            </p>
                            <a href="hearing_aid_services_repair_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>

    <!-- <div class="swiper-pagination mt-4"></div> -->

</div>

</div>


<!-- Audiology slider section   -->
<div class="container">
    <!-- <div class="col-lg-4 col-md-6">
        <div class="card p-3  ">
            <h5 class="m-0">Speech Services</h5>
        </div>
    </div> -->

    <<div class="text-center">
        <!-- <div class="index_service_speech"></div> -->
        <div class="section-tag">Speech Services</div>
</div>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="speech_assessment_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Speech assesment.png" alt="Speech Therapy"
                            class="img-fluid">
                        <div class="p-4">
                            <h4 class="fw-bold">Speech Assessment</h4>
                            <p class="text-muted">A comprehensive evaluation that examines speech, language,
                                and communication skills to identify difficulties and plan appropriate
                                therapy.
                            </p>
                            <a href="speech_assessment_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="speech_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/speech_therapy_2.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Speech Therapy</h4>
                            <p class="text-muted">A therapeutic intervention that improves speech clarity,
                                language skills, and effective communication across all age groups.
                            </p>
                            <a href="speech_therapy_treatment_in_hyderabad.php" class="btn-link">Read More
                                &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a
                    href="occupational_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/ocuupational.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Occupational Therapy</h4>
                            <p class="text-muted">A therapeutic service that helps individuals develop,
                                improve, and maintain skills needed for daily activities and independent
                                living.
                            </p>
                            <a href="occupational_therapy_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="aba_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/aba_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">ABA Therapy (Applied Behavior Analysis)</h4>
                            <p class="text-muted">A structured therapy that uses behavior-based techniques
                                to improve communication, learning, and positive behaviors in individuals.
                            </p>
                            <a href="aba_therapy_treatment_in_hyderabad.php" class="btn-link">Read More
                                &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>

        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a
                    href="autism_adhd_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/autism.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Autism / ADHD Therapy</h4>
                            <p class="text-muted">A specialized intervention that supports attention,
                                behavior, communication, and social skills in individuals with Autism and
                                ADHD.
                            </p>
                            <a href="autism_adhd_therapy_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>


        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a
                    href="auditory_verhal_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/auditory_verhal_therapy_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Auditory Verhal Therapy (AVT)</h4>
                            <p class="text-muted">A listening-focused therapy that helps children with
                                hearing loss develop spoken language using hearing aids or cochlear
                                implants.
                            </p>
                            <a href="auditory_verhal_therapy_treatment_in_hyderabad.php"
                                class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>

        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a
                    href="articulation_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/articulation_therapy_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Articulation Therapy</h4>
                            <p class="text-muted">A focused therapy that helps individuals correct speech
                                sound errors, enhancing clarity, pronunciation, and effective communication.
                            </p>
                            <a href="articulation_therapy_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a
                    href="stammering_stuttering_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Sturring theraphy.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Stammering / Stuttering Therapy</h4>
                            <p class="text-muted">A specialized therapy that helps individuals manage
                                stammering, improve fluency, and communicate confidently in daily life.
                            </p>
                            <a href="stammering_stuttering_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="voice_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/voice_therapy_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Voice Therapy</h4>
                            <p class="text-muted">A non-invasive therapy that improves voice quality, pitch,
                                and clarity to help individuals speak comfortably and confidently.
                            </p>
                            <a href="voice_therapy_treatment_in_hyderabad.php" class="btn-link">Read More
                                &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="special_education_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/special educations.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Special Education</h4>
                            <p class="text-muted">A tailored educational approach that supports children
                                with learning differences to develop skills, confidence, and academic
                                success.
                            </p>
                            <a href="special_education_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a
                    href="neuro_speech_disorders_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/articulation_therapy_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Neuro-Speech Disorders</h4>
                            <p class="text-muted">A specialized therapy that helps individuals with
                                neurological speech impairments regain clarity, fluency, and effective
                                communication.
                            </p>
                            <a href="neuro_speech_disorders_treatment_in_hyderabad.php"
                                class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a
                    href="learning_disability_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/learning_disability_1.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Learning Disability</h4>
                            <p class="text-muted">A focused educational and therapeutic approach that helps
                                children overcome learning challenges and achieve academic and personal
                                growth.
                            </p>
                            <a href="learning_disability_treatment_in_hyderabad.php" class="btn-link">Read
                                More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="group_therapy_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/group therapy.png" alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Group Therapy</h4>
                            <p class="text-muted">A structured therapy session where individuals practice
                                communication and social skills in a supportive group setting to build
                                confidence and interaction.
                            </p>
                            <a href="group_therapy_treatment_in_hyderabad.php" class="btn-link">Read More
                                &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>


    </div>
    <div class="swiper-pagination mt-4"></div>
</div>

</div>


<!-- Speech  slider section   -->
<div class="container">


    <<div class="text-center">
        <!-- <div class="index_service_speech"></div> -->
        <div class="section-tag">Audio Services</div>
</div>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="pure_tone_audiometry_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/pure_tone_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Pure Tone Audiometry</h4>
                            <p class="text-muted">A hearing assessment test that evaluates how well a person can hear different sound frequencies to determine the exact type and level of hearing loss.
                            </p>
                            <a href="pure_tone_audiometry_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="impedance_audiometry_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/Impedance_Audiometry _1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Impedance Audiometry</h4>
                            <p class="text-muted">A diagnostic hearing test that checks middle ear function by measuring eardrum movement and pressure changes to identify ear-related problems.
                            </p>
                            <a href="impedance_audiometry_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="speech_Audiometry_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/speech_audio_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Speech Audiometry</h4>
                            <p class="text-muted">A hearing test that evaluates a person’s ability to detect and understand speech sounds, helping assess speech clarity and hearing performance.
                            </p>
                            <a href="speech_Audiometry_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="eustachian_tube_function_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/eustachian_tube_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Eustachian Tube Function</h4>
                            <p class="text-muted">A diagnostic test used to assess how well the eustachian tube equalizes ear pressure and maintains healthy middle ear function.
                            </p>
                            <a href="eustachian_tube_function_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="pediatric_hearing_screening_oae_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/pediatric_hearing_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Pediatric Hearing Screening OAE</h4>
                            <p class="text-muted">A quick, non-invasive test that checks inner ear function in infants and children to identify hearing issues at an early stage.
                            </p>
                            <a href="pediatric_hearing_screening_oae_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="bera_test_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/bera_test_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">BERA Test</h4>
                            <p class="text-muted">A hearing test that measures brain responses to sound to assess hearing ability and nerve pathway function, especially in infants and unresponsive patients.
                            </p>
                            <a href="bera_test_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="sisi_test_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/sisi_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Sisi Test</h4>
                            <p class="text-muted">A specialized hearing test used to evaluate inner ear function by measuring the ability to detect small changes in sound intensity.
                            </p>
                            <a href="sisi_test_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"><a href="tone_decay_test_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/tone_decay_test.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Tone Decay Test</h4>
                            <p class="text-muted">A diagnostic hearing test that assesses auditory nerve function by measuring how long a sound can be heard at a constant intensity.
                            </p>
                            <a href="tone_decay_test_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="digital_hearing_aid_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/digital_hearing_aid_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Digital Hearing Aid</h4>
                            <p class="text-muted">An advanced hearing device that processes and amplifies sound digitally to provide clearer speech and improved listening comfort.
                            </p>
                            <a href="digital_hearing_aid_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>
        <div class="swiper-slide">
            <div class="new_slider_section_sub_card"> <a href="tinnitus_evaluation_treatment_in_hyderabad.php">
                    <div class="service-card shadow-sm">
                        <img src="./assets/img/service/tinnitus_evaluation_1.png"
                            alt="Speech Therapy">
                        <div class="p-4">
                            <h4 class="fw-bold">Tinnitus Evaluation</h4>
                            <p class="text-muted">A detailed assessment used to identify the cause and characteristics of ringing or buzzing sounds in the ears for proper management.
                            </p>
                            <a href="tinnitus_evaluation_treatment_in_hyderabad.php" class="btn-link">Read More &raquo;</a>
                        </div>
                    </div>
                </a></div>
        </div>


    </div>
    <div class="swiper-pagination mt-4"></div>
</div>

</div>

<!-- portfolio -->
<!-- <section class="rjy-gallery-zone" id="gallery">
    <div class="container">

        <div class="mb-5 reveal text-center">
            <div class="section-tag">Gallery</div>

          
        </div>




     

        <div class="rjy-gallery-grid">
            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 1" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-building rjy-gallery-icon"></i>
                   
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/sqare2.jpg"
                    alt="Gallery 2" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-hammer rjy-gallery-icon"></i>
              
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 3" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-tools rjy-gallery-icon"></i>
                   
                </div>
            </div>



            <div class="rjy-gallery-card">
                <img src="./assets/img/service/gallery_bottom.png"
                    alt="Gallery 4" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-house-fill rjy-gallery-icon"></i>
                  
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"

                    alt="Gallery 5" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-briefcase-fill rjy-gallery-icon"></i>
                   
                </div>
            </div>
            <div class="rjy-gallery-card">
                <img src="./assets/img/service/sqare2.jpg"
                    alt="Gallery 5" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-briefcase-fill rjy-gallery-icon"></i>
                   
                </div>
            </div>

            <div class="rjy-gallery-card">
                <img src="./assets/img/service/gallery_bottom.png"
                    alt="Gallery 4" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-house-fill rjy-gallery-icon"></i>
                    
                </div>
            </div>


            <div class="rjy-gallery-card">
                <img src="./assets/img/service/square_1.jpg"
                    alt="Gallery 6" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="bi bi-shop rjy-gallery-icon"></i>
                    
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- count  -->
<!-- <section class="sreenika_count_section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <h2 class="sreenika_count_main_title">our achievements</h2>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="row text-center">
                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number">10000</h3>
                            <p class="sreenika_count_text">Happy Patients</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number">4+</h3>
                            <p class="sreenika_count_text">Experts Doctors</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number">14+</h3>
                            <p class="sreenika_count_text">Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number">100%</h3>
                            <p class="sreenika_count_text">Quality Treatment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="sreenika_count_section py-5">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <h2 class="sreenika_count_main_title">Our achievements</h2>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="row text-center">

                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number" data-count="10000" data-symbol="+">0</h3>
                            <p class="sreenika_count_text">Happy Patients</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number" data-count="4" data-symbol="+">0</h3>
                            <p class="sreenika_count_text">Experts Doctors</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number" data-count="14" data-symbol="+">0</h3>
                            <p class="sreenika_count_text">Years of Experience</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="sreenika_count_item">
                            <h3 class="sreenika_count_number" data-count="100" data-symbol="%">0</h3>
                            <p class="sreenika_count_text">Quality Treatment</p>
                        </div>
                    </div>

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
            <!-- <p class="rjy-slider-desc">Let's discuss your steel requirements</p> -->

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
                            <p>+91 72071 09262</p>
                        </div>
                    </div>

                    <div class="rjy-contact-info-block">
                        <div class="rjy-contact-icon-circle">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="rjy-contact-data">
                            <h5>Email Address</h5>
                            <p>infosreenika@gmail.com</p>
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




<script>
    let swiperInstances = [];

    function initSliders() {
        // Destroy existing instances to prevent memory leaks
        swiperInstances.forEach(s => s.destroy());
        swiperInstances = [];

        const swipers = document.querySelectorAll('.mySwiper');
        swipers.forEach(el => {
            const newSwiper = new Swiper(el, {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });
            swiperInstances.push(newSwiper);
        });
    }

    function showSubServices(serviceId) {
        // Hide all sub-sections
        document.querySelectorAll('.new_slider_section_sub_wrapper').forEach(section => {
            section.style.display = 'none';
        });

        // Remove active class from tabs
        document.querySelectorAll('.new_slider_section_card').forEach(card => {
            card.classList.remove('new_slider_section_active_tab');
        });

        // Show active slider
        const activeSection = document.getElementById(serviceId);
        if (activeSection) {
            activeSection.style.display = 'block';
            document.getElementById('tab-' + serviceId).classList.add('new_slider_section_active_tab');
            initSliders(); // Re-init to start autoplay
        }
    }

    window.onload = () => {
        showSubServices('hearing');
    };
</script>




<script>
    const counters = document.querySelectorAll('.sreenika_count_number');

    let counted = false;

    function startCounting() {
        const duration = 2000; // total animation time (2 sec)
        const startTime = performance.now();

        counters.forEach(counter => {
            counter.start = 0;
        });

        function animate(time) {
            const progress = Math.min((time - startTime) / duration, 1);

            counters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const symbol = counter.getAttribute('data-symbol') || "";

                const value = Math.floor(progress * target);

                counter.innerText = value + symbol;
            });

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                // Final exact values
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-count');
                    const symbol = counter.getAttribute('data-symbol') || "";
                    counter.innerText = target + symbol;
                });
            }
        }

        requestAnimationFrame(animate);
    }

    // Scroll trigger
    window.addEventListener('scroll', () => {
        const section = document.querySelector('.sreenika_count_section');
        const sectionTop = section.offsetTop - window.innerHeight + 100;

        if (!counted && window.scrollY > sectionTop) {
            startCounting();
            counted = true;
        }
    });
</script>



<?php include 'footer.php'; ?>