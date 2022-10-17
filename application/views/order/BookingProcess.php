<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukaii</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
    <link rel="stylesheet" href="">
    <!-- box icons link  -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <!-- animate css link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer"
     />
     <style>
        .list {
            background: #efefef;
        }
        
        .list input {
            accent-color: #ea088b;
        }
        
        .list label {
            color: #ea088b;
        }
        
        .form-control:focus {
            box-shadow: none;
            outline: none;
        }
        
        .patient_details[placeholder] {
            font-size: 12px;
            font-weight: 700;
        }
        
        .schedule_day {
            border: 1px solid #9f9f9f;
            border-radius: 7px;
            width: 15%;
            margin: 0% 3.5px;
            max-width: 15%;
            font-size: 14px;
            padding: 4px 0px;
        }
        
        .totalDAys .schedule_day::selection {
            color: red;
            background-color: var(--iconbgColor);
        }
        
        .schudule_time {
            border: 1px solid #9f9f9f;
        }
    </style>

</head>

<?php $this->load->view("layout/header"); ?>

<body>
    <div class="row" style="background-color:#F7F7F7">
        <div class="col-12">
            <div class="d-flex  align-items-center py-3">
                <a href="<?php echo base_url(); ?>assets/covidRTPCRcheckup.html   ">
                    <span class="mr-3 " style="font-size: x-large; color: #00B3B7;"><i
                        class="fa-solid fa-left-long"></i></span>
                </a>
                <h5 class="rubicFont mb-0">Patient Details</h5>
            </div>
        </div>
        <div class="col-12 col-md-5 latoFont">
            <!-- patient number  -->
            <div class="bg-white d-flex align-items-center mb-2 py-2 rounded">
                <p class="border-right btn mb-0 text-secondary">+66</p>
                <input type="number" pattern="[789][0-9]{9}" placeholder="XXXXX XXXXX" name="PatientNumber"
                    id="PatientNumber" class="border-left-0 border-right-0 border-top-0 form-control mx-2 rounded-0">
                <img src='<?php echo base_url(); ?>assets/images/Check.png' style="width: 20px;" class="mr-2" alt="checkedIcon" />
            </div>
            <!-- patoent details  -->
            <div class="bg-white rounded d-flex align-items-center" id="AddPatient" style="cursor:pointer;">
                <p class="border-right btn mb-0 text-secondary" style="visibility:hidden;">+66</p>
                <h6 class="mb-0 ml-2 rubicFont">Add Patients</h6>
            </div>
            <div class="AddPatientDetails bg-white px-3 pt-2"  style="display: none;" id="patientDetails" >
                <div class="d-flex align-items-center">
                    <span><i class="fa-solid text-danger fa-circle-xmark"></i></span>
                    <input type="text" placeholder="Name" name="PatientName" id="PatientName"
                        class="border-left-0 border-right-0 border-top-0 form-control mx-2 rounded-0">
                    <button type="button" class="btn btn-sm">Age</button>
                    <button type="button" class="btn ml-1 btn-sm">Gender</button>
                </div>
                <button type="button" class="btn my-3 btn-sm AddmemberBtn text-white">Add Member</button>


            </div>
            <!-- patient address  -->
            <div class="bg-white mt-2 rounded d-flex align-items-center" id="patientAddredd" style="cursor:pointer;">
                <p class="border-right btn mb-0 text-secondary" style="visibility:hidden;">+66</p>
                <h6 class="mb-0 ml-2 rubicFont">Add Sample collection address</h6>
            </div>
            <div class="AddPatientDetails bg-white mb-2 px-3" style="display:none" id="patientAddreddDetails">
                <div class="py-3">
                    <input type="text" placeholder="line 1" name="PatientAddressLine1" id="PatientAddressLine-1"
                        class="mb-2 border-left-0 py-1 border-right-0 border-top-0 form-control mx-2 rounded-0">
                    <input type="text" placeholder="line 2" name="PatientAddressLine2" id="PatientAddressLine-2"
                        class=" mb-2 py-1 border-left-0 border-right-0 border-top-0 form-control mx-2 rounded-0">

                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <input type="number" placeholder="Zip Code" name="PatientAddressCode" id="PatientAddressCode"
                       style="width:30%;" class="form-control  py-1 mx-2 rounded">
                    <button type="button" class="btn my-3 px-3 btn-sm AddmemberBtn text-white">Save</button>
                </div>
            </div>
            <!-- patinetr ppointment date  -->

            <div class="bg-white rounded mt-2 d-flex align-items-center "  id="pic_schedule_time">
                <p class="border-right btn mb-0 text-secondary" style="visibility:hidden;">+66</p>
                <h6 class="mb-0 ml-2 rubicFont">Select Date & Time</h6>
            </div>
            <div class="Appointment bg-white pt-3" >
                <div class="totalDAys position-relative"  style="display: none;" id="schedule_date">
                    <div class="visible_days">
                        <div class="schedule_day_div d-flex align-items-center">
                            <div class="font-weight-bold schedule_day text-center" style="background-color: var(--iconbgColor);">
                                <p class="mb-0 ">TUE</p>
                                <p class="mb-0">01</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">THU</p>
                                <p class="mb-0">02</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">FRI</p>
                                <p class="mb-0">03</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">SAT</p>
                                <p class="mb-0">04</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">SUN</p>
                                <p class="mb-0">05</p>
                            </div>
                            <div class=" font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">MON</p>
                                <p class="mb-0">06</p>
                            </div>
                            <span><i id="show_2nd_week" class="fa-solid pl-1 fa-caret-right"></i></span>
                        </div>
                    </div>
                    <div class="hidden_days position-absolute" style="display: none; top: 0; right: 0; left: 0;">
                        <div class="Hidden_schedule_day_div d-flex align-items-center">
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">TUE</p>
                                <p class="mb-0">07</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">THU</p>
                                <p class="mb-0">08</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">FRI</p>
                                <p class="mb-0">09</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">SAT</p>
                                <p class="mb-0">10</p>
                            </div>
                            <div class="font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">SUN</p>
                                <p class="mb-0">11</p>
                            </div>
                            <div class=" font-weight-bold schedule_day text-center">
                                <p class="mb-0 ">MON</p>
                                <p class="mb-0">12</p>
                            </div>
                            <span><i id="show_1nd_week" class="fa-solid pl-1 fa-caret-right"></i></span>
                        </div>
                    </div>
                    <small class="" style="color: #a9a9a9!important;">Free Cancellation before 2 hrs.</small>
                </div>
                <div class="row my-2 schedule_time" style="display: none;">
                    <div class="col-3 mb-2">
                        <div class="rounded text-center schudule_time" style="background-color: var(--iconbgColor);">
                            <small style="font-weight: 500;"> 07.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 07.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 08.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 08.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 09.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 09.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 10.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 10.30 AM</small>
                        </div>
                    </div>

                </div>
                <div class="row my-4  schedule_time" style="display: none;">
                    <div class="col-3 mb-2">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 01.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 01.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 02.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 02.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 03.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 03.30 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 04.00 AM</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="rounded text-center schudule_time">
                            <small style="font-weight: 500;"> 04.30 AM</small>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-12 col-md-7">
            <div class="p-3 latoFont" style="background: #C0ECED; box-shadow: -4px 0px 8px rgba(0, 0, 0, 0.25);">
                <div class="border-bottom border-secondary">
                    <h5 class="rubicFont">Cart</h5>
                </div>
                <div class="d-flex flex-column h-75 justify-content-between selectedPackage">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row" class="pl-0">Len Len Test</th>
                                <td colspan="2" class="px-0">
                                    <button type="button"
                                        class=" dicrimentBtn btn bg-transparent border rounded-circle border-secondary p-0 btn-sm mr-1"
                                        style="width: 20px; height: 20px;"><span
                                            class="align-items-center d-flex justify-content-center"><i
                                                class="fa-minus fa-solid"></i></span> </button>
                                    <div type="button"
                                        style="background: #E5E3E3; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"
                                        class="btn px-md-3 btn-sm mr-1"><b>1</b> </div>
                                    <button type="button"
                                        class="IncrimentBtn btn bg-transparent border rounded-circle border-secondary p-0 btn-sm mr-1"
                                        style="width: 20px; height: 20px;"><span
                                            class="align-items-center d-flex justify-content-center"><i
                                                class="fa-solid fa-plus"></i></span> </button>
                                </td>
                                <td class="px-0">THB 3500</td>
                            </tr>
                            
                            <tr style="visibility:hidden ;">
                                <th scope="row">Basic </th>
                                <td colspan="2">
                                    <button type="button"
                                        class="btn bg-transparent border rounded-circle border-secondary p-0 btn-sm mr-1"
                                        style="width: 20px; height: 20px;"><span
                                            class="align-items-center d-flex justify-content-center"><i
                                                class="fa-minus fa-solid"></i></span> </button>
                                    <div type="button"
                                        style="background: #E5E3E3; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"
                                        class="btn px-3 btn-sm mr-1"><b>1</b> </div>
                                    <!-- <button type="button"
                                        class="btn bg-transparent border rounded-circle border-secondary p-0 btn-sm mr-1"
                                        style="width: 20px; height: 20px;"><span
                                            class="align-items-center d-flex justify-content-center"><i
                                                class="fa-solid fa-plus"></i></span> </button> -->
                                </td>
                                <td>THB 3500</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="<?php echo base_url('orderSummary'); ?>">
                            <button type="button"
                            style="background: radial-gradient(50% 50% at 50% 50%, #B3B1B2 0%, #5F5F5F 100%)"
                            class="btn text-white font-weight-bold"> Checkout</button>
                        </a>
                    </div>
                </div>
            </div>


            <div class="row mx-0 mt-5 px-2 latoFont">
                <!-- <h1 class='text-center col-12 mb-4 PackageHeadings'><b>Packages</b></h1> -->
                <div class="col-12 col-md-4 px-1">
                    <div class='boxShadow card py-3 '>
                        <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                            <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Covid RT-PCR Test</p>
                        </div>
                        <div class="card-body pt-1">
                            <h6 style="visibility:hidden" class="hiddenParameter">Includes: 40+ Parameters</h6>
                            <div class="blockquote mb-0 text-center">
                                <ul class='text-left mb-3 pl-2'>
                                    <li>The most accurate and reliable test for Covid-19</li>
                                    <li>Nasal and oral swabs</li>
                                    <li>Report suitable for travel or official purposes</li>
                                </ul>
                            </div>

                            <div class='border-0 mt-3'>
                                <div class="suggestionOfferPrice d-flex justify-content-between align-items-center">
                                    <div class="offer text-center">
                                        <h6 class="small mb-0">50% OFF</h6>
                                    </div>

                                    <div class="pacakgesuggestionPrice  text-center "
                                        style="color: #00B3B7;border-radius:0px 8px 8px 0px;">

                                        <h6 style="font-weight:600;" class="mb-0 rubicFont">THB 2000</h6>
                                    </div>

                                </div>
                            </div>
                            <button class='border-info btn btn-block btn-sm text-dark mt-2 bg-transparent'> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-12 col-md-4 px-1 packagesCard">
                    <div class='boxShadow card py-3 '>
                        <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                            <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Basic Health Check up</p>
                        </div>
                        <div class="card-body pt-1">
                            <h6 class="font-weight-bold small">Includes: 40+ Parameters</h6>
                            <div class="blockquote mb-0 text-center">
                                <ul class='text-left mb-3 pl-2'>
                                    <li>Comprehensive blood check for most common parameters
                                    </li>
                                    <li>Advised for all adults
                                    </li>
                                    <li>Perfect for regular tracking of health
                                    </li>
                                </ul>
                            </div>
                            <div class='border-0 mt-3'>
                                <div class="suggestionOfferPrice d-flex justify-content-between align-items-center">
                                    <div class="offer text-center">
                                        <h6 class="small mb-0">50% OFF</h6>
                                    </div>

                                    <div class="pacakgesuggestionPrice  text-center "
                                        style="color: #00B3B7;border-radius:0px 8px 8px 0px;">

                                        <h6 style="font-weight:600;" class="mb-0 rubicFont">THB 2000</h6>
                                    </div>

                                </div>
                            </div>
                            <button class='border-info btn btn-block btn-sm text-dark mt-2 bg-transparent'> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
                <!-- 3  -->
                <div class="col-12 col-md-4 px-1 packagesCard">
                    <div class='boxShadow card py-3 '>
                        <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                            <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Complete Health Check up</p>
                        </div>
                        <div class="card-body pt-1">
                            <h6 class="font-weight-bold small">Includes: 40+ Parameters</h6>
                            <div class="blockquote mb-0 text-center">
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
                            <div class='border-0 mt-3'>
                                <div class="suggestionOfferPrice d-flex justify-content-between align-items-center">
                                    <div class="offer text-center">
                                        <h6 class="small mb-0">50% OFF</h6>
                                    </div>

                                    <div class="pacakgesuggestionPrice  text-center "
                                        style="color: #00B3B7;border-radius:0px 8px 8px 0px;">

                                        <h6 style="font-weight:600;" class="mb-0 rubicFont">THB 2000</h6>
                                    </div>

                                </div>
                            </div>
                            <button class='border-info btn btn-block btn-sm text-dark mt-2 bg-transparent'> Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <!-- <div class="col-12 col-md-3  packagesCard">
                    <div class='boxShadow card py-3 '>
                        <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                            <p style='font-weight:600; font-size: 1rem;'>Len- Len Test</p>
                        </div>
                        <div class="card-body pt-1">
                            <h6 class="font-weight-bold small">Includes: 6+ Parameters</h6>
                            <div class="blockquote mb-0 text-center" style='height:120px'>
                                <ul class='text-left mb-3 pl-2' >
                                    <li>Test for common STDs
                                    </li>
                                    <li>Quick and discrete
                                    </li>
                                </ul>
                            </div>
                            <button
                                class='border-info btn btn-sm text-info'>
                                <p class='mb-0 ms-1'><span class="mr-1"><i class="fa-solid fa-plus"></i></span> View more</p>
                            </button>
                            <div class='border-0 mt-3'>
                                <div class="OfferPrice">
                                    <div class="offer text-center" style="width: 35%;">
                                        <span class='small'>UPTO</span>
                                        <h6 >50% OFF</h6>
                                    </div>
                                   
                                        <div class="price  text-center text-white" style="width: 65%; border-radius:0px 8px 8px 0px;">
                                            <a href="<?php echo base_url(); ?>assets/lenLenCheckUp.html" style="color:white !important;">
                                            <span class='small'>EXCLUSIVE OFFER</span>
                                            <h6>THB 2000</h6>
                                        </a>
                                        </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>



        </div>

    </div>
</body>
<script>
    $("#show_2nd_week").click(function() {
        $(".hidden_days").removeClass('animate__animated animate__bounceOutLeft');
        $(".hidden_days").addClass('animate__animated animate__fadeInRightBig');
        $(".visible_days").removeClass('animate__animated animate__fadeInRightBig');
        $(".visible_days").addClass('animate__animated animate__bounceOutLeft');
        $(".hidden_days").show();
        $("visible_days").hide();
    });



    $("#show_1nd_week").click(function() {
        $(".hidden_days").removeClass('animate__animated animate__fadeInRightBig');
        $(".hidden_days").addClass('animate__animated animate__bounceOutLeft');
        $(".visible_days").removeClass('animate__animated animate__bounceOutLeft');
        $(".visible_days").addClass('animate__animated animate__fadeInRightBig');
    });

    $("#pic_schedule_time").click(function() {
        $("#pic_schedule_time").toggleClass("themeBlueBg bg-white")
        $("#schedule_date").show();
    })
    $(".schedule_day").click(function() {
        $(".schedule_time").show();
    })
    $("#serviceBookingLocation").click(function() {
        $("#servuceBooking_location_ddvalue").slideToggle();
    })


    var selectedday = document.querySelectorAll('.schedule_day');
    // console.log(selectedday);
    // for (let i = 0; i < selectedday.length; i++) {
    //     selectedday[i].addEventListener("click", view_row_function.bind(this, selectedday[i]));
    // }

    $("#AddPatient").click(function(){
        $("#AddPatient").toggleClass("themeBlueBg bg-white")
        $("#patientDetails").slideToggle();
    });

    $("#patientAddredd").click(function(){
        $("#patientAddredd").toggleClass("themeBlueBg bg-white")
        $("#patientAddreddDetails").slideToggle();
    });
    // patientAddredd
</script>
</html>
