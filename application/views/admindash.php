<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Foddy</title>
  <style type="text/css">
    .c11{
        margin-top: 5%;
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

    $use = ($this->session->userdata('username') && $this->session->userdata('level')==2);

    if($use){

    }

else{
  redirect('Welcome/login');
}
?>
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="<?php echo base_url('Welcome/admin_dash'); ?>">Foddy</a>
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

<div class="c11 container">
     <div class="alert alert-danger" role="alert">
 If you dont't add your restaurant image, your restaurant don't show in user view!
</div>
<br>
      <div class="row">
     
          <div class="col-md-6" style="border-right: 1px solid deepskyblue; margin: 0 auto;">
              


              <form method="post" action="<?php echo base_url('Restaurant/add_restaurant'); ?>">

  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Restaurant Name" name="resname">
    
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Restaurant Address" name="resadd">
    
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Restaurant City" name="rescity">
    
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Restaurant Tag Line" name="restag">
    
  </div>
    <div class="form-group">

    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Restaurant Items(use , for multiple items add)" name="items[]">
    
  </div>

 <br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

          </div>

          <div class="col-md-6">
          	<img src="" id="image" style="display:none;" height="150" width="100">
    <label>Insert Your Restaurant Image</label>
    <br>
    <form method="post" action="<?php echo site_url('Restaurant/img_upload');?>" enctype="multipart/form-data">
    <input name="img" onchange="showImage.call(this)" type="file"/>
    <button type="submit" class="btn btn-primary">Save</button>
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
  </div>


</body>
</html>