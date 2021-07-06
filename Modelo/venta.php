<?php
require_once "conexion.php";
  /**
   *
   */
  class Venta
  {
    private $id_venta;
    private $id_usuario;
    private $id_cliente;
    private $precioTotal;

    function __construct()
    {
      $this->id_venta = null;
    }

    public function __get($name)
    {
      if (property_exists($this, $name))
      {
        return $this->$name;
      }
      else
      {
        return "Error al encontrar el atributo {$name}";
      }
    }

    public function __set($name, $valor)
    {
      if (property_exists($this, $name))
      {
        $this->$name = $valor;
      }
      else
      {
        return "Error al encontrar el atributo {$name}";
      }
    }


// ============================= Metodos Listar =============================


public function listarVenta()
{
  $almacenLista = '';
  try
  {
    $conexion = new Conexion();
    $conexion = $conexion->conectar();
    $query = "SELECT * FROM venta";
    $preparar = $conexion->prepare($query);
    $preparar->execute();
    $almacenLista = $preparar->fetchAll();
  }
  catch (PDOException $e)
  {

  }
  return $almacenLista;
}


// ============================= Metodos Guardar =============================


    public function guardar()
    {
      try
      {
        $conexion = new Conexion();
        $conexion = $conexion->conectar();
        $query = 'INSERT INTO venta (id_venta, id_usuario, id_cliente, precioTotal)
                  VALUES (:id_venta, :id_usuario, :id_cliente, :precioTotal)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_venta', $this->id_venta);
        $preparar->bindValue(':id_usuario', $this->id_usuario);
        $preparar->bindValue(':id_cliente', $this->id_cliente);
        $preparar->bindValue(':precioTotal', $this->precioTotal);
        $preparar->execute();
        return 'Exito al guardar';
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }


    }


// ============================= Metodos Eliminar =============================


    public function eliminar()
    {
      try
      {
        $conexion = new Conexion();

        $conexion = $conexion->conectar();
        $query = 'DELETE FROM venta WHERE id_venta = :id_venta';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_venta', $this->id_venta);

        $preparar->execute();

        return null;
      }
      catch (PDOException $e)
      {
        return 'Error al eliminar';
      }
    }
  }

?>
