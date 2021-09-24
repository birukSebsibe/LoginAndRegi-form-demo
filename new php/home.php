<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
.hero {
    position: absolute;
    left: 650px;
    top: 350px;
    
}
footer {
  display: block;
  margin-bottom: auto;
  background-color: rgb(113, 127, 140);
  margin-left: 0px;
  margin-top: 20px;
  width: 1350px;
  text-align: center;
}
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light  ">
        <div class="container-fluid  ">
        
          <img src="logo.png" alt="" width="120" height="100" class="d-inline-block align-text-top navbar-brand text-info">
          <div class=" text-black">
          AIT techworld 
        </a>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-info" aria-current="page" href="#">Home</a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link text-info" href="login.php">logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>


    
    
            <div class="col-xs-6">
               
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-xs-2">
              <img src="pro.png" class="hero-img">
              
          </div>
  
          <div class="col-xs-6">
             <br><h3>AIT : welcome to the home page</h3>
             We create detailed design documentation for the development and integration <br>of computer systems to meet the needs of businesses.
             <h3> we deliver the best softwares on time and <br>Leveraging tech to drive a better IT experience. </h3>
          </div>
      </div>
  </div>



  <div class="container">
    <div class="row">
        <div class="col-xs-6 text-info">
            <img src="cyb.png" width="550px" class="hero">
            <h3>CYBERSECURITY</h3>
            Our services range from strategic advisory to designing and creating <br> cybersecurity policy, standard, and protocol implementation.​
             <h3>AIT IT Solutions and Cybersecurity <br>Consuletency PLC is Certified web and <br>mobile application development, and Digital Marketing<br> company based in Addis Ababa, Ethiopia. </h3>
        </div>
        
        </div>
        </div>
        <footer>
          <p>developer: yo softwares<br>
          </p>
          <a href="https://aittechworld.com">AITtechworld.com</a>
        </footer>

</body>
</html>

<?php
}
else{
  header("Location:login.php");
  exit();
}
?>