<?php
// Include config file
require_once "C:\bee xammp\htdocs\LoginAndRegi-form-demo\includes\connection.php";
require_once "C:\bee xammp\htdocs\LoginAndRegi-form-demo\server\s.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AIT Sign Up page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
        <h3 class="text-info"><img src="\LoginAndRegi-form-demo\images\logo.png" width="90px"  > AIT techworld</h3>
       
 <div class="row">
          
        <div class=" my-center"> 
        <img
          src="\LoginAndRegi-form-demo\images\imge.svg"
          width="350px"
          class="img-fluid mt-4 mb-3 "
          alt="login illustration fron undraw"
        /> 
         <div class="wrapper text-info md-4">
        <h2>Sign Up page</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>   
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="s" class="btn btn-primary" value="Submit">
                <input type="reset" name="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</div>
</body>
</html>