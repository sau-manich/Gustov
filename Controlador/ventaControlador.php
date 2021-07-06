<?php
require_once ('../Modelo/venta.php');

  if (isset($_POST) && isset($_GET))
  {
    switch ($_GET['opc'])
    {
      case 'guardar':
        registrar($_POST);
        break;
      case 'listar':
          echo json_encode(listar());
        break;
        case 'eliminarVenta':
          eliminarVenta($_GET);
          break;
    }
  }


  
// ============================= Funcion para Eliminar =============================

  function eliminarVenta($dato)
  {
    $venta = new Venta();
    $venta->id_venta = $dato['key'];
    $datosVenta = $venta->eliminar();
    header('location: ../Vista/layouts/administrador/reporte.php');
  }

  
// ============================= Funcion para listar =============================


  function listar()
  {
    $listaVenta = array();
    $venta = new Venta();
    $registros = $venta->listarVenta();
    $contador = 0;
    foreach ($registros as $value)
    {
      $venta = new Venta();
      $venta->id_venta = $value['id_venta'];
      $venta->id_usuario = $value['id_usuario'];
      $venta->precioTotal = $value['precioTotal'];
      $listaVenta[$contador] = $venta;
      $contador++;
    }
    return $registros;
  }

// ============================= Funcion para registrar =============================

  function registrar($datos)
  {
    $venta = new Venta();
    $venta->id_usuario = $datos['id_usuario'];
    $venta->id_cliente = $datos['id_cliente'];
    $venta->precioTotal = $datos['precioTotal'];
    $venta->guardar();
    header('location: ../Vista/layouts/administrador/venta.php');
  }
?>