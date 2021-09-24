<?php
// BARACK php code login page commit
<<<<<<< yo-branch
require_once "server/config.php";
require_once "server/s.php";
?>

=======
require_once "config.php";
$username = $password = "";
$username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            $_SESSION["username"] = $username;                            
                            header("location:home.html");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
 
>>>>>>> main
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< yo-branch
    <title>AIT Login page</title>
=======
    <title>Login</title>
>>>>>>> main
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
<<<<<<< yo-branch
    .wrapper{ width: 350px; padding: 20px; }
    .my-center{
=======
        .wrapper{ width: 350px; padding: 20px; }
    
      .my-center{
>>>>>>> main
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
<<<<<<< yo-branch
        <form action="server/s.php" method="post">
=======
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
>>>>>>> main
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
<<<<<<< yo-branch
                <input type="submit" name="login"  class="btn btn-info w-150 my-center"  value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
=======
                <input type="submit" class="btn btn-info w-150 my-center"  value="Login">
            </div>
            <p>Don't have an account? <a href="#">Sign up now</a>.</p>
>>>>>>> main
          <a href="#" class="text-body mx-3 mx-3 mx-3" style="text-decoration: none"
                    >   Forgot password? 😳</a>
        </form>
    </div>    
    </div>
</body>
</html>