<!DOCTYPE html>
<html lang="en">
<head>
  
<title>Document</title>
<?php
    session_start();
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
                <a class="nav-link active text-info" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Team
                </a>
                <ul class="dropdown-menu text-info" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">team x</a></li>
                  <li><a class="dropdown-item" href="#">team y</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-info" aria-current="page" href="logout.php">sign out</a>
              </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active text-info" aria-current="page" href="logout.php">delete account</a>
              </li>
          </div>
        </div>
      </nav>
</body>
</html>