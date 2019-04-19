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
  <title>Foody</title>
  <style type="text/css">
    .a1 {
            text-decoration: none !important;
        }

    .a1:hover {
            color: limegreen;
        }

    @media only screen and (min-width: 320px) and (max-width: 467px){
          .btn1{
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 2px;
           }
           .btn2{
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 2px;
           }
           .btn3{
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 2px;
           }
           .btn4{
            padding: 5px 10px;
            font-size: 16px;
            margin-top: 2px;
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
  <a class="navbar-brand" href="<?php echo base_url('Welcome/admin_dash'); ?>">Foody</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Restaurant/my_restaurant'); ?>">My Restaurant</a>
      </li>
     
    </ul>
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
  </div>
</nav>
<div class="container-fluid" style="margin-top: 1%;">
<div class="row">
 <?php
  
   foreach($sdata->result() as $row){
   ?>
   <div class="col-md-4">

    <div class="div1">
     <h5 style="text-align: center;">My Restaurant Info



<!-- Button trigger modal -->
<button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Delete My Restaurant
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>   <a class="btn btn-danger" href="<?php echo base_url('Restaurant/restaurant_delete/'.$row->id); ?>">Delete</a>
      </div>
      
    </div>
  </div>
</div>














     </h5>
     <br>
     <?php
      foreach($idata->result() as $key){
      ?>
      <img class="img-responsive" style="height: 150px; width: 150px;" src="<?php echo base_url();?>upload/<?php echo $key->name;?>">
      <?php
    }
     ?>
     
     <p class="p1">Restaurant Name : <?php echo $row->resname; ?></p>
     <p class="p1">Restaurant Address : <?php echo $row->resadd; ?></p>
     <p class="p1">Restaurant City : <?php echo $row->rescity; ?></p>
     <p class="p1">Restaurant Tag Line : <?php echo $row->restag; ?></p>
     <p class="p1">Email Address : <?php echo $row->items; ?></p>
    </div>
   </div>
        <div class="col-md-4">
              
             <div class="div2">

              <h5 style="text-align: center;">Edit My Info</h5>
              <br>

              <form method="post" action="<?php echo base_url('Restaurant/restaurant_data_update'); ?>">

          
 
  
  <div class="form-group">

    <input type="text" class="form-control"  name="resadd" value="<?php echo $row->resadd; ?>">
    
  </div>
  <div class="form-group" >
  
    <input type="text" class="form-control" name="rescity" value="<?php echo $row->rescity; ?>">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" name="restag" value="<?php echo $row->restag; ?>">
  </div>
   <div class="form-group" >
  
    <input type="text" class="form-control" name="items" value="<?php echo $row->items; ?>">
  </div>
   
  
  <div class="b1" style="text-align:center;">
   <button type="submit" class="btn btn-primary">Update</button>
   </div>

  
  

</form>
  </div>
          </div>
   <div class="col-md-4">
     <div class="div3">
       <img src="" id="image" style="display:none;" height="150" width="100">
    <h5>Update Your Restaurant Image</h5>
    <br>
    <form  method="post" action="<?php echo site_url('Restaurant/update_restaurant_image');?>" enctype="multipart/form-data">
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