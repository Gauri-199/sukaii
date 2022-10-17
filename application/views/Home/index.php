<?php $this->load->view("layout/header"); ?>

    <!-- header banner  -->
    <div class="" style='background:lightgray;'>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?=base_url()?>assets/images/bodyBannerImage.png" class='w-100' alt="" />
                </div>
                <div class="align-items-center col-md-7 d-flex justify-content-around">
                    <div class="" style='line-height:106px;'>
                        <h1 class='bannerHeading mb-3 rubicFont'>Your Health, In Your Hands</h1>
                        <div class="row justify-content-around">
                            <div class="col-md-10">
                                <ul class='list-unstyled text-start BannerList'>
                                    <li><img src='<?=base_url()?>assets/images/Check.png' style="width: 30px;" alt="checkedIcon" /> <b>Easy
                                            online booking</b></li>
                                    <li> <img src='<?=base_url()?>assets/images/Check.png' style="width: 30px;" alt="checkedIcon" />
                                        <b>Sample collection at home</b>
                                    </li>
                                    <li> <img src='<?=base_url()?>assets/images/Check.png' style="width: 30px;" alt="checkedIcon" />
                                        <b>Accurate results within 24-48 hours</b>
                                    </li>
                                </ul>
                                <ul class='list-unstyled'>
                                    <li class='d-flex justify-content-around'>
                                        <img src="<?=base_url()?>assets/images/appstore.jpg" class="rounded"
                                            style='width:100px; height:auto;' alt="" />
                                        <img src="<?=base_url()?>assets/images/playStore.jpeg" class="rounded"
                                            style='width:100px; height:auto;' alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Book in 3 simple steps  -->

    <div class="row mx-0 mt-4">
        <h2 class='text-center col-12 mb-5 rubicFont bookingSteps'><b>How to Book in 3 simple steps</b></h2>
        <div class="col-12 col-md-4 px-4 ">
            <div class='boxShadow card' style="background-color: #f1f5f5;">
                <div class='BookingProcess rounded-circle card-header' style="background:#00B3B7">
                    <div class="text-white latoFont">1</div>
                </div>
                <div class="card-body pb-0">
                    <div class="blockquote mb-0 text-center">
                        <img src="<?=base_url()?>assets/images/step1.png" class='w-75' alt="" />
                        <h5 style="height: 40px;" class="latoFont">Select desired service</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 px-4 simplestepcardArrage  ">
            <div class='boxShadow card' style="background-color: #f1f5f5;">
                <div class='BookingProcess rounded-circle card-header' style="background:#00B3B7">
                    <div class="text-white latoFont">2</div>
                </div>
                <div class="card-body pb-0">
                    <div class="blockquote mb-0 text-center">
                        <img src="<?=base_url()?>assets/images/step2.png" class='w-75' alt="" />
                        <h5 style="height: 40px;" class="latoFont">Select date, time, and address</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 px-4 simplestepcardArrage ">
            <div class='boxShadow card' style="background-color: #f1f5f5;">
                <div class='BookingProcess rounded-circle card-header' style="background:#00B3B7">
                    <div class="text-white latoFont">3</div>
                </div>
                <div class="card-body pb-0">
                    <div class="blockquote mb-0 text-center">
                        <img src="<?=base_url()?>assets/images/step3.png" class='w-75' alt="" />
                        <h5 style="height: 40px;" class="latoFont">Sample collection & Test results</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Packages  -->

    <div class="row mx-0 mt-5 px-2 PackageBg latoFont" id="AllServicePackages">
        <h1 class='text-center col-12 mb-4 PackageHeadings rubicFont'><b>Packages</b></h1>
        <div class="col-12 col-md-3">
            <div class='boxShadow card py-3 '>
                <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                    <p style='font-weight:600; font-size: 1.1rem; height: 50px;' class="rubicFont mb-2">Covid RT-PCR
                        Test</p>
                </div>
                <div class="card-body pt-1">
                    <h6 style="visibility:hidden">Includes: 40+ Parameters</h6>
                    <div class="blockquote mb-0 text-center" style='height:120px'>
                        <ul class='text-left mb-3 pl-2'>
                            <li>The most accurate and reliable test for Covid-19</li>
                            <li>Nasal and oral swabs</li>
                            <li>Report suitable for travel or official purposes</li>
                        </ul>
                    </div>
                    <button class='badge-pill bg-transparent border-info btn btn-sm text-info'>
                        <p class='mb-0 ms-1'><span class="mr-1"><i class="fa-solid fa-plus"></i></span> View more</p>
                    </button>
                    <div class='border-0 mt-3'>
                        <div class="OfferPrice">
                            <div class="offer text-center" style="width: 35%;">
                                <span class='small'>UPTO</span>
                                <h6>50% OFF</h6>
                            </div>

                            <div class="price  text-center text-white"
                                style="width: 65%; border-radius:0px 8px 8px 0px;">
                                <a href="./covidRTPCRcheckup.php"
                                    style="color:white !important; text-decoration: none;">
                                    <span class='small'>EXCLUSIVE OFFER</span>
                                    <h6>THB 2000</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="col-12 col-md-3 packagesCard">
            <div class='boxShadow card py-3 '>
                <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                    <p style='font-weight:600; font-size: 1rem; height: 50px;' class="rubicFont mb-2">Basic Health Check
                        up</p>
                </div>
                <div class="card-body pt-1">
                    <h6 class="font-weight-bold small">Includes: 40+ Parameters</h6>
                    <div class="blockquote mb-0 text-center" style='height:120px'>
                        <ul class='text-left mb-3 pl-2'>
                            <li>Comprehensive blood check for most common parameters
                            </li>
                            <li>Advised for all adults
                            </li>
                            <li>Perfect for regular tracking of health
                            </li>
                        </ul>
                    </div>
                    <button class='badge-pill bg-transparent border-info btn btn-sm text-info'>
                        <p class='mb-0 ms-1'><span class="mr-1"><i class="fa-solid fa-plus"></i></span> View more</p>
                    </button>
                    <div class='border-0 mt-3'>
                        <div class="OfferPrice">
                            <div class="offer text-center" style="width: 35%;">
                                <span class='small'>UPTO</span>
                                <h6>50% OFF</h6>
                            </div>

                            <div class="price  text-center text-white"
                                style="width: 65%; border-radius:0px 8px 8px 0px;">
                                <a href="./basicHeathjCheckup.php"
                                    style="color:white !important; text-decoration: none;">
                                    <span class='small'>EXCLUSIVE OFFER</span>
                                    <h6>THB 2000</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3  -->
        <div class="col-12 col-md-3 packagesCard">
            <div class='boxShadow card py-3 '>
                <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                    <p style='font-weight:600; font-size: 1rem; height: 50px;' class="rubicFont mb-2">Complete Health
                        Check up</p>
                </div>
                <div class="card-body pt-1">
                    <h6 class="font-weight-bold small">Includes: 40+ Parameters</h6>
                    <div class="blockquote mb-0 text-center" style='height:120px'>
                        <ul class='text-left mb-3 pl-2'>
                            <li>Comprehensive blood check for most common parameters
                            </li>
                            <li>Advised for all seniors
                            </li>
                            <li>Screens for common cancer markers
                            </li>
                            <!-- <li>Urine analysis</li> -->
                        </ul>
                    </div>
                    <button class='badge-pill bg-transparent border-info btn btn-sm text-info'>
                        <p class='mb-0 ms-1'><span class="mr-1"><i class="fa-solid fa-plus"></i></span> View more</p>
                    </button>
                    <div class='border-0 mt-3'>
                        <div class="OfferPrice">
                            <div class="offer text-center" style="width: 35%;">
                                <span class='small'>UPTO</span>
                                <h6>50% OFF</h6>
                            </div>

                            <div class="price  text-center text-white"
                                style="width: 65%; border-radius:0px 8px 8px 0px;">
                                <a href="./completeHealthCheckup.php"
                                    style="color:white !important; text-decoration: none;">
                                    <span class='small'>EXCLUSIVE OFFER</span>
                                    <h6>THB 2000</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="col-12 col-md-3  packagesCard">
            <div class='boxShadow card py-3 '>
                <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                    <p style='font-weight:600; font-size: 1rem; height: 50px;' class="rubicFont mb-2">Len- Len Test</p>
                </div>
                <div class="card-body pt-1">
                    <h6 class="font-weight-bold small">Includes: 6+ Parameters</h6>
                    <div class="blockquote mb-0 text-center" style='height:120px'>
                        <ul class='text-left mb-3 pl-2'>
                            <li>Test for common STDs
                            </li>
                            <li>Quick and discrete
                            </li>
                        </ul>
                    </div>
                    <button class='badge-pill bg-transparent border-info btn btn-sm text-info'>
                        <p class='mb-0 ms-1'><span class="mr-1"><i class="fa-solid fa-plus"></i></span> View more</p>
                    </button>
                    <div class='border-0 mt-3'>
                        <div class="OfferPrice">
                            <div class="offer text-center" style="width: 35%;">
                                <span class='small'>UPTO</span>
                                <h6>50% OFF</h6>
                            </div>

                            <div class="price  text-center text-white"
                                style="width: 65%; border-radius:0px 8px 8px 0px;">
                                <a href="./lenLenCheckUp.php" style="color:white !important; text-decoration: none;">
                                    <span class='small'>EXCLUSIVE OFFER</span>
                                    <h6>THB 2000</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- whyUs  -->

    <div class="row mx-0 whyUsBg align-items-center pt-5 latoFont">
        <h1 class='text-center col-12 mb-4 Y_usHeadings d-block d-md-none rubicFont'><b>Why Us</b></h1>
        <div class="col-12 col-md-6 ">
            <img src="<?=base_url()?>assets/images/whyus.png" class='w-100' alt="" />
        </div>
        <div class="col-12 col-md-6 text-center">
            <h1 class='text-center d-none d-md-block   Y_usHeadings rubicFont'><b>Why Us</b></h1>
            <h5 class='ml-3 mt-4 text-left'>We believe..</h5>
            <ul class='text-left'>
                <li>High quality health care should be available at your home where possible</li>
                <li>Booking healthcare services should be fast, simple, and convenient</li>
                <li>Your health reports should make sense and allow you to track your progress</li>
            </ul>
            <h5 class='text-center'>AND most of all, we believe that:</h4>
                <h3 class="rubicFont">Your Health, In Your Hands</h3>
        </div>
    </div>
<?php $this->load->view("./layout/footer"); ?>
