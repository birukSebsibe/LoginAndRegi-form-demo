<!DOCTYPE html>

<html lang="en">
  <head>
    

    <title>Registeration</title>
    <?php 
    include('./header.php');
    include('./functions.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $email= $_POST['email'];
      

      
      if(!empty($user_name) && !empty($firstname) && !empty($lastname) && !empty($password) && !is_numeric($user_name) && !is_numeric($firstname) && !is_numeric($lastname) )
      {
  
        
        $user_id = random_num(20);
        $query = "insert into login (id,username,firstname,lastname,password,email) values ('$user_id','$user_name','$firstname','$lastname','$password,'$email')";
  
        mysqli_query($con, $query);
  
        header("Location: login.php");
        die;
      }
      else
      {
        echo "Please enter some valid information!";
      }
    }
    
    ?>
    <!-- betty -->
  </head>
  <body
    background="./img.jpg"
    style="background-repeat: no-repeat; background-size: 100%">
  
    <div class="container -md w-75 mt-4 justify-content-center">
      
      <h3 class="text-info">Registeration Form</h3>
      <form method="post">
          <div class="input-group mb-3 w-50">
            
            <span class="input-group-text bg-info" id="basic-addon1"></span>
            <input
              type="text"
              name="user_name"
              class="form-control"
              placeholder="username"
              aria-label="username"
              aria-describedby="basic-addon1"
            />
          </div>
          <div class="input-group mb-3 w-50">
         
            <span class="input-group-text bg-info" id="basic-addon1"></span>
            <input
              type="text"
              name="firstname"
              class="form-control"
              placeholder="first name"
              aria-label="firstname"
              aria-describedby="basic-addon1"
            />
          </div>
          <div class="input-group mb-3 w-50">
            <span class="input-group-text bg-info" id="basic-addon1"></span>
            <input
              type="text"
              name="lastname"
              class="form-control"
              placeholder="Last name"
              aria-label="lastname"
              aria-describedby="basic-addon1"
            />
          </div>
          <div class="input-group mb-3 w-50">
            <span class="input-group-text bg-info" id="basic-addon1"></span>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              aria-label="Password"
              aria-describedby="basic-addon1"
            />
          </div>

          
          <div class="input-group mb-3 w-50">
            <span class="input-group-text bg-info" id="basic-addon13"></span>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email@email.com"
              aria-label="Username"
              aria-describedby="basic-addon1"
            />
          
          
          </div>

         
          <br />
          <input type="submit"
                  value="register"
                  class="btn btn-outline-info w-50"
                  id="button"
          />
          
          

          <br />

          <a
            href="login.php"
            class="link-info fw-bold mb-3"
            style="text-decoration: none"
            >I have an account!
          </a>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
