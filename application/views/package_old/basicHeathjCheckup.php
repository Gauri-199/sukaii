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

    <div class="row mx-0 latoFont">
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
        <div class="col-12 col-md-8">
            <div class="d-none d-md-block">
                <div class="row mx-0 border align-items-center" style='background:#C0ECED;'>
                    <div class="col-3">
                        <img src="<?php echo base_url(); ?>assets/images/BASIC-HEALTH-CHECK-UP-.png" class='w-100' alt="" />

                    </div>
                    <div class="col-6">
                        <h4 style="font-weight:500" class="rubicFont nameHeading">BASIC HEALTH CHECK UP</h4>
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-end">
                        <Button class='text-dark btn btn-block'><b class="priceCode">THB 6500</b></Button>
                        <a href="<?php echo base_url('serviceOrder/1482'); ?>" style="text-decoration: none;">
                            <Button class='text-white btn mt-2 btn-block' style='background:#00B3B7'><b>Book
                                    <i class="fa-solid fa-chevron-right"></i>
                                </b></Button></a>
                    </div>
                </div>
            </div>

            <div class="d-block d-md-none ">
                <div class="row mx-0 border align-items-center" style='background:#C0ECED;'>
                    <div class="col-12">
                        <h4 style="font-weight:500" class="h5 mt-3 rubicFont nameHeading">BASIC HEALTH CHECK UP</h4>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo base_url(); ?>assets/images/BASIC-HEALTH-CHECK-UP-.png" class='w-100' alt="" />

                    </div>

                    <div class="col-6 d-flex flex-column justify-content-end">
                        <Button class='text-dark btn btn-block'><b class="priceCode">THB 6500</b></Button>
                        <a href="<?php echo base_url('serviceOrder/1482'); ?>" style="text-decoration: none;">
                            <Button class='text-white btn mt-2 btn-block' style='background:#00B3B7'><b>Book
                                    <i class="fa-solid fa-chevron-right"></i>
                                </b></Button></a>
                    </div>
                </div>
            </div>
            <div class="row py-5 packDiscribe">
                <div class="col-12 col-md-7">
                    <p style=" line-height:31px">Sukaii Basic Health Check is a thorough health check via a blood sample that covers all vital body functions and organs.
                        This test is recommended annually for all healthy adults and more regularly for those with underlying concerns </p>
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
                                <td>: Advised for all adults</td>

                            </tr>
                        </tbody>
                    </Table>
                </div>
                <div class="col-12 w-100 ">
                    <div class="d-flex align-items-center mt-3">
                        <p class="mr-3 mb-0">Include : 40+ Parameters</p>
                        <div class="details_btn">
                            <button type="button" id="BasicHealthCheckupShow" class="btn detalsBtn text-white btn-sm" style="border-radius: 6px;">View Details <span class="ml-1"><i class="fa-solid fa-chevron-down"></i></span></button>
                            <button type="button" id="BasicHealthCheckupHide" class="btn btn-secondary btn-sm" style="border-radius: 6px; display: none;">Close Details <span class="ml-1"><i class="fa-solid fa-xmark"></i></span></button>
                        </div>
                    </div>
                    <div class="mt-4 show_services" id="BasicHealthCheckup" style="display: none;">
                        <h6><small class="font-weight-bold sukaii_pink_color mb-2">Sukaii Basic Health Check Package Includes :</small></h6>
                        <div class="row border border-dark border-bottom-0 sukaii_pink_bgcolor ">
                            <div class="col-8 border border-dark py-1"></div>
                            <div class="col-4 border border-dark text-center text-light small py-1" style="font-family: var(--primaryText);">Basic</div>
                        </div>
                        <div class="row sukaii_green_bgcolor text-light">
                            <div class="col-8 border border-dark font-weight-bold small py-1">PRICE</div>
                            <div class="col-4 border border-dark font-weight-bold text-center small py-1">THB 3000</div>
                        </div>
                        <div class="row ">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Complete Blood Count</div>
                            <div class="col-4 border border-dark py-1 small text-center">Basic</div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Haemoglobin</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">PCV</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">MCV</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">MCH</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">MCHC</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Platelet Count</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">TWBC</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Differential Count</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Total RBC</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText); "> ESR (Sedimentation Rate)</div>
                            <div class="col-4 border border-dark py-1 small text-center"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Blood Group</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">ABO </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Rhesus</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Diabetes</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Glucose</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Kidney Function</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Urea</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Creatinine</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Uric Acid </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">eGFR</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Sodium</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Potassium</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Chloride</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Bicarbonate</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Calcium</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Inorganic Phosphate</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Liver Function</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Total Protein</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Albumin</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Globulin </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">A/G Ratio </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Total Bilirubin</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">ALK</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">SGOT</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">SGPT</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">GGT</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Lipid Profile</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Total Cholestrol </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">HDL</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">LDL </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Triglycerides </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Total / HDL Ratio</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Thyroid</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">T4 </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">TSH</div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Arthritis</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">LDL </div>
                            <div class="col-4 border border-dark text-center py-1"><i class="fa-solid fa-xmark"></i></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Cancer Markers</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Liver Cancer (AFP) </div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Gastrointestinal (CEA) </div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Prostate (PSA) </div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Ovarian (CA-125) </div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Gastroint. Hepa. (CA19-9)</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">CA15-3</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">H Pylori IgG</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Urine Analysis</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Syphilis</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">VDRL</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Hepatitis B</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">HBs Ab</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">HBs Ag</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Hepatitis A</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">HAV IgG</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);"> Hepatitis C</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>
                        <div class="row ">
                            <div class="col-8 border border-dark small py-1">Anti-HCV</div>
                            <div class="col-4 border border-dark text-center py-1"></div>
                        </div>
                        <div class="row " style="background-color: var(--iconbgColor);">
                            <div class="border border-dark col-8 font-weight-bold small sukaii_pink_color py-1 " style="font-family: var(--primaryText);">HIV</div>
                            <div class="col-4 border border-dark py-1 small text-center"></div>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- <?php include_once('<?php echo base_url(); ?>assets/footer.html') ?> -->
    <!-- <div id="footer"></div>  -->
</body>
<script>
    $("#BasicHealthCheckupShow").click(function() {
        $("#BasicHealthCheckup").slideDown();
        $("#BasicHealthCheckupHide").show();
        $(this).hide();
    });
    $("#BasicHealthCheckupHide").click(function() {
        $("#BasicHealthCheckup").slideUp();
        $(this).hide();
        $("#BasicHealthCheckupShow").show();
    });
</script>

</html>
