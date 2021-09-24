<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Document</title>
<?php

     include('./header.php');
     ?>
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
                <a class="nav-link active text-info" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="teammembers.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Team
                </a>
               
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-info" aria-current="page" href="logout.php">sign out</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
</body>
</html>