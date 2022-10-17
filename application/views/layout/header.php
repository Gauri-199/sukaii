<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukaii</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/index.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer"
     />
    <!-- box icons link  -->

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

</head>

<body>
    <header id="" class='bg-white'>
        <div class="align-items-center border-bottom row">
            <div class="align-items-center col col-md-3 col-sm-6 d-flex">
                <a href="<?php echo base_url(); ?>index.php" class=""> <img src="<?=base_url()?>assets/SUKAII Icons/SUKAII-Logo.png" alt="Sukaii" style="max-width:155px;" class="logo_mobile p-2 w-100"></a>
                <a href="#AllServicePackages"><button type="button" id="BookingBtn" class="badge-pill border-white btn btn-sm font-weight-bold mt-4 px-3 text-white d-none d-md-block themeBlueBg latoFont" style="font-size: 13px;">Book Now</button></a>

            </div>
            <div class="col-6 col-md-9 col-sm-6 hide_menu">
                <div class="d-md-block d-none justify-content-end login_row mt-2 row w-100">
                    <ul class="d-flex float-right list-unstyled mb-2 align-content-center">
      
                    <?php
						if (isset($this->session->user_session)) {
						$username = $this->session->user_session->name;
						?>
                        <a href="<?=base_url('logout')?>" style="text-decoration: none;" class="pt-1">
                            <li class="login_row_list px-3">Logout</li>
                        </a>
							<?php
						} else { ?>
							<a href="<?=base_url('login')?>" style="text-decoration: none;" class="pt-1">
								<li class="login_row_list px-3">Login/Sign up</li>
							</a>
						<?php }
						?>

                        <li class="login_row_list px-3 pt-1"><span class="p-2"><i class="fas fa-map-marker-alt"></i></span>Bangkok
                        </li>
                        <li>
                            <div class="dropdown show">
                                <a class="btn btn-sm  dropdown-toggle " style="border: 1px solid #000000;color: #454545" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Hindi</a>
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Bank kok</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-md-block d-none float-right row w-100">
                    <ul class="d-flex float-right mb-0">
                        <li class="menu_list px-3"><a href="<?php echo base_url(); ?>index.php" class="text-dark font-weight-bold">Home</a></li>
                        <div class="dropdown show">
                            <a class=" dropdown-toggle align-items-center d-flex dropdown-toggle" style="font-weight: 600;" href="#" role="button" id="desktopServicemenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="desktopServicemenu">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>covidRTPCRcheckup">Covid RT-PCR Test</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>basicHeathjCheckup">Basic Health Check up</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>completeHealthCheckup">Complete Health Check up</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>lenLenCheckUp">Len- Len Test</a>
                            </div>
                        </div>
                        <!-- <li class="menu_list  px-3"><a href="#WeMadeItsImple" class="text-dark font-weight-bold">Services </a></li> -->
                        <li class="menu_list px-3"><a href="<?php echo base_url(); ?>connectUs" class="text-dark font-weight-bold">Connect Us</a></li>
                        <li class="menu_list px-3"><a href="<?=base_url('addCart')?>" class="text-dark font-weight-bold">Cart</a></li>

                        <!--                    <li class="menu_list px-3"><a href="<?php echo base_url(); ?>sukaiiUser_profle.html" class="text-dark font-weight-bold">MY ACCOUNT</a></li>-->
                        <!--                    <li class="menu_list px-3"><a href="<?php echo base_url(); ?>partenerWithUs.html" class="text-dark font-weight-bold">PARTNERS</a>-->
                        <!--                    </li>-->
                        <!--                    <li class="menu_list px-3"><a href="# " class="text-dark font-weight-bold">ABOUT US</a></li>-->
                    </ul>
                </div>
                <div class="align-items-center d-flex justify-content-end mobile_menu">
                    <div class="text-secondary d-block d-md-none latoFont" style="line-height:1;">
                        <small class="mr-1">Hello</small><span><b><a href="<?php echo base_url(); ?>login.php" class="text-dark" style="text-decoration: none;">Sign in</a></b></span>
                    </div>
                    <!-- <div class="login_btn"><button type="button" class="btn d-block d-md-none">Login</button></div> -->
                    <ul class="d-block d-md-none m-0" style="padding: 1rem; ">
                        <li id="MenuIconBtn" class="tab_icon_menu_list list-unstyled" style="font-size: 20px;"><span><i style="color: #00b3b7;" class="fas fa-bars "></i></span></li>
                    </ul>

                </div>
            </div>
            <div class="tab_mobile_nav d-md-none  w-50" id="MobileMenuSection" style="display: none;">
                <ul class="list-unstyled border-0 pb-3 px-0 form-control">
                    <a href="<?php echo base_url(); ?>index.php" style="text-decoration: none;" class="text-dark">
                        <li class="border-0 form-control mobile_menu_list rounded-0">Home</li>
                    </a>

                    <a href="" style="text-decoration: none;" class="text-dark">
                        <!-- Default dropright button -->
                        <div class="btn-group dropright">
                            <button type="button" class="btn btn-secondary dropdown-toggle" id="mobilemenuService"  href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropright
                            </button>
                            <div class="dropdown-menu" aria-labelledby="mobilemenuService">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>covidRTPCRcheckup.php">Covid RT-PCR Test</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>basicHeathjCheckup.php">Basic Health Check up</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>completeHealthCheckup.php">Complete Health Check up</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>lenLenCheckUp.php">Len- Len Test</a>
                            </div>
                        </div>
                        <!-- <li class="border-0 form-control mobile_menu_list rounded-0">Services</li> -->
                    </a>
                    <a href="#WeMadeItsImple" style="text-decoration: none;" class="text-dark">
                        <li class="border-0 form-control mobile_menu_list rounded-0">Contact Us</li>
                    </a>
                    <a href="#WeMadeItsImple" style="text-decoration: none;" class="text-dark">
                        <li class="border-0 form-control mobile_menu_list rounded-0">Cart</li>
                    </a>
                    <a href="#WeMadeItsImple" style="text-decoration: none;" class="text-dark">
                        <li class="border-0 form-control mobile_menu_list rounded-0">Book Now</li>
                    </a><a href="#WeMadeItsImple" style="text-decoration: none;" class="text-dark">
                        <li class="border-0 form-control mobile_menu_list rounded-0">Log Out</li>
                    </a>
                    <!-- <a href="#" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">FAQ</li>
                </a>
                <a href="<?php echo base_url(); ?>sukaiiUser_profle.html" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">MY ACCOUNT</li>
                </a>
                <a href="<?php echo base_url(); ?>partenerWithUs.html" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">PARTNER WITH US</li>
                </a>
                <a href="#" class="text-dark"><li class="border-0 form-control mobile_menu_list">BLOG ||</li>
                <a href="#" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">PRESS</li>
                </a>
                <a href="<?php echo base_url(); ?>sukaii_help_center.html" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">CONTACT US</li>
                </a>
                <a href="#" style="text-decoration: none;" class="text-dark">
                    <li class="border-0 form-control mobile_menu_list">FOLLOW US
                        <div class="social_icons ml-4">
                            <span><a href="https://www.facebook.com/"><i class='bx bxl-facebook-square'
                                                                         style="font-size: 25px; color: #1e67e9;"></i></a></span>
                            <span><a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram'
                                                                                style="font-size: 25px;  color: indianred;"></i></a></span>
                        </div>
                    </li>
                </a> -->

                </ul>
            </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <script src="<?=base_url()?>assets/js/index.js"></script>
    <!-- <script src="./bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script>
        $("#MenuIconBtn").click(function() {
            $("#MobileMenuSection").slideToggle();
        });
        $(document).mouseup(function(e) {
            var hideMenu = $("#MobileMenuSection");
            var hideMenubtn = $("#MenuIconBtn");

            // if the target of the click isn't the container nor a descendant of the container
            // console.log(e.target.parentNode.parentNode,hideMenubtn[0]);
            // if (!hideMenu.is(e.target) && !hideMenubtn.is(e.target) && hideMenu.has(e.target).length === 0) {
            //     // $('.icon').show();
            //     $('#MobileMenuSection').slideToggle();
            // }
        });
    </script>
</body>

</html>
