<?php
require_once "conexion.php";
  /**
   *
   */
  class VentaMenu
  {
    private $id_ventaMenu;
    private $id_menu;
    private $id_venta;
    private $cantidad;
    private $subTotal;

    function __construct()
    {
      $this->id_ventaMenu = null;
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


// ============================= Metodos Guardar =============================


    public function guardar()
    {
      try
      {
        $conexion = new Conexion();
        $conexion = $conexion->conectar();
        $query = 'INSERT INTO ventaMenu (id_ventaMenu, id_menu, id_venta, cantidad, subTotal)
                  VALUES (:id_ventaMenu, :id_menu, :id_venta, :cantidad, :subTotal)';
        $preparar = $conexion->prepare($query);
        $preparar->bindValue(':id_ventaMenu', $this->id_ventaMenu);
        $preparar->bindValue(':id_menu', $this->id_menu);
        $preparar->bindValue(':id_venta', $this->id_venta);
        $preparar->bindValue(':cantidad', $this->cantidad);
        $preparar->bindValue(':subTotal', $this->subTotal);


        $preparar->execute();
        return 'Exito al guardar';
      }
      catch (PDOException $e)
      {
        return 'Error al guardar';
      }


    }
}

?>
