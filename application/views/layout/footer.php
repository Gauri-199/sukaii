<footer style='background: #00B3B7' class="latoFont">
        <div class="row mx-0">
            <div class="col-6 col-md-3 text-center">
                <a href="./index.php">
                    <img src="<?php base_url()?>assets/images/LOGO.png" class='w-75' alt=""/>
                </a>
                <p class='text-left mt-3'>Sukaii offers laboratory services which offers health services at home. They are quick in delivering the reports i.e. within 24 hours.</p>
            </div>
            <div class="col-6 col-md-3">
                <ul>
                    <li class="rubicFont"><b>Pages</b></li>
                    <a href="<?php echo base_url('AboutUs'); ?>">
                        <li>About Us</li>
                    </a>
                    <a href="<?php echo base_url(); ?>connectUs">
                        <li>Contact Us</li>
                    </a>
                    <a href="#">
                    <li>Help</li>
                    </a>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <ul>
                    <li class="rubicFont"><b>Services</b></li>
                    <a href="<?php echo base_url('covidRTPCRcheckup'); ?>">
                        <li>Covid RT-PCT Test</li>
                    </a>
                    <a href="<?php echo base_url('basicHeathjCheckup'); ?>">
                        <li>Basic Health Check up</li>
                    </a>
                   <a href="<?php echo base_url('completeHealthCheckup'); ?>">
                    <li>Complete Health Check up</li>
                   </a>
                   <a href="<?php echo base_url('lenLenCheckUp'); ?>">
                    <li>Len-Len tests</li>
                   </a>
                    
                    
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <ul>
                    <li class="rubicFont"><b>Conditions</b></li>
                    <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                    <li>Cookie preferences</li>
                    <li>Site map</li>
                </ul>
            </div>
            <div class="col-12 col-md-8 "></div>
            <div class="col-12 col-md-4 ">
                <ul class='list-unstyled'>
                    <li class='d-flex justify-content-around'>
                        <img src="<?php base_url()?>assets/images/appstore.jpg" style='width:120px; height:auto;' alt=""/>
                        <img src="<?php base_url()?>assets/images/playStore.jpeg" style='width:120px; height:auto;' alt=""/>
                    </li>
                    <li class='d-flex justify-content-around mt-2 align-items-center'>
                        <img src="<?php base_url()?>assets/images/insta.png"  alt=""/>
                        <img src="<?php base_url()?>assets/images/facebook.png"  alt=""/>
                        <img src="<?php base_url()?>assets/images/line.png"  alt=""/>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright text-white" style="background:#046265">
            <p class='text-center mb-0'> Copyright 2022 | GBtech</p>
        </div>
    </footer>
<?php $this->load->view('layout/js');?>
<script>var baseURL = '<?=base_url()?>';</script>

