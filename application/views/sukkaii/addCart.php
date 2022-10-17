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
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
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

</head>

<body class="bodyColor latoFont">
    <?php include_once("header.php")?>
    <div class="row">
        <div class="col-12 col-md-7 ">
            <div class="d-flex  align-items-center py-3">
                <a href="./BookingProcess.html"> <span class="mr-3 " style="font-size: x-large; color: #00B3B7;"><i
                            class="fa-solid fa-left-long"></i></span></a>
                <h5 class="rubicFont mb-0">Cart</h5>
            </div>
            <div class="">
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
                            <th class="px-0 themeBlueTextColor">THB 3500</th>
                        </tr>

                    </tbody>
                </table>
                <div class="row mx-0 mt-5 px-2 latoFont">
                    <!-- <h1 class='text-center col-12 mb-4 PackageHeadings'><b>Packages</b></h1> -->
                    <div class="col-12 col-md-4 px-1">
                        <div class='boxShadow card py-3 '>
                            <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                                <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Covid
                                    RT-PCR Test</p>
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

                                            <h6 style="font-weight:600;" class="mb-0 rubicFont packageAmmount">THB 2000
                                            </h6>
                                        </div>

                                    </div>
                                </div>
                                <button class='border-none btn btn-block btn-sm text-white mt-2 packageAddedTocart'> Add
                                    to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-12 col-md-4 px-1 packagesCard">
                        <div class='boxShadow card py-3 '>
                            <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                                <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Basic
                                    Health Check up</p>
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

                                            <h6 style="font-weight:600;" class="mb-0 rubicFont packageAmmount">THB 2000
                                            </h6>
                                        </div>

                                    </div>
                                </div>
                                <button class='border-none btn btn-block btn-sm text-white mt-2 packageAddedTocart'> Add
                                    to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- 3  -->
                    <div class="col-12 col-md-4 px-1 packagesCard">
                        <div class='boxShadow card py-3 '>
                            <div class='PackageHeader card-header bg-transparent border-0 pb-0'>
                                <p style='font-weight:600; font-size: 1rem;  height: 50px;' class="rubicFont">Complete
                                    Health Check up</p>
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

                                            <h6 style="font-weight:600;" class="mb-0 rubicFont packageAmmount">THB 2000
                                            </h6>
                                        </div>

                                    </div>
                                </div>
                                <button class='border-none btn btn-block btn-sm text-white mt-2 packageAddedTocart'> Add
                                    to
                                    Cart</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-12 col-md-5 " style="background: #C0ECED; box-shadow: -4px 0px 8px rgba(0, 0, 0, 0.25);">
            <div class="card bg-transparent border-0">
                <div class="d-flex  align-items-center py-3">
                    <h5 class="rubicFont mb-0">Order Summary</h5>
                </div>
                <table class="table latoFont">
                    <tbody>
                        <tr>
                            <td>Basic Health Check up</td>
                            <td>THB 3000</td>
                        </tr>
                        <tr>
                            <td>Conveniences & Services</td>
                            <td>THB 0</td>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <th>THB 3000</th>
                        </tr>
                        
                    </tbody>
                    
                </table>
                <div class="mt-5 text-center latoFont">
                    <button type="button" class="btn px-3 btn-sm AddmemberBtn text-white">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
  
    $("#CreditCard").click(function () {
        $("#CreditCard").toggleClass("themeBlueBg bg-white")
        $("#PromptPay").toggleClass("mt-5")
        $("#CCCard").toggle();

    });

</script>

</html>