<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sukaii</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
        <link rel="stylesheet" href="">
        <!-- box icons link  -->
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    </head>
	<?php $this->load->view("layout/header"); ?>
<body class="bodyColor">
    <div class="row">
        <div class="col-12 col-md-6 ">
            <div class="d-flex  align-items-center py-3">
                <a href="<?php echo base_url(); ?>assets/BookingProcess.html">    <span class="mr-3 " style="font-size: x-large; color: #00B3B7;"><i
                    class="fa-solid fa-left-long"></i></span></a>
                <h5 class="rubicFont mb-0">Order Summary</h5>
            </div>
            <table class="table">
                
                <tbody>
                  <tr>
                    <td>Basic Health Check up</td>
                    <td>THB 3000</td>
                  </tr>
                  <tr>
                    <td >Conveniences & Services</td>
                    <td>THB 0</td>
                  </tr>
                  <tr>
                    <th >Total Amount</th>
                    <th>THB 3000</th>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col-12 col-md-6 " style="background: #C0ECED;
        box-shadow: -4px 0px 8px rgba(0, 0, 0, 0.25);">
            <div class="card bg-transparent border-0">
                <div class="card-header pb-0 bg-transparent" >
                   <h5 class="rubicFont"> Choose Payment method</h5>
                </div>
                <div class="card-body">
                    <div class="bg-white border mb-2 w-100 rounded text-dark py-2 px-3" style="cursor: pointer;" id="CreditCard">
                        <p class="mb-0 fw500">Credit Card</p>  
                    </div>
                    <form action="" id="CCCard" style="display:none;">
                        <div class="form-group">
                            <label for="">Card number</label>
                        <input type="text" class="form-control py-1" placeholder="XXXX XXXX XXXX XXXX" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                        <input type="text" class="form-control py-1" placeholder="EX. John Williams" name="" id="">
                        </div>
                        <div class="">
                            <div class="form-group">
                                <label for="">Expiry date</label>
                        <input type="text" class="form-control py-1" placeholder="MM/ YY" name="" id="">
                            </div>
                            <div class="form-group">
                                <label for="">CVV</label>
                        <input type="text" class="form-control py-1" placeholder="***" name="" id="">
                            </div>
                        </div>
                       
                        
                    </form>
                    <div class="">

                        
                    </div>
                    <div class="bg-white border mb-2  w-100 rounded text-dark py-2 px-3" style="cursor: pointer;" id="PromptPay" >
                        <p class="mb-0 fw500">PromptPay</p>  
                    </div>
                    <div class="bg-white border mb-2 w-100 rounded text-dark py-2 px-3" style="cursor: pointer;" id="BankTransfer" >
                        <p class="mb-0 fw500">Bank Transfer</p>  
                    </div>
                    <div class="mt-5 text-center">
                        <button type="button" class="btn px-3 btn-sm AddmemberBtn text-white">Pay</button>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // $("#CreditCard").click(function(){
    //     console.log('coll function');
    //     $("PromptPay").slideToggle();
    //     $("BankTransfer").toggle();
    // });
    $("#CreditCard").click(function(){
        $("#CreditCard").toggleClass("themeBlueBg bg-white")
        $("#PromptPay").toggleClass("mt-5")
        $("#CCCard").toggle();
       
    });

</script>
</html>
