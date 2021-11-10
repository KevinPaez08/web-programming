<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <!-- *----------- HEAD ------- -->
  <div class="container">
    <div class="card mt-4">
      <div class="card-title">
        <h1 class="text-center text-danger">Elite Login Form</h1>
      </div>
      <div class="card-body p-5 bg-light">
        <form method="post" action="./controllers/loginController.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username:</label>
            <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              required>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-sm-8 col-md-9">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
              </div>
              <div class="col">
                <a href="#" class="text-end text-secondary">Forgot Password?</a>
              </div>
            </div>
            <input type="password" name="pass" class="form-control mt-1" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Show Password</label>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger">Login</button>
          </div>
        </form>
      </div>
    </div>


  </div>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>