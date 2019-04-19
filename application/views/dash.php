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

   
  @media only screen and (max-width: 768px){
           .btn3{ 
            font-size: 16px;
            margin-top: 4px;
           }
           .btn4{
            font-size: 16px;
            margin-top: 3px;
           }
     }
     @media only screen and (min-width: 1024px){
          .btn2{
            font-size: 16px;
            margin-top: 4px;
           }
          .btn3{

            font-size: 16px;
            margin-top: 4px;
           }
           .btn4{
            
            font-size: 16px;
            margin-top: 4px;
           }
     }
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Foody</a>
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
    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('Restaurant/unauth_restaurant_search'); ?>">
      <input class="form-control mr-sm-2" type="search" placeholder="name,area or city" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container-fluid" style="margin-top: 1%;">
  <div class="card-deck" id="cad">

    <?php
    
     foreach ($rdata->result() as $row) {
      $conn = mysqli_connect("localhost","root","","restaurant")
       or die("Could Not Connect With Database");
        $tql = "select s.id, cast(AVG(rating )as decimal(10,1)) FROM addrating,addrestaurant s  WHERE s.id=resid AND s.id='$row->id' " ;
   $tim = mysqli_query($conn,$tql);
            while ($tes = mysqli_fetch_array($tim)) {
       ?>
         <div class="col-lg-3 col-md-6 col-12" style="margin-top: 15px !important;">
       <div class="card" style="">
      <img class="card-img-top" style="height: 250px;" src="<?php echo base_url();?>upload/<?php echo $row->name;?>">
      <div class="card-body">
      <h5 class="card-title"><?php echo $row->resname; ?><span style="float: right;"><?php echo $tes['cast(AVG(rating )as decimal(10,1))']; ?> <i style="color: salmon;" class='fas fa-star'></i></span></h5>
      <p class="card-text"><?php echo $row->restag; ?></p>
      <!-- Button trigger modal -->
<button type="button" class="btn1 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Details
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Restaurant Name : <span style="color: deepskyblue;"><?php echo $row->resname; ?></span></h6>
        <h6>Restaurant Address :<span style="color: deepskyblue;"> <?php echo $row->resadd; ?></span></h6>
        <h6>Restaurant City :<span style="color: deepskyblue;"> <?php echo $row->rescity; ?></span></h6>
      </div>
     
    </div>
  </div>
</div>
   

<!-- Button trigger modal -->
<button type="button" class="btn2 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
  Add rating
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                       <a class="a1" href="<?php echo base_url('Welcome/login'); ?>">
     <i class='far fa-star'></i>
     </a>

                                        <br>

                                        <a class="a1" href="<?php echo base_url('Welcome/login'); ?>">
   <i class='far fa-star'></i>
     <i class='far fa-star'></i>  
     </a>
                                        <br>

                                        <a class="a1" href="<?php echo base_url('Welcome/login'); ?>">
   <i class='far fa-star'></i>
   <i class='far fa-star'></i>
   <i class='far fa-star'></i>                           
    </a>

                                        <br>

                                        <a class="a1" href="<?php echo base_url('Welcome/login'); ?>">
  <i class='far fa-star'></i>
  <i class='far fa-star'></i>
  <i class='far fa-star'></i>
  <i class='far fa-star'></i>
  </a>
                                        <br>

                                        <a class="a1" href="<?php echo base_url('Welcome/login'); ?>">
    <i class='far fa-star'></i>
    <i class='far fa-star'></i>
    <i class='far fa-star'></i>
    <i class='far fa-star'></i>
      <i class='far fa-star'></i>
      </a>
      </div>
      
    </div>
  </div>
</div>

<a class="btn3 btn btn-primary" href="<?php echo base_url('Welcome/login'); ?>">Comments</a>
<button type="button" class="btn4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter5<?php echo $row->id; ?>">
  Items
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter5<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row->resname; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color: deepskyblue; font-size:18px;"><?php echo $row->items; ?></p>
      </div>
     
    </div>
  </div>
</div>

  </div>
  </div>
  </div>
       <?php
     }
}
  ?>

</div>
  

</div>
<div class="pagination" style="margin-left: 45%; margin-top: 1%;">
 <?php echo $this->pagination->create_links(); ?>
  </div>
</body>
</html>