<?php
include ('../Modelo/ventaMenu.php');
include ('../Modelo/venta.php');
include ('../Modelo/menu.php');

  if (isset($_POST) && isset($_GET))
  {
    switch ($_GET['opc'])
    {
      case 'guardar':
        registrar($_POST);
      break;
    }
  }
  
  // ============================= Funcion para registrar =============================


  function registrar($datos)
  {
      $ventaMenu;
      $venta = new Venta(); 
      // $venta->id_venta = rand(1,1000000); // Por fines practicos no se tomara la validacion del id_venta, pero deberia ser de crusial importancia controlar la no repeticion
      $venta->id_venta = $datos['id_venta']; 
      $venta->id_usuario = 1;
      $venta->id_cliente = 1;
      $venta->precioTotal = $datos['precio'];
      $venta->guardar();

      foreach ($datos['carrito'] as $value) {
          $menu = Menu::obtenerMenu($value['nombre']);
          $ventaMenu = new VentaMenu();
          $ventaMenu->id_menu = $menu->id_menu;
          $ventaMenu->id_venta = $venta->id_venta;
          $ventaMenu->cantidad = $value['cantidad'];
          $ventaMenu->subTotal = (float) $value['precio']*$value['cantidad'];
          $ventaMenu->guardar();
          // var_dump($ventaMenu);
      }
  }
?>