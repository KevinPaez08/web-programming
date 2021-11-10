<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
require 'empleado.php';

$newEmployee = new empleado();
$newEmployee->setNombre('kevin');
$newEmployee->setSueldo(5000);
echo "Su nombre es: " . $newEmployee->getNombre();
echo "<br>";
echo "Su sueldo es: " . $newEmployee->getSueldo();

?>


</body>

</html>