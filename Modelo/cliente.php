<?php
require_once "conexion.php";
  /**
   *
   */
  class Cliente
  {
    private $id_cliente;
    private $nombreCompleto;
    private $telefono;
    private $descripcion;
    private $ci;

    function __construct()
    {
      $this->id_cliente = null;
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


public function listarCliente()
{
  $almacenLista = '';
  try
  {
    $conexion = new Conexion();
    $conexion = $conexion->conectar();
    $query = "SELECT * FROM cliente";
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
        $query = 'INSERT INTO cliente (id_cliente, nombreCompleto, telefono, descripcion, ci)
                  VALUES (:id_cliente, :nombreCompleto, :telefono, :descripcion, :ci)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_cliente', $this->id_cliente);
        $preparar->bindValue(':nombreCompleto', $this->nombreCompleto);
        $preparar->bindValue(':telefono', $this->telefono);
        $preparar->bindValue(':descripcion', $this->descripcion);
        $preparar->bindValue(':ci', $this->ci);


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
        $query = 'DELETE FROM cliente WHERE id_cliente = :id_cliente';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_cliente', $this->id_cliente);

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
