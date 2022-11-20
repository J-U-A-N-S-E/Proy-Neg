<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/ADM.css">


    <title>Document</title>
</head>
<body>
    <header>
<img class="IMGSJ" src="../IMG/San Jose.png"  >
    <div class="Titulo">
        Cacharreria y papeleria del san jose
    </div>
    
    <a href="regprod.html" class="BotonS">Nuevo Producto</a>
    <a href="regfact.html" class="BotonS">Nueva Factura</a>
    </header>
    <table border class="table table-striped">
        <tr>
            <td class="text2">Producto</td>
            <td class="text2">Valor</td>
        </tr>
    <?php
    require_once ("../DB/coneDB.php");
    $consulta= "Select * from producto";
    $filas=mysqli_query($conexion, $consulta);
    while ($Producto=mysqli_fetch_array($filas))
    {
      echo "<tr> <th>" . $Producto["nomprod"] . "</th>";
      echo "<th>" . $Producto["valprod"] . "</th></tr>";
    }
    ?>
    </table>
</body>
</html>
