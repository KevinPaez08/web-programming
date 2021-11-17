<?php
require_once '../models/LoginModel.php';

$consult = new LoginModel();

$usuarios = $consult->readUser();
// var_dump($usuarios);

// echo "Hola mundo";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Dashboard</title>
</head>

<body>

  <div class="container">
    <h1>Hola</h1>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
        <?php
foreach ($usuarios as $usuario) {
    ?>
        <tr>
          <th scope="row"><?php echo $usuario['id']; ?></th>
          <td><?php echo $usuario['username']; ?></td>
          <td><?php echo $usuario['password']; ?></td>
          <td><a href="../controllers/loginController-delete.php?id=<?php echo $usuario['id']; ?>" type="button"
              class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php
}?>

      </tbody>
    </table>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

</body>

</html>