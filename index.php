<?php

require 'conexion.php';

function contador($linea)
{
    require 'conexion.php';
    $sql = "SELECT Fech_Act, count(*) AS contador FROM $linea 
    GROUP BY Fech_Act 
    HAVING COUNT(*)>1;";
    $resultado = $mysqli->query($sql);
    //$num = $resultado->num_rows;

    while ($row = $resultado->fetch_assoc()) {

        echo "<tr><th>" . $row['contador'] . "</th><td>" . $row['Fech_Act'] . "</td></tr>";
    }
}





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

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Portugal</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Key_N</th>
                        <th>Numero de pasaporte</th>
                        <th>Nombre</th>
                        <th>Fecha_Rad_MJP</th>
                    </tr>
                    <?php
                    require 'conexion.php';
                    $sql = "SELECT Key_N, Nombre, num_pasaporte, Fecha_Rad_MJP FROM portugal";
                    $resultado = $mysqli->query($sql);
                    //$num = $resultado->num_rows;                
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['Key_N']; ?></td>
                            <td><?php echo $row['num_pasaporte']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Fecha_Rad_MJP']; ?></td>                            
                            <td>
                                <a href="editar.php?Key_N=<?php echo $row['Key_N'];?>">Editar</a>
                            </td>
                        </tr>    
                        
                        
                    <?php }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>