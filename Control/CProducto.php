<?php

include 'Connection.php';
include '../modelo/Producto.php';

class CProducto extends Connection{
    
    function __construct() {
        parent::__construct();
    }
    
    public function insertar($producto) {
        //Crea la sentencia/query
        $sentencia = $this->conn->prepare("INSERT INTO producto VALUES(?, ?, ?, ?);");
        
        $id = $producto->getId();
        $nombre = $producto->getNombre();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        
        //bindea el query con los datos del formulario
        $sentencia->bind_param("isdi", 
                $id, $nombre, $precio, $cantidad);
        
        $sentencia->execute();
    }
    
    public function consultar($id) {
       return null;
    }

    public function consultarTodos() {
        $sentencia = $this->conn->prepare("SELECT * FROM producto;");
        
        mysqli_stmt_execute($sentencia);
        
        mysqli_stmt_bind_result($sentencia,$col0,$col1,$col2,$col3);
        
        echo '<table>
        <tr>
            <td>Id</td>
            <td>Nombre Producto</td>
            <td>Precio Producto</td>
            <td>Cantidad Producto</td>
        </tr>';
        
       // fetch values
        while (mysqli_stmt_fetch($sentencia)) {
            echo "     <tr>
            <td>{$col0}</td>
            <td>{$col1}</td>
            <td>{$col2}</td>
            <td>{$col3}</td>
        </tr> ";
        }
        // close the table
    echo '</table>';
            /*
        $s = array('data' => array());
        while ($reg=mysqli_fetch_array($sentencia))
        {
            array_push($s['data'],
            array($reg['id'],$reg['nombreProducto'],$reg['precioProducto'],$reg['cantidadProducto']));
        }*/
        
    }
    
    public function eliminar($id) {
        return false;
    }
    
    public function actualizar($id, $obj) {
        return false;
    }
}
/*
$producto = new Producto();
$producto->setId($_POST['idProducto']);
$producto->setNombre($_POST['nombreProducto']);
$producto->setPrecio($_POST['precioProducto']);
$producto->setCantidad($_POST['cantidadProducto']);

$cProducto->insertar($producto);
$cProducto = new CProducto();

header("Location: ../Admin.php");*/