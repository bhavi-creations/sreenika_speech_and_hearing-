<?php include 'header.php'; ?>
<style>
    .img-container {
        overflow: hidden;
        /* keeps zoomed image inside container */
        display: inline-block;
        position: relative;
    }

    .img-container img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .img-container img:hover {
        transform: scale(1.1);
        /* zoom-in effect */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        /* subtle popup shadow */
        z-index: 10;
    }
</style>
<section id="gallery" class="rjy-gallery-zone">
    <div class="container">



        <div class="section-header fade-in-up ">
            <span class="section-label">Our Gallery</span>
            <h2 class="section-title">Hearing Solutions & Anatomy</h2>
            <!-- <p class="section-description">Understand the complexity of human hearing and the advanced technology we use to restore it.</p> -->
        </div>

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

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="img-container">
                    <img src="./assets/img/gallery/gallery._7.jpg" alt="" class="img-fluid" style="border-radius: 10px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                    <img src="./assets/img/gallery/gallery_1.jpg" alt="" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="img-container mt-3">
                    <img src="./assets/img/gallery/gallery_2.jpg" alt="" class="img-fluid" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>

</section>


<?php include 'footer.php'; ?>

<style>
    /* Gallery Section Styles */

    /* Section Header Centering */
    .section-header {
        max-width: 850px;
        margin: 0 auto 50px auto;
        /* Centers the header block */
        text-align: center;
        /* Centers text inside */
    }
</style>