<?php

require 'conexion.php';

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

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                        <th>Real_N</th>
                        <th>CRC_N</th>
                        <th>Password_MJP</th>
                        <th>Fecha_Rad_MJP</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    //require 'conexion.php';
                    $sql = "SELECT Key_N, Nombre, num_pasaporte, Real_N, CRC_N, Password_MJP, Fecha_Rad_MJP FROM portugal";
                    $resultado = $mysqli->query($sql);
                    //$num = $resultado->num_rows;                
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['Key_N']; ?></td>
                            <td><?php echo $row['num_pasaporte']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Real_N']; ?></td>
                            <td><?php echo $row['CRC_N']; ?></td>
                            <td><?php echo $row['Password_MJP']; ?></td>
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

<script>

    var tabla = document.querySelector("#dataTable");



    var datatable = new DataTable(tabla,{
        perPage:25,
        perPageSelect:[5,10,15,25,50,100,1000]
    });

</script>

</html>