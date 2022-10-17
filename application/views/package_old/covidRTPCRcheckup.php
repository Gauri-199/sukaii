<!DOCTYPE html>
<html lang="en">

<!-- <head>
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

</head> -->

<body>
	<?php $this->load->view("layout/header"); ?>

    <div class="row mx-0">
        <div class="col-4 d-none d-md-block">
            <div class="d-flex align-items-center">
                <img src="<?php echo base_url(); ?>assets/images/SCAH.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative" style="left: -19px; z-index: -1;">Sample Collection at home</div>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo base_url(); ?>assets/images/SSHM.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative" style="left: -19px; z-index: -1;">Strict safety & Hygiene measures</div>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo base_url(); ?>assets/images/Report.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative" style="left: -19px; z-index: -1;">Reports within
                    24 - 48 hours</div>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo base_url(); ?>assets/images/Laboretry.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative" style="left: -19px; z-index: -1;">xxxxx laboratory approved</div>
            </div>
        </div>
        <div class="col-12 col-md-8 latoFont">
            <div class="d-none d-md-block">
                <div class="row mx-0 border align-items-center" style='background:#C0ECED;'>
                    <div class="col-3">
                        <img src="<?php echo base_url(); ?>assets/images/Covid-white.png" class='w-100' alt="" />

                    </div>
                    <div class="col-6">
                        <h4 style="font-weight:500" class="rubicFont nameHeading">COVID RT- PCR TEST</h4>
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-end">
                        <Button class='text-dark btn btn-block'><b class="priceCode">THB 6500</b></Button>
                        <a href="<?php echo base_url('BookingProcess'); ?>" style=" text-decoration: none;">
                            <Button class='text-white btn mt-2 btn-block' style='background:#00B3B7;'><b>Book
                                    <i class="fa-solid fa-chevron-right"></i>
                                </b></Button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-bolck d-md-none">
                <div class="row mx-0 border align-items-center" style='background:#C0ECED;'>
                    <div class="col-12">
                        <h4 style="font-weight:500" class="rubicFont nameHeading">COVID RT- PCR TEST</h4>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo base_url(); ?>assets/images/Covid-white.png" class='w-100' alt="" />
                    </div>

                    <div class="col-6 d-flex flex-column justify-content-end">
                        <Button class='text-dark btn btn-block'><b class="priceCode">THB 6500</b></Button>
                        <a href="<?php echo base_url('BookingProcess'); ?>" style=" text-decoration: none;">
                            <Button class='text-white btn mt-2 btn-block' style='background:#00B3B7;'><b>Book
                                    <i class="fa-solid fa-chevron-right"></i>
                                </b></Button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row py-5 packDiscribe">
                <div class="col-12 col-md-7">
                    <p style=" line-height:31px">Our RT-PCR test is one of the most accurate tests for Covid-19 and recommended for anyone who suspects they may have Covid-19 or been exposed to a Covid-19 positive person. It can also be used for official purposes where a Covid-19 test certificate is required.</p>
                </div>
                <div class="col-md-5 col-12">
                    <Table hover>

                        <tbody>
                            <tr>
                                <th>Sample Type</th>
                                <td>: Blood</td>

                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>: All</td>

                            </tr>
                            <tr>
                                <th>Age Group</th>
                                <td>: All </td>

                            </tr>
                        </tbody>
                    </Table>
                </div>
            </div>
        </div>
    </div>


    <!-- <?php include_once('<?php echo base_url(); ?>assets/footer.html') ?> -->
</body>

</html>
