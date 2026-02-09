<style>
    /* Sidebar Card Padding */
    .srinika-sidebar-card {
        background: #ffffff;
        padding: 30px !important;
        border-radius: 24px !important;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    /* Large Vertical Button Group */
    .srinika-sidebar-filters-large {
        display: flex;
        flex-direction: column;
        /* Buttons okadanti kindha okati vastayi */
        gap: 12px;
        margin-top: 15px;
    }

    .s-large-btn {
        width: 100%;
        padding: 14px 20px;
        font-size: 0.95rem;
        font-weight: 700;
        text-align: left;
        border: 1px solid #e2e8f0;
        background: #ffffff;
        border-radius: 14px;
        color: #475569;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .s-large-btn i {
        font-size: 1.2rem;
        color: var(--electric-blue);
        transition: 0.3s;
    }

    /* Active State - Srinika Brand Color */
    .s-large-btn.active {
        background: var(--electric-blue);
        color: rgba(0, 34, 68, 0.9);
        border-color: var(--electric-blue);
        box-shadow: 0 8px 20px rgba(14, 165, 233, 0.25);
    }

    .s-large-btn.active i {
        color: rgba(0, 34, 68, 0.9);
    }

    .s-large-btn:hover:not(.active) {
        background: #f0f9ff;
        border-color: var(--electric-blue);
        transform: translateX(5px);
    }

    /* Item Animation */
    .s-item {
        display: block;
        animation: fadeIn 0.4s ease forwards;
    }

    .s-item.hidden {
        display: none;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>



<div class="ul-service-details-sidebar">
    <div class="ul-service-details-sidebar-widget srinika-sidebar-card">
        <span class="ul-service-details-sidebar-widget-title">
            <button class="s-large-btn " onclick="sidebarFilter('all', this)">
                <i class="fa-solid fa-grid-2"></i> All Services
            </button>
        </span>

        <div class="srinika-sidebar-filters-large">

            <button class="s-large-btn" onclick="sidebarFilter('audiology', this)">
                <i class="fa-solid fa-ear-listen"></i> Audiology
            </button>
            <button class="s-large-btn" onclick="sidebarFilter('speech', this)">
                <i class="fa-solid fa-comment-dots"></i> Speech Therapy
            </button>
            <button class="s-large-btn" onclick="sidebarFilter('hearing', this)">
                <i class="fa-solid fa-microchip"></i> Hearing Aids
            </button>
        </div>

        <hr class="my-3 opacity-10">

        <ul class="ul-service-details-sidebar-links" id="sidebar-service-list">
            <li><a class="dropdown-item" href="#">Pure Tone Audiometry</a></li>
            <!-- <li class="s-item audiology"><a href="#">Pure Tone Audiometry </a></li>
            <li class="s-item audiology"><a href="#">Impedance Audiometry </a></li>
            <li class="s-item audiology"><a href="#">BERA / OAE Test </a></li>
            <li class="s-item audiology"><a href="#">Tinnitus Management </a></li>
            <li class="s-item audiology"><a href="#">Pure Tone Audiometry </a></li>
            <li class="s-item audiology"><a href="#">Impedance Audiometry </a></li>
            <li class="s-item audiology"><a href="#">BERA / OAE Test </a></li>
            <li class="s-item audiology"><a href="#">Tinnitus Management </a></li>
                <li class="s-item audiology"><a href="#">Tinnitus Management <i class="fa-solid fa-chevron-right"></i></a></li> -->


            <li><a class="s-item audiology" href="pure_tone_audiometry_treatment_in_hyderabad.php">Pure Tone Audiometry</a></li>
            <li><a class="s-item audiology" href="impedance_audiometry_treatment_in_hyderabad.php">Impedance Audiometry</a></li>
            <li><a class="s-item audiology" href="speech_Audiometry_treatment_in_hyderabad.php">Speech Audiometry</a></li>
            <li><a class="s-item audiology" href="eustachian_tube_function_treatment_in_hyderabad.php">Eustachian Tube Function</a></li>
            <li><a class="s-item audiology" href="pediatric_hearing_screening_oae_treatment_in_hyderabad.php">Pediatric Hearing Screening OAE</a></li>
            <li><a class="s-item audiology" href="bera_test_treatment_in_hyderabad.php">BERA Test</a></li>
            <li><a class="s-item audiology" href="sisi_test_treatment_in_hyderabad.php">Sisi Test</a></li>
            <li><a class="s-item audiology" href="tone_decay_test_treatment_in_hyderabad.php">Tone Decay Test</a></li>
            <li><a class="s-item audiology" href="digital_hearing_aid_treatment_in_hyderabad.php">Digital Hearing Aid </a></li>
            <li><a class="s-item audiology" href="tinnitus_evaluation_treatment_in_hyderabad.php">Tinnitus Evaluation</a></li>











            <!-- <li class="s-item speech"><a href="#">Speech Assessment </a></li>
            <li class="s-item speech"><a href="#">Autism / ADHD Care </a></li>
            <li class="s-item speech"><a href="#">Stammering Therapy </a></li>
            <li class="s-item speech"><a href="#">Voice Disorders </a></li>
            <li class="s-item speech"><a href="#">Speech Assessment </a></li>
            <li class="s-item speech"><a href="#">Autism / ADHD Care </a></li>
            <li class="s-item speech"><a href="#">Stammering Therapy </a></li>
            <li class="s-item speech"><a href="#">Voice Disorders </a></li> -->



            <li><a class="s-item speech" href="speech_assessment_treatment_in_hyderabad.php">Speech Assessment</a></li>
            <li><a class="s-item speech" href="speech_therapy_treatment_in_hyderabad.php">Speech Therapy</a></li>
            <li><a class="s-item speech" href="occupational_therapy_treatment_in_hyderabad.php">Occupational Therapy</a></li>
            <li><a class="s-item speech" href="aba_therapy_treatment_in_hyderabad.php">ABA Therapy</a></li>
            <li><a class="s-item speech" href="autism_adhd_therapy_treatment_in_hyderabad.php">Autism/ADHD</a></li>
            <li><a class="s-item speech" href="auditory_verhal_therapy_treatment_in_hyderabad.php">Auditory Verhal Therapy</a></li>
            <li><a class="s-item speech" href="articulation_therapy_treatment_in_hyderabad.php">Articulation Therapy</a></li>
            <li><a class="s-item speech" href="stammering_stuttering_treatment_in_hyderabad.php">Stammering/Stuttering</a></li>
            <li><a class="s-item speech" href="voice_therapy_treatment_in_hyderabad.php">Voice Therapy</a></li>
            <li><a class="s-item speech" href="special_education_treatment_in_hyderabad.php">Special Education</a></li>
            <li><a class="s-item speech" href="neuro_speech_disorders_treatment_in_hyderabad.php">Neuro-Speech Disorders</a></li>
            <li><a class="s-item speech" href="learning_disability_treatment_in_hyderabad.php">Learning Disability</a></li>
            <li><a class="s-item speech" href="group_therapy_treatment_in_hyderabad.php">Group Therapy</a></li>












            <!-- <li class="s-item hearing"><a href="#">BTE / RIC Models </a></li>
            <li class="s-item hearing"><a href="#">Invisible (IIC) Aids </a></li>
            <li class="s-item hearing"><a href="#">Rechargeable Aids </a></li>
            <li class="s-item hearing"><a href="#">Aids Repair & Service </a></li>
            <li class="s-item hearing"><a href="#">BTE / RIC Models </a></li>
            <li class="s-item hearing"><a href="#">Invisible (IIC) Aids </a></li>
            <li class="s-item hearing"><a href="#">Rechargeable Aids </a></li>
            <li class="s-item hearing"><a href="#">Aids Repair & Service </a></li> -->





            <li><a class="s-item speech" href="behind_the_ear_treatment_in_hyderabad.php">Behind The Ear (BTE)</a></li>
            <li><a class="s-item speech" href="receiver_in_canal_treatment_in_hyderabad.php">Receiver In Canal (RIC)</a></li>
            <li><a class="s-item speech" href="Completely_in_canal_treatment_in_hyderabad.php">Completely In Canal (CIC)</a></li>
            <li><a class="s-item speech" href="in_the_canal_treatment_in_hyderabad.php">In-The-Canal (ITC) (Instant Fit)</a></li>
            <li><a class="s-item speech" href="invisible_in_the_canal_treatment_in_hyderabad.php">Invisible-In-The-Canal (IIC)</a></li>
            <li><a class="s-item speech" href="rechargeable_bte_treatment_in_hyderabad.php">Rechargeable BTE</a></li>
            <li><a class="s-item speech" href="rechargeable_ric_treatment_in_hyderabad.php">Rechargeable RIC</a></li>
            <li><a class="s-item speech" href="rechargeable_itc_treatment_in_hyderabad.php">Rechargeable ITC</a></li>
            <li><a class="s-item speech" href="rechargeable_cic_treatment_in_hyderabad.php">Rechargeable CIC</a></li>
            <li><a class="s-item speech" href="ear_moulds_ear_plugs_treatment_in_hyderabad.php">Ear Moulds/Ear Plugs</a></li>
            <li><a class="s-item speech" href="hearing_aid_accesssories_treatment_in_hyderabad.php">Hearing Aid Accesssories</a></li>
            <li><a class="s-item speech" href="hearing_aid_batteries_treatment_in_hyderabad.php">Hearing aid batteries</a></li>
            <li><a class="s-item speech" href="hearing_aid_services_repair_treatment_in_hyderabad.php">Hearing aid services & repair</a></li>

        </ul>
    </div>
</div>

<script>
    function sidebarFilter(category, btn) {
        // 1. All buttons nundi active class teesi, click chesina button ki add cheyali
        const buttons = document.querySelectorAll('.s-large-btn');
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // 2. Anni list items select cheyali
        const items = document.querySelectorAll('.s-item');

        items.forEach(item => {
            if (category === 'all') {
                item.classList.remove('hidden');
            } else {
                // Category match ayithe chupinchu, lekapothe hide chey
                if (item.classList.contains(category)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            }
        });
    }
</script>