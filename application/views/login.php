<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Foddy</title>
    <style>
    .c1{
        margin-top: 8%;
    }

    .form-control{
        border:none;
        border-bottom: 2px solid green;
        border-radius: 0px;
    }
    .form-control:focus {
  border-color: deepskyblue;
  box-shadow: none;
    }
     .im1{
      text-align: center;
    }
    .img-responsive{
      height: 120px;
      color: deepskyblue;
    }


        @media only screen and (max-width:767px){
            .s2{
                display: none;
            }
        }
    </style>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Foddy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome/login'); ?>">Login</a>
      </li>
     
    </ul>
    
  </div>
</nav>
   


    <div class="c1 container">
      <div class="row">
          <div class="col-md-5" style="margin : 0 auto; border: 1px solid deepskyblue; padding: 30px 30px;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px deepskyblue;">
             
          <div class="im1">
          <img class="img-responsive" src="<?php echo base_url(); ?>images/login2.png">
           <h5>Login</h5>
              <form method="post" action="<?php echo base_url('Welcome/user_login'); ?>">
              


<h4 class="text-danger">
  <?php
     echo   $this->session->flashdata('failed');
  ?>

</h4>'; 
  


    
              
          
      
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Username" name="username">
  </div>
    <?php
                       echo form_error('username','<div id="al" class="alert alert-danger">     <button type="button" class="close" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>',
                          '</div>'); 
                    ?>
  
  <div class="form-group" >
  
    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
  </div>

       <?php
                       echo form_error('password','<div id="al" class="alert alert-danger">     <button type="button" class="close" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                          </button>',
                          '</div>'); 
                    ?>
  
  
  <div class="b1" style="text-align:center;">
   <button type="submit" class="btn btn-primary">Login</button>
  </div>
  <br>
  <label style="float: right;">Are you not registered?<a style="" href="<?php echo base_url('Welcome/signup'); ?>"> Signup</a></label>
  

</form>
          </div>
        </div>
    </div>

     
     <script type="text/javascript">
  $(document).ready(function(){
  $("button").click(function(){
    $("#al").remove();
  });
});
</script>
   
   
</body>
</html>