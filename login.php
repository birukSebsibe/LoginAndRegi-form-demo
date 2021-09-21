<!DOCTYPE html>
<html lang="en">
  <head>
   

    <title>AIT Login</title>
    <?php
    session_start();
     include('./header.php');
     if(isset($_POST['username'])){
      $uname=$_POST['username'];
      $password=$_POST['password'];
       $uname=stripcslashes($uname);
       $password=stripcslashes($password);
       
      $uname=mysqli_real_escape_string($con,$uname); 
    
      $password=mysqli_real_escape_string($con,$password ) ;
      $sql="select * from login where USER='$uname' AND PASS='$password' limit 1";
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result)==1
      ){
        echo " successfully loged in";
        $_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
        exit();
      }
      else{
        echo "try again";
        exit();
      }
    }
 

     ?>
  </head>
  <body>
    <body>
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div
            class="
              row
              d-flex
              flex-column
              justify-content-center
              align-items-center
            "
          >
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img
                src="./undraw_Login_re_4vu2.svg"
                class="img-fluid mt-4 mb-3"
                alt="login illustration fron undraw"
              />
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4">
              <form method="post" >
                <h3 class="mb-4 text-secondary">
                  Hello Friend, looks like you have been away, join us and let's
                  be friends!
                </h3>
                <p class="lead fw-normal mb-0 me-3 mb-2">Sign in with</p>
                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="bi-facebook " style="font-size: 1.5rem"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="bi-twitter" style="font-size: 1.5rem"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="bi-linkedin" style="font-size: 1.5rem"></i>
                </button>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <!-- Email input -->
                <div class="form-input mb-2">
                  <label class="form-label" for="form3Example3"
                    >user name</label
                  >
                  <input
                    type="text"
                    name="username"
                   
                    class="form-control form-control-lg rounded-pill"
                    placeholder="Enter username"
                  />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input
                    type="password"
                    name="password"
                   
                    class="form-control form-control-lg rounded-pill"
                    placeholder="Enter password"
                  />
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input
                      class="form-check-input me-2"
                      type="checkbox"
                      value=""
                      id="form2Example3"
                    />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#" class="text-body" style="text-decoration: none"
                    >Forgot password? 😳</a
                  >
                </div>

                <div class="text-center text-lg-start mt-4 pt-2 mb-5">
                  <input
                    type="submit"
                    
                    value="login"
                    class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem"
                  />
                  

                  <p class="small fw-bold mt-2 pt-1 mb-0">
                    Ooops i dont have an account! 😟
                    <a
                      href="register.php"
                      class="link-danger"
                      style="text-decoration: none"
                      >Register</a
                    >
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </body>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
