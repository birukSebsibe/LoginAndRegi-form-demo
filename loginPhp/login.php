<?php
// BARACK php code login page commit
require_once "server/config.php";
require_once "server/s.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AIT Login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <h3 class="text-info"><img src="logo.png" width="90px"  > AIT techworld</h3>
        <div class="row">
          <img
          src="./undraw_Login_re_4vu2.svg"
          class="img-fluid mt-4 mb-3"
          width=400px
          alt="login illustration fron undraw"
        />
      <br>
        <form action="server/s.php" method="post">
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
                <input type="submit" name="login"  class="btn btn-info w-150 my-center"  value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
          <a href="#" class="text-body mx-3 mx-3 mx-3" style="text-decoration: none"
                    >   Forgot password? 😳</a>
        </form>
    </div>    
    </div>
</body>
</html>