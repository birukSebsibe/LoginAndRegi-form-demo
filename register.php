<!DOCTYPE html>
<!-- My fist commit on  mike branch -->
<html lang="en">
  <head>
    

    <title>Registeration</title>
    <?php include('./header.php')?>
    <!-- betty -->
  </head>
  <body
    background="./img.jpg"
    style="background-repeat: no-repeat; background-size: 100%">
  
    <div class="container -md w-75 mt-4 justify-content-center">
      
      <h3 class="text-primary">Registeration Form</h3>
      <div class="input-group mb-3 w-50">
      <div class="box border border danger rounded-pill"></div>
        <span class="input-group-text bg-primary" id="basic-addon1"></span>
        <input
          type="text"
          class="form-control"
          placeholder="first name"
          aria-label="firstname"
          aria-describedby="basic-addon1"
        />
      </div><div class="input-group mb-3 w-50">
        <span class="input-group-text bg-info" id="basic-addon1"></span>
        <input
          type="text"
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
          class="form-control"
          placeholder="Password"
          aria-label="Password"
          aria-describedby="basic-addon1"
        />
      </div>

      <div class="input-group mb-3 w-50">
        <span class="input-group-text bg-info" id="basic-addon12"></span>
        <input
          type="password"
          class="form-control"
          placeholder="Comfrim Password"
          aria-label="Password"
          aria-describedby="basic-addon1"
        />
      </div>
      <div class="input-group mb-3 w-50">
        <span class="input-group-text bg-info" id="basic-addon13"></span>
        <input
          type="email"
          class="form-control"
          placeholder="Email@email.com"
          aria-label="Username"
          aria-describedby="basic-addon1"
        />
       
      
      </div>

      <div class="input-group mb-3 w-50">
        <span class="input-group-text bg-info" id="basic-addon14"></span>
        <select
          class="form-select form-select-sm w-50"
          aria-label=".form-select-sm example"
        >
          <option selected>Select your Gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
      </div>
      <br />
      <button type="button" class="btn btn-outline-info w-50">
        Register
      </button>

      <br />

      <a
        href="login.php"
        class="link-info fw-bold mb-3"
        style="text-decoration: none"
        >I have an account!
      </a>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
