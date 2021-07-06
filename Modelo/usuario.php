<?php
require_once "conexion.php";
  /**
   *
   */
  class Usuario
  {
    private $id_usuario;
    private $usuario;
    private $email;
    private $contrasena;
    private $rol;

    function __construct()
    {
      $this->id_usuario = null;
    }
    // get para retornar atributos
    // la variable $name me ayuda a recuperar cualquier atributo que yo decee
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
    // set para asignar valores a los atributos (lo mismo solo que enves de recuperar asigno)
    // cambio de linea en el if
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


    public function getUsuario()
    {
      try
      {
        $conexion = new Conexion();

        $conexion = $conexion->conectar();
        $query = 'SELECT * FROM usuario WHERE email=:email';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':email', $this->email);

        $preparar->execute();

        $registro = $preparar->fetch();

        return ($registro) ? $registro : null;
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }
    }


// ============================= Metodos Listar =============================


    public function listarUsuarios()
    {
      $almacenLista = '';
      try
      {
        $conexion = new Conexion();
        $conexion = $conexion->conectar();
        $query = "SELECT * FROM usuario";
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
        $query = 'INSERT INTO usuario (id_usuario, usuario, email, contrasena, rol)
                  VALUES (:id_usuario, :usuario, :email, :contrasena, :rol)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_usuario', $this->id_usuario);
        $preparar->bindValue(':usuario', $this->usuario);
        $preparar->bindValue(':email', $this->email);
        $preparar->bindValue(':contrasena', $this->contrasena);
        $preparar->bindValue(':rol', $this->rol);

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
        $query = 'DELETE FROM usuario WHERE id_usuario = :id_usuario';
        $preparar = $conexion->prepare($query);

        $preparar->bindValue(':id_usuario', $this->id_usuario);

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
