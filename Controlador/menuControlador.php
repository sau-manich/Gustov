<?php
$path = getcwd();
// echo "La ruta absoluta es: ";
// echo $path;
if (strpos($path,'\layouts\administrador')) {
  include ('../../../Modelo/menu.php');
}else{
include ('../Modelo/menu.php');
}
// include ('../Modelo/menu.php');

  if (isset($_POST) && isset($_GET) && isset($_GET['opc']))
  {
    switch ($_GET['opc'])
    {
      case 'guardar':
        registrar($_POST);
      break;
        case 'listar':
          echo json_encode(listar());
        break;
          // echo json_encode(listar());
          case 'eliminarMenu':
            eliminarMenu($_GET);
          break;
    }
  }

  // var_dump($_POST,$_GET);

  
// ============================= Funcion para Eliminar =============================

  function eliminarMenu($dato)
  {
    $menu = new Menu();
    $menu->id_menu = $dato['key'];
    $datosMenu = $menu->eliminar();
    header('location: ../Vista/layouts/administrador/menu.php');
  }

  
// ============================= Funcion para listar =============================


  function listar()
  {
    $listaMenu = array();
    $menu = new Menu();
    $registros = $menu->listarMenu();
    $contador = 0;
    foreach ($registros as $value)
    {
      $menu = new Menu();
      $menu->id_menu = $value['id_menu'];
      $menu->nombre = $value['nombre'];
      $menu->precio = $value['precio'];
      $menu->estado = ($value['estado']==1) ? 'Activo' : 'Inactivo';
      $menu->ingredientePrincipal = $value['ingredientePrincipal'];
      $menu->ingredienteSecundario = $value['ingredienteSecundario'];
      $menu->ingredienteComplemento = $value['ingredienteComplemento'];
      $listaMenu[$contador] = $menu;
      $contador++;
    }
    return $registros;
  }

  function listaMenu()
  {
    $menu = new Menu();
    $menu = $menu->getMenu();
    $listaMenu = array();
    $i = 0;
    if ($menu!=null)
    {
      foreach ($menu as $value)
      {
        $menu = new Menu();
        $menu->id_menu = $value['id_menu'];
        $menu->nombre = $value['nombre'];
        $menu->precio = $value['precio'];
        $menu->estado = ($value['estado']==1) ? 'Activo' : 'Inactivo';
        $menu->ingredientePrincipal = $value['ingredientePrincipal'];
        $menu->ingredienteSecundario = $value['ingredienteSecundario'];
        $menu->ingredienteComplemento = $value['ingredienteComplemento'];
        $listaMenu[$i] = $menu;
        $i++;
      }
      return $listaMenu;
    }
    else
    {
      return null;
    }

  }

// ============================= Funcion para registrar =============================


  function registrar($datos)
  {
    $menu = new Menu();
    $menu->nombre = $datos['nombre'];
    $menu->precio = $datos['precio'];
    $menu->estado = ($datos['estado']=='true')?1:2;
    $menu->ingredientePrincipal = $datos['ingredientePrincipal'];
    $menu->ingredienteSecundario = $datos['ingredienteSecundario'];
    $menu->ingredienteComplemento = $datos['ingredienteComplemento'];
    // var_dump($menu);
    $menu->guardar();
    header('location: ../Vista/layouts/administrador/menu.php');
  }

?>