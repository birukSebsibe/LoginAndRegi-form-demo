<html>
    <head>
        <title>User Login</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        
    </head>
    <body
    background="./img.jpg"
    style="background-repeat: no-repeat; background-size: 100%" >
        <div class="container -md w-75 mt-4 justify-content-center"
         >
            <div class="row">
                <div class="col-md-6">
                    <h2> Login here </h2>
                    <form action="validlogin.php" method="post">
                        <div class="form-group">
                            <label>username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button ype="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>

</body>
</html>