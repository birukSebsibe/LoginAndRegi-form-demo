<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Our Team Section</title>
	<?php
 require_once "header.php";
 
 require_once "header1.php";
  ?>
</head>
<style>
        @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
    /* background: #81c644; */
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 10%;
}


.team{
    
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
   /* background: cyan;  */
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
   color: #8e8b8b;   
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc; 
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  /* background: #fff; */
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}


    </style>
<body>
<div class="mb-6">  
  <h1 class=" text-center my-4 text-info">This is our team</h1>
  <div>

<div class="wrapper">
 
  <div class="team" class=" container-fluid h-custom ">
    <div class="team_member col-md-9 col-lg-6 col-xl-5">
      <div class="team_img">
        <img src=".\mp.png " alt="Team_image">
      </div class="  bg-info ">
      <h3 class="text-info">Biruk Sebsibe </h3>
      <p class="role">programmer</p>
        <p>
      <button type="button" class="btn  btn-floating mb-1" herf="#">
      <i class="bi-twitter" style="font-size: 1.5rem"></i>
      </button>
    
      
      <button type="button" class="btn  btn-floating mb-1" herf="#">
      <i class="bi-facebook " style="font-size: 1.5rem"></i>
      </button>
      
      <button type="button" class="btn btn-floating mb-1" herf="#">
      <i class="bi-telegram " style="font-size: 1.5rem"></i>
      </button>
      </p>
      <p></p>
    </div>
    <div class="team_member col-md-9 col-lg-6 col-xl-5">
      <div class="team_img">
        <img src="\images\fp.png" alt="Team_image">
      </div>
      <h3 class="text-info">Yordanos Tsegaw</h3>
      <p class="role">Tester</p>
      <p>
      <button type="button" class="btn  btn-floating mb-1" herf="#">
      <i class="bi-twitter" style="font-size: 1.5rem"></i>
      </button>
      
      <button type="button" class="btn btn-floating mb-1" herf="#">
      <i class="bi-facebook " style="font-size: 1.5rem"></i>
      </button>
      
      <button type="button" class="btn btn-floating mb-1" herf="#">
      <i class="bi-telegram " style="font-size: 1.5rem"></i>
        </button>
      </p>
      <p></p></div>
    <div class="team_member col-md-9 col-lg-6 col-xl-5">
      <div class="team_img">
        <img src=".\142894585-laptop-female-icon-girl-at-the-computer-flat-style-design.jpg" alt="Team_image">
      </div>
      <h3 class="text-info">Bethelhem Dereje</h3>
      <p class="role">project manager</p>
      <p>
      <button type="button" class="btn btn-floating mb-1" herf="#">
      <i class="bi-twitter" style="font-size: 1.5rem"></i>
      </button>
      
      <a type="button" class="btn btn-floating mb-1" herf="">
      <i class="bi-facebook " style="font-size: 1.5rem" ></i>
</a>
      
      <button type="button" class="btn btn-floating mb-1" herf="#">
      <i class="bi-telegram " style="font-size: 1.5rem"></i>
       </button>
      </p>
      <p></p>
    </div>
  </div>
</div>	

</body>
<?php

include('./footer.php');
?>
</html>
