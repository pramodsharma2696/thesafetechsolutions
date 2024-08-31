@extends('master')
@section('contents')
<style>
    .card {
        border-radius: 0.5rem; /* Adjust as needed for rounded corners */
        border: 1px solid #dee2e6; /* Optional: for a border */
    }
    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center; /* Center items horizontally */
        justify-content: center; /* Center items vertically */
        padding: 2rem; /* Adjust padding as needed */
    }
    .list-unstyled {
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        width: 100%; /* Ensure full width for centering */
    }
    .list-unstyled li {
        display: flex;
        align-items: center;
        margin-bottom: 1rem; /* Adjust spacing between items */
        text-align: center; /* Center text */
    }
    .list-unstyled i {
        margin-right: 0.5rem; /* Space between icon and text */
    }
    .accordion-button:not(.collapsed) {
        background-color: #e9ecef; /* Light background color when expanded */
    }
    .accordion-item {
        border: 1px solid #dee2e6; /* Border around each accordion item */
        border-radius: 0.5rem; /* Rounded corners */
        margin-bottom: 1rem; /* Space between accordion items */
    }
    .accordion-body {
        padding: 1rem; /* Padding inside accordion body */
    }
</style>
<div class="container my-5">
    <!-- Services Title -->
    <h1 class="mb-4 text-center text-black">Services</h1>
    
    <!-- Accordion Section -->
    <div class="accordion mb-5" id="servicesAccordion">
        <!-- Accordion Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-1.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    MT5 ADMINISTRATOR SUPPORT
                </button>
            </div>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Configuring server network cluster in MT5 Admin.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Creating various trade symbols and trading account groups and their settings as per requirement.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Configuring feeder, gateway & routing rules along with their parameters.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Synchronizing history data with other MT4 and MT5 servers.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Configuring SMTP mail server in the MT5 Admin.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Configuring various plugins like Trade Copier, PAMM, MAMM along with their settings.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Monitoring trade server journals to identify and report the issues & fix them.</li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-2.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                MT5 MANAGER SUPPORT
                </button>
            </div>

            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Monitoring client database along with their orders and positions</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Detailed manager training.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Analysing various reports to help maximize company brokerage.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Analysing net positions summary to help take decisions on risk management.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i> Modifying client groups, leverages, personal information, trading passwords, etc. as per client requirement.</li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Accordion Item 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                
                <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-3.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                GATEWAY & BRIDGE CONNECTIVITY SUPPORT
                </button>
            </div>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Building API connection between Liquidity Provider and broker.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Configuring various feed and execution models.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Additional brokerage generation by setting up various markup models.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Monitoring Taker and Maker connection status and analysing the alerts.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i> Monitoring Coverage account.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i> Analysing various reports in detail like positions & orders report, markup report, slippage report, etc.</li>
                </ul>
                </div>
            </div>
        </div>
       

        <!-- Accordion Item 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                
                <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-4.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                DEDICATED SERVER SUPPORT
                </button>
            </div>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  MT5 desktop/web/mobile terminal delivery and installation on dedicated server.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Weekly Server Maintenance – server restart, performing
                    updates, server load handling and reducing server redundancy.</li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Accordion Item 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
               
                <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-5.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                CRM SUPPORT
                </button>
            </div>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Backoffice admin (broker side) and trader’s room (client side) support.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Detailed CRM Training regarding KYC compliance, deposits & withdrawals, Multilevel IB commission structuring.</li>
                 
                </ul>
                </div>
            </div>
        </div>

        <!-- Accordion Item 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                
                <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/service/srvices-icon-6.png') }}" alt="services-icon-1" class="me-2" style="width:50px; height:50px;"> <!-- Adjust size as needed -->
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                TRADE COPIER SUPPORT
                </button>
            </div>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#servicesAccordion">
                <div class="accordion-body">
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Installing & Configuring Trade Copier Plugin into server & MT5 Admin</li>
                    <li class="list-group-item"><i class="fa fa-arrow-right text-black me-2"></i>  Creating various Trade Copier modules and setting up copy trading rules as per the client requirements.</li>
                    
                </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Services Title and Paragraph -->
    <h2 class="mb-3 text-center text-black">Additional Services</h2>
    <p class="mb-5 text-black">
        We guide you through the process of setting up your forex brokerage firm, helping you navigate regulatory landscapes, acquire necessary licenses, and establish a robust legal framework. Our seasoned experts provide personalized consulting, optimizing your strategies for operational efficiency, risk management, and exceptional customer support.
    </p>

    <!-- Services Card -->
    <div class="card mb-5">
        <div class="card-body">
            <ul class="list-unstyled">
                <li><i class="fa fa-arrow-right text-black me-2 ml-5"></i> Company formation, Forex License and regulation support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Various Plugin installation and handling support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Website hosting Domain, cPanel, SSL & SMTP support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Expert Advisor (Algo/Robo) support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Risk Management software support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Payment Gateway (PSP / Wallet) support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Trading support.</li>
                <li><i class="fa fa-arrow-right text-black me-2"></i> Introduction and connectivity with multiple Prime Liquidity Providers (LPs).</li>
            </ul>
        </div>
    </div>

    <!-- Experience Title -->
    <h2 class="text-center text-black">Experience the Future Of Forex with ROTEX</h2>
    <p class="p-5">Your Forex brokerage journey deserves the best-in-class support. Discover the full potential of your business by partnering with Rotex IT Solutions. Contact us today to unlock innovation, streamline operations, and pave the way for your success. Your journey to Forex excellence begins here at Rotex. </p>

</div>
@endsection