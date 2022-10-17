<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukaii-Login</title>
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/style.css"> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <style>
        .register a {
            color: #ea088b;
            ;
        }
        
       
        
        .register_btn button {
            background-color: #949090;
        }
    </style>
</head>

<body>
        <?php include_once('./header.php')?>
<div class="container-fluid loginBgImage">
        <div class="row">
            <div class="col-md-5 mx-auto my-4" style="background: #C0ECED;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 8px;">
            <!-- <div class="col-md-10"> -->
                <div class="login_form w-75 mx-auto">
                    <form action="" method="post">
                    <div class="logo text-center mb-1">
                        <img src="./images/sukaii_logo.PNG" alt="" width="22%" class="">
                    </div>
                    <h4 class="text-center rubicFont mb-4" style="font-family: 'Rubik', sans-serif !important; font-weight: 600;">REGISTRATION</h4>
                    <div class="username d-flex">
                        <div class="fname mr-1">
                            <label for="" class="username_lable mb-1"><h6 class="mb-0 pl-1">First Name</h6></label>
                        <input type="text" class="user_name form-control mb-2">
                        </div>
                        <div class="lname ml-1">
                            <label for="" class="username_lable mb-1"><h6 class="mb-0 pl-1">Last Name</h6></label>
                        <input type="text" class="user_name form-control mb-2">
                        </div>
                        
                    </div>
                    <div class="email">
                        <label for="" class="email_lable mb-1"><h6 class="mb-0 pl-1">Email</h6></label>
                        <input type="email" class="form-control email mb-2">
                    </div>
                    <div class="password">
                        <label for="" class="password_lable mb-1"><h6 class="mb-0 pl-1">Password</h6></label>
                        <input type="text" class="password_input form-control mb-2">
                    </div>
                    <div class="contact ">
                        <label for="" class="contact_lable mb-1"><h6 class="mb-0 pl-1">Contact</h6></label>
                        <input type="number" class="form-control contact mb-2">
                    </div>
                    <div class="address mb-3">
                        <h6 class="mb-0">ADDRESS <span><button type="button" class="btn btn-sm address_btn mb-1 ml-2" onclick="load_data()">Address <span><i class="fas fa-map-marker-alt pl-2"></i></span></button>
                            </span>
                        </h6>
                        <textarea name="address1" id="address1" class="form-control" cols="10" rows="2"></textarea>
                        <div class="">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn px-3 btn-sm register text-white mb-2" style="font-weight:500;">Register</button>
                    </div>
                    <div class="login_link">
                        <p class="text-center"> Already Registered <a href="./login_page.html"><b class='login'>LOGIN</b></a> here</p>
                    </div>
                </form>
                </div>
            
            </div>
           
        </div>
      <?php include_once('./footer.php')?>
    </div>
</body>


</html>