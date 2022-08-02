<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de Productos por categorias</title>
    <link rel="stylesheet" href="styles/Inicio.css">
    <script src="C/jquery-3.6.0.js"></script>
    <script src="M/App.js"></script>
</head>

<body>
    <div class="wrap"> Cacharreria y papeleria del san jose
        <br><br>
        <a href=V/regprod.html><input type=button value="Nuevo Producto"></a>
        <a href=V/regfact.html><input type=button value="Nueva Factura"></a>
    <br>
    <table  border class="table table-striped">
    <tr >
        <td class= "text2">Producto</td>
        <td class= "text2">Valor</td>
</tr>
<?php
require_once ("DB/coneDB.php");
$consulta= "Select * from producto";
$filas=mysqli_query($con, $consulta);
while ($Producto=mysqli_fetch_array($filas))
{
  echo "<tr> <th>" . $Producto["nomprod"] . "</th>";
  echo "<th>" . $Producto["valprod"] . "</th></tr>";
}
?>
</table>
<br>

</body>
</html>