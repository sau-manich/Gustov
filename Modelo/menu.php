<?php
require_once "conexion.php";
  /**
   *
   */
  class Menu
  {
    private $id_menu;
    private $nombre;
    private $precio;
    private $ingredientePrincipal;
    private $ingredienteSecundario;
    private $ingredienteComplemento;
    private $estado;

    function __construct()
    {
      $this->id_menu = null;
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



    public function getMenu()
    {
      try
      {
        $conexion = new Conexion();
        $conexion = $conexion->conectar();
        $query = 'SELECT * FROM menu';
        $preparar = $conexion->prepare($query);
        $preparar->execute();
        $registro = $preparar->fetchAll();
        return ($registro) ? $registro : null;
      }
      catch (PDOException $e)
      {
        return 'Error';
      }
    }


// ============================= Metodos Listar =============================


public function listarMenu()
{
  $almacenLista = '';
  try
  {
    $conexion = new Conexion();
    $conexion = $conexion->conectar();
    $query = "SELECT * FROM menu";
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
        $query = 'INSERT INTO menu (id_menu, nombre, precio, ingredientePrincipal, ingredienteSecundario, ingredienteComplemento, estado)
                  VALUES (:id_menu, :nombre, :precio, :ingredientePrincipal, :ingredienteSecundario, :ingredienteComplemento, :estado)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_menu', $this->id_menu);
        $preparar->bindValue(':nombre', $this->nombre);
        $preparar->bindValue(':precio', $this->precio);
        $preparar->bindValue(':ingredientePrincipal', $this->ingredientePrincipal);
        $preparar->bindValue(':ingredienteSecundario', $this->ingredienteSecundario);
        $preparar->bindValue(':ingredienteComplemento', $this->ingredienteComplemento);
        $preparar->bindValue(':estado', $this->estado);


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
        $query = 'DELETE FROM menu WHERE id_menu = :id_menu';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_menu', $this->id_menu);

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
