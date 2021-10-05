<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Document</title>
<?php
    session_start();
     include('connection.php');
     include('includes/header1.php');


    

     ?>
<style>
.hero {
    position: absolute;
    left: 690px;
    top: 420px; 
}
.heros {
    position: absolute;
    left: 690px;
    top: 200px; 
}

.my-center{
        margin: 0 auto;
        width: 550px;
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
              <img src="\LoginAndRegi-form-demo\images\pro.png" class="hero-img">
          </div>
  
          <div class="col-xs-6 text-info margin-right heros">
             <br><h3>AIT : Connecting people and technology</h3>
             We create detailed design documentation for the development and integration <br>of computer systems to meet the needs of businesses.
             <h3> we deliver the best softwares on time and <br>Leveraging tech to drive a better IT experience. </h3>
          </div>
      </div>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-xs-6 text-info">
            <img src="\LoginAndRegi-form-demo\images\cyb.png" width="550px" class="hero">
            <h3>CYBERSECURITY</h3>
            Our services range from strategic advisory to designing and creating <br> cybersecurity policy, standard, and protocol implementation.​
             <h3>AIT IT Solutions and Cybersecurity <br>Consuletency PLC is Certified web and <br>mobile application development<br>, and Digital Marketing<br> company based in Addis Ababa, Ethiopia. </h3>
        </div>
        
        </div>
        </div>
        
<?php
 include('includes/footer.php');
?>
</body>
</html>