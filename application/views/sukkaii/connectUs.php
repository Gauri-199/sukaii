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
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">
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
<?php include_once('./header.php')?>

    <div class="row mx-0 ">
        <div class="col-4 d-none d-md-block">
            <div class="d-flex align-items-center">
                <img src="./images/whatsappcolor.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative"
                    style="left: -19px; z-index: -1;">Whatsapp</div>
            </div>
            <div class="d-flex align-items-center">
                <img src="./images/linecolor.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative"
                    style="left: -19px; z-index: -1;">Line</div>
            </div>
            <div class="d-flex align-items-center">
                <img src="./images/mailcolor.png" alt="">
                <div class="w-100 border rounded bg-secondary text-white font-weight-bold py-3 pl-4 pr-2 position-relative"
                    style="left: -19px; z-index: -1;">Mail</div>
            </div>
            
            <div class="pl-5 mt-3">
                <h6>Follow Us</h6>
            <div class="">
                <span><img src="./images/instaColorIcon.png" class="mr-3" alt=""></span>
                <span><img src="./images/facebookColorIcon.png" alt=""></span>
            </div>
            </div>

        </div>
        <div class="col-12 col-md-8">
            <div class="connectUs h-100 latoFont " style="background-position:right;">
                <h5 class="text-center py-4 ">We would request you to write your query or concern with us?</h5>
                <input type="email" class="form-control w-75 py-1 mx-auto" placeholder="Email id">
                <textarea name="Comment" class="form-control w-75 mx-auto mt-4" placeholder="Write your concern here..." id="" cols="30" rows="10"></textarea>
                <div class="text-center">
                <button type="button" class="btn mt-5 my-3 btn-sm AddmemberBtn text-white">Add Member</button>

                </div>
            </div>
           
        </div>
    </div>


    <?php include_once('./footer.php')?>
    <!-- <div id="footer"></div>  -->
</body>
<script>
    
    $("#completeHealthCheckupShow").click(function() {
        $("#completeHealthCheckup").slideDown();
        $("#completeHealthCheckupHide").show();
        $(this).hide();
    });
    $("#completeHealthCheckupHide").click(function() {
        $("#completeHealthCheckup").slideUp();
        $(this).hide();
        $("#completeHealthCheckupShow").show();
    });
</script>
</html>