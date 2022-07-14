<?php
require 'conexion.php';

$Key_N = $_GET["Key_N"];
//echo $Key_N;

$sql = "SELECT Key_N, Nombre, num_pasaporte, Real_N, CRC_N, Password_MJP, Fecha_Rad_MJP FROM portugal WHERE Key_N = '$Key_N'";

$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
    <div class="container">
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="Key_N" class="form-label">Key_N</label>
            <input type="text" class="form-control" id="Key_N" name="Key_N" readonly value="<?php echo $row['Key_N']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" readonly value="<?php echo $row['Nombre']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="num_pasaporte" class="form-label"># de pasaporte</label>
            <input type="text" class="form-control" id="num_pasaporte" name="num_pasaporte" readonly value="<?php echo $row['num_pasaporte']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="Real_N" class="form-label">Real_N</label>
            <input type="text" class="form-control" id="Real_N" name="Real_N"  value="<?php echo $row['Real_N']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="CRC_N" class="form-label">CRC_N</label>
            <input type="text" class="form-control" id="CRC_N" name="CRC_N"  value="<?php echo $row['CRC_N']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="Password_MJP" class="form-label">Password_MJP</label>
            <input type="text" class="form-control" id="Password_MJP" name="Password_MJP"  value="<?php echo $row['Password_MJP']; ?>">
            
        </div>
        <div class="mb-3">
            <label for="Fecha_Rad_MJP" class="form-label">Fecha_Rad_MJP</label>
            <input type="date" class="form-control" id="Fecha_Rad_MJP" name="Fecha_Rad_MJP"  value="<?php echo $row['Fecha_Rad_MJP']; ?>">
            
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    </div>
    <br>
    <div class="container">
        <button type="button" class="btn btn-warning" > <a href="index.php">Retroceder</a></button>
    </div>

</body>
</html>