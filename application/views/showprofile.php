<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <title>Foddy</title>
  <style type="text/css">
    .a1 {
            text-decoration: none !important;
        }

    .a1:hover {
            color: limegreen;
        }

    @media only screen and (min-width: 375px) and (max-width: 398px){
           .btn1{
            padding: 5px 10px;
            font-size: 16px;
           }
           .btn2{
            padding: 5px 10px;
            font-size: 16px;
           }
           .btn3{
            padding: 5px 10px;
            font-size: 16px;
           }
    }

    .div1{
      border: 1px solid #00b33c;
      padding: 30px 70px;
      
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #00b33c;
      
    }

    .div2{
      border: 1px solid #00b33c;
      padding: 31px 50px;
      
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px deepskyblue;
      
    }

    .div3{
      border: 1px solid #00b33c;
      padding: 138.5px 50px;
      
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px deepskyblue;
      
    }

    .p1{
      color: #008ae6;
      font-size: 16px;
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
  </style>
</head>
<body>
    <?php

    $use = ($this->session->userdata('username'));

    if($use){

    }

else{
  redirect('Welcome/login');
}
?>
   <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="<?php echo base_url('Restaurant/show_restaurant2'); ?>">Foddy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

       <ul class="navbar-nav ml-auto">
       <li class="d1 nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?php echo $this->session->userdata('username'); ?>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url('Welcome/show_profile'); ?>"> Profile</a>
        <a class="dropdown-item" href="<?php echo base_url('Welcome/logout'); ?>">Logout</a>
        
      </div>
    </li>
</ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('Restaurant/restaurant_search'); ?>">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="name,area or city">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container-fluid" style="margin-top: 1%;">
<div class="row">
 <?php
  
   foreach($sdata->result() as $row){
   ?>
   <div class="col-md-4">

    <div class="div1">
     <h5 style="text-align: center;">My Info</h5>
     <br>
     <?php
      foreach($idata->result() as $key){
      ?>
      <img class="img-responsive" style="height: 150px; width: 150px;" src="<?php echo base_url();?>profileimage/<?php echo $key->name;?>">
      <?php
    }
     ?>
     
     <p class="p1">First Name : <?php echo $row->firstname; ?></p>
     <p class="p1">Last name : <?php echo $row->lastname; ?></p>
     <p class="p1">Useranme : <?php echo $row->username; ?></p>
     <p class="p1">Email Address : <?php echo $row->email; ?></p>
    </div>
   </div>
        <div class="col-md-4">
              
             <div class="div2">

              <h5 style="text-align: center;">Edit My Info</h5>
              <br>

              <form method="post" action="<?php echo base_url('Welcome/update_user_info'); ?>">

              <div class="form-group">

    <input type="text" class="form-control" id="exampleInputPassword" placeholder="First Name" name="firstname" value="<?php echo $row->firstname; ?>">
  </div>
  <div class="form-group">
 
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lastname" value="<?php echo $row->lastname; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Username" name="username" value="<?php echo $row->username; ?>">
  </div>
  <div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter Email" name="email" value="<?php echo $row->email; ?>">
    
  </div>
  <div class="form-group" >
  
    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password" value="<?php echo $row->password; ?>">
  </div>
   
  
  <div class="b1" style="text-align:center;">
   <button type="submit" class="btn btn-primary">Signup</button>
   </div>
  </div>
  
  

</form>
          </div>
   <div class="col-md-4">
     <div class="div3">
       <img src="" id="image" style="display:none;" height="150" width="100">
    <h5>Update Your Profile Image</h5>
    <br>
    <form  method="post" action="<?php echo site_url('Welcome/profile_img_upload');?>" enctype="multipart/form-data">
    <input name="img" onchange="showImage.call(this)" type="file"/>
    <br>
    <br>
    <button  type="submit" class="btn btn-primary">Save</button>
    </form>
       <script type="text/javascript">
    
    function showImage(){
        if(this.files && this.files[0]){
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("image");
                image.src = data.target.result;
                image.style.display = "block";
            }
            
            obj.readAsDataURL(this.files[0]);
        }
    }
  </script>
    
     </div>
   </div>
   
   <?php
 }


 ?>
</div>
</div>


    
</body>
</html>