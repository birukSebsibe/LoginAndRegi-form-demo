<?php

session_start();
include "include/header.php" 

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
    <title>AIT home page</title>
    <style>
.hero {
    position: absolute;
    left: 690px;
    top: 430px; 
}

.my-center{
        margin: 0 auto;
        width: 300px;
      }

    </style>
    
</head>
<body>
      <div class="page-header my-center text-info">
<h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to AIT site !!!</h2>
</div>
            <div class="col-xs-6">
               
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-xs-2">
              <img src="img/pro.png" class="hero-img">
          </div>
  
          <div class="col-xs-6">
             <br><h3>AIT : Connecting people and technology</h3>
             We create detailed design documentation for the development and integration <br>of computer systems to meet the needs of businesses.
             <h3> we deliver the best softwares on time and <br>Leveraging tech to drive a better IT experience. </h3>
          </div>
      </div>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-xs-6 text-info">
            <img src="img/cyb.png" width="550px" class="hero">
            <h3>CYBERSECURITY</h3>
            Our services range from strategic advisory to designing and creating <br> cybersecurity policy, standard, and protocol implementation.​
             <h3>AIT IT Solutions and Cybersecurity <br>Consuletency PLC is Certified web and <br>mobile application development<br>, and Digital Marketing<br> company based in Addis Ababa, Ethiopia. </h3>
        </div>
        
        </div>
        </div>
        
<?php
include "include/footer.php" 
?>
</body>
</html>