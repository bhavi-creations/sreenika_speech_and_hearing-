<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sreenika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style1.css">

    <!-- 3 image slide links  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="./assets/img/new_2.png" type="image/x-icon">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<!-- Common Global Schema (e.g. Organization / WebSite) -->
    <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalClinic",
      "@id": "https://sreenikaspeechandhearingcenter.com/#medicalclinic",
      "name": "Sreenika Speech and Hearing Center",
      "url": "https://sreenikaspeechandhearingcenter.com/",
      "telephone": "+91-9392189262",
      "priceRange": "₹₹",
      "image": "https://sreenikaspeechandhearingcenter.com/wp-content/uploads/logo.png",
      "description": "Sreenika Speech and Hearing Center provides expert speech therapy, hearing assessment, hearing tests, digital hearing aids, and child development services in Hafeezpet, Hyderabad.",
      "medicalSpecialty": [
        "Audiology",
        "Speech Therapy"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Road No. 12, Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500049",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 17.4911988,
        "longitude": 78.353091
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "09:00",
          "closes": "21:00"
        }
      ],
      "areaServed": [
        "Hafeezpet",
        "Miyapur",
        "Kondapur",
        "Chandanagar",
        "Hyderabad"
      ],
      "hasMap": "https://maps.google.com/?q=17.4911988,78.353091"
    },
    {
      "@type": "Organization",
      "@id": "https://sreenikaspeechandhearingcenter.com/#organization",
      "name": "Sreenika Speech and Hearing Center",
      "url": "https://sreenikaspeechandhearingcenter.com/",
      "telephone": "+91-9392189262",
      "logo": "https://sreenikaspeechandhearingcenter.com/wp-content/uploads/logo.png"
    },
    {
      "@type": "WebSite",
      "@id": "https://sreenikaspeechandhearingcenter.com/#website",
      "url": "https://sreenikaspeechandhearingcenter.com/",
      "name": "Sreenika Speech and Hearing Center",
      "publisher": {
        "@id": "https://sreenikaspeechandhearingcenter.com/#organization"
      }
    }
  ]
}
    </script>

    <!-- Subpage Specific Schema (Dynamic) -->
    <?php if (isset($page_schema)): ?>
        <script type="application/ld+json">
            <?php echo json_encode($page_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
        </script>
    <?php endif; ?>






</head>

<body>

    <div class="d-none d-xl-block  index_first_navbar_wrapper  text-white py-2 border-bottom" style="background-color: #2c3e50;">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small">

                <div class="index_first_navbar_address d-flex align-items-center mb-2 mb-md-0">
                    <i class="bi bi-geo-alt-fill me-2 text-warning"></i>
                    <span class="index_first_navbar_text">Allwyn X Road, Indra Reddy Allwyn Colony, Hafeezpet, Hyderabad, Telangana 500049</span>
                </div>

                <div class="index_first_navbar_contact_info d-flex align-items-center">
                    <div class="index_first_navbar_phone me-4">
                        <i class="bi bi-telephone-fill me-2 text-warning"></i>
                        <a href="tel:+919876543210" class="text-white text-decoration-none">+91 93921 89262</a>
                    </div>

                    <div class="index_first_navbar_social_icons d-flex gap-3">

                        <!-- <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a> -->
                        <!-- <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/sreenikahearing" class="rjy-social-link" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/sreenikahearing" class="rjy-social-link" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><i class="fa-brands fa-instagram"></i></a> -->






                        <a href="https://www.facebook.com/sreenikaspeechhearingrehabilitationcenter/" class="rjy-social-link" target="_blank"><img src="./assets/img/facebook.png" alt=""></a>
                        <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><img src="./assets/img/instagram.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCnu0TOuz35XAg2cLUQ82vBA " class="rjy-social-link" target="_blank"><img src="./assets/img/youtube.png" alt=""></a>
                        <a href="https://x.com/sreenikahearing" class="rjy-social-link" target="_blank"><img src="./assets/img/twitter.png" alt=""></a>
                        <a href="https://whatsapp.com/channel/0029Va9UdOMATRSkZRJYGC3a" class="rjy-social-link" target="_blank"><img src="./assets/img/whats.png" alt=""></a>
                        <!-- <a href="https://www.instagram.com/sreenikashrcenter/" class="rjy-social-link" target="_blank"><img src="./assets/img/facebook.png" alt=""></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo_1.png" alt="Sreenika Logo" style="width: 230px; height: auto;">
                <!-- <img src="logo_1.png" alt="Sreenika Logo"> -->
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="service.php" id="serviceDrop" role="button"
                            data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item d-flex justify-content-between" href="service.php#audio_section">Audiology
                                    Services
                                    <!-- <span>&raquo;</span> -->
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="pure-tone-audiometry-treatment-in-hyderabad.php">Pure Tone Audiometry</a></li>
                                    <li><a class="dropdown-item" href="impedance-audiometry-treatment-in-hyderabad.php">Impedance Audiometry</a></li>
                                    <li><a class="dropdown-item" href="speech-audiometry-treatment-in-hyderabad.php">Speech Audiometry</a></li>
                                    <li><a class="dropdown-item" href="eustachian-tube-function-treatment-in-hyderabad.php">Eustachian Tube Function</a></li>
                                    <li><a class="dropdown-item" href="pediatric-hearing-screening-oae-treatment-in-hyderabad.php">Pediatric Hearing Screening OAE</a></li>
                                    <li><a class="dropdown-item" href="bera-test-treatment-in-hyderabad.php">BERA Test</a></li>
                                    <li><a class="dropdown-item" href="sisi-test-treatment-in-hyderabad.php">Sisi Test</a></li>
                                    <li><a class="dropdown-item" href="tone-decay-test-treatment-in-hyderabad.php">Tone Decay Test</a></li>
                                    <li><a class="dropdown-item" href="digital-hearing-aid-treatment-in-hyderabad.php">Digital Hearing Aid </a></li>
                                    <li><a class="dropdown-item" href="tinnitus-evaluation-treatment-in-hyderabad.php">Tinnitus Evaluation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item d-flex justify-content-between" href="service.php#speech_services">Child development services
                                    <!-- <span>&raquo;</span> -->
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="speech-assessment-treatment-in-hyderabad.php">Speech Assessment</a></li>
                                    <li><a class="dropdown-item" href="speech-therapy-treatment-in-hyderabad.php">Speech Therapy</a></li>
                                    <li><a class="dropdown-item" href="occupational-therapy-treatment-in-hyderabad.php">Occupational Therapy</a></li>
                                    <li><a class="dropdown-item" href="aba-therapy-treatment-in-hyderabad.php">ABA Therapy</a></li>
                                    <li><a class="dropdown-item" href="autism-adhd-therapy-treatment-in-hyderabad.php">Autism/ADHD</a></li>
                                    <li><a class="dropdown-item" href="auditory-verhal-therapy-treatment-in-hyderabad.php">Auditory Verhal Therapy</a></li>
                                    <li><a class="dropdown-item" href="articulation-therapy-treatment-in-hyderabad.php">Articulation Therapy</a></li>
                                    <li><a class="dropdown-item" href="stammering-stuttering-treatment-in-hyderabad.php">Stammering/Stuttering</a></li>
                                    <li><a class="dropdown-item" href="voice-therapy-treatment-in-hyderabad.php">Voice Therapy</a></li>
                                    <li><a class="dropdown-item" href="special-education-treatment-in-hyderabad.php">Special Education</a></li>
                                    <li><a class="dropdown-item" href="neuro-speech-disorders-treatment-in-hyderabad.php">Neuro-Speech Disorders</a></li>
                                    <li><a class="dropdown-item" href="learning-disability-treatment-in-hyderabad.php">Learning Disability</a></li>
                                    <li><a class="dropdown-item" href="group-therapy-treatment-in-hyderabad.php">Group Therapy</a></li>

                                </ul>
                            </li>



                            <li class="dropdown-submenu">
                                <a class="dropdown-item d-flex justify-content-between" href="service.php#hearing_service">Hearing Aids
                                    <!-- </a> <span>&raquo;</span></a> -->
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="behind-the-ear-treatment-in-hyderabad.php">Behind The Ear (BTE)</a></li>
                                        <li><a class="dropdown-item" href="receiver-in-canal-treatment-in-hyderabad.php">Receiver In Canal (RIC)</a></li>
                                        <li><a class="dropdown-item" href="completely-in-canal-treatment-in-hyderabad.php">Completely In Canal (CIC)</a></li>
                                        <li><a class="dropdown-item" href="in-the-canal-treatment-in-hyderabad.php">In-The-Canal (ITC) (Instant Fit)</a></li>
                                        <li><a class="dropdown-item" href="invisible_in-the-canal-treatment-in-hyderabad.php">Invisible-In-The-Canal (IIC)</a></li>
                                        <li><a class="dropdown-item" href="rechargeable-bte-treatment-in-hyderabad.php">Rechargeable BTE</a></li>
                                        <li><a class="dropdown-item" href="rechargeable-ric-treatment-in-hyderabad.php">Rechargeable RIC</a></li>
                                        <li><a class="dropdown-item" href="rechargeable-itc-treatment-in-hyderabad.php">Rechargeable ITC</a></li>
                                        <li><a class="dropdown-item" href="rechargeable-cic-treatment-in-hyderabad.php">Rechargeable CIC</a></li>
                                        <li><a class="dropdown-item" href="ear-moulds-ear-plugs-treatment-in-hyderabad.php">Ear Moulds/Ear Plugs</a></li>
                                        <li><a class="dropdown-item" href="hearing-aid-accesssories-treatment-in-hyderabad.php">Hearing Aid Accesssories</a></li>
                                        <li><a class="dropdown-item" href="hearing-aid-batteries-treatment-in-hyderabad.php">Hearing aid batteries</a></li>
                                        <li><a class="dropdown-item" href="hearing-aid-services-repair-treatment-in-hyderabad.php">Hearing aid services & repair</a></li>

                                    </ul>
                            </li>



                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="">Testimonials</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item "><a class="nav-link appointment_section" href="appointment.php">Appointment</a></li>




                    <li class="nav-item">
                        <a class="nav-link new_slider_section_call_btn" href="tel:+919392189262">
                            <i class="bi bi-telephone-fill"></i> <span>+91 9392189262</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
