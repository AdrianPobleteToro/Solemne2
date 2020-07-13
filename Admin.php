<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='Control/CProducto.php' method="POST">
            <input type='number' name='idProducto' placeholder="ID"/>
            <input type='text' name='nombreProducto' placeholder="nombre del producto"/>
            <input type='number' name='precioProducto' placeholder="precio del producto"/>
            <input type='number' name='cantidadProducto' placeholder="cantidad del producto"/>
            <input type='submit' value='Agregar producto'/>
        </form>
    </body>
</html>
