<?php
// BARACK php code login page commit
require_once "C:\bee xammp\htdocs\LoginAndRegi-form-demo\includes\connection.php";
require_once "C:\bee xammp\htdocs\LoginAndRegi-form-demo\server\s.php";
?>
 

<html lang="en">
<head>
   
    <style type="text/css">
        body{ font: 14px sans-serif; }
    .wrapper{ width: 350px; padding: 20px; }
    .my-center{
        margin: 0 auto;
        width: 300px;
      }

    </style>
</head>
<body>
    <div class=" my-center">  
    <div class="wrapper">
    <h3 class="text-info"><img src="\LoginAndRegi-form-demo\images\logo.png" width="90px"  > AIT techworld</h3>
        <div class="row">
          <img
          src="\LoginAndRegi-form-demo\images\undraw_Login_re_4vu2.svg"
          class="img-fluid mt-4 mb-3"
          width=400px
          alt="login illustration fron undraw"
        />
      <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="User name" aria-label="First name" class="form-control " value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password"  class="form-control" aria-label="Password"  placeholder="Password"   name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info w-150 my-center" name="login" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
          <a href="#" class="text-body mx-3 mx-3 mx-3" style="text-decoration: none"
                    >   Forgot password? 😳</a>
        </form>
    </div>    
    </div>
</body>
</html>