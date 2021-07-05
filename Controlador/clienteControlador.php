<?php
require_once ('../Modelo/cliente.php');

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
        case 'eliminarCliente':
          eliminarCliente($_GET);
          break;
    }
  }


  
// ============================= Funcion para Eliminar =============================

  function eliminarCliente($dato)
  {
    $cliente = new Cliente();
    $cliente->id_cliente = $dato['key'];
    $datosCliente = $cliente->eliminar();
    header('location: ../Vista/layouts/administrador/cliente.php');
  }

  
// ============================= Funcion para listar =============================


  function listar()
  {
    $listaCliente = array();
    $cliente = new Cliente();
    $registros = $cliente->listarCliente();
    $contador = 0;
    foreach ($registros as $value)
    {
      $cliente = new Cliente();
      $cliente->id_cliente = $value['id_cliente'];
      $cliente->nombreCompleto = $value['nombreCompleto'];
      $cliente->telefono = $value['telefono'];
      $cliente->descripcion = $value['descripcion'];
      $cliente->ci = $value['ci'];
      $listaCliente[$contador] = $cliente;
      $contador++;
    }
    return $registros;
  }

// ============================= Funcion para registrar =============================


  function registrar($datos)
  {
    $cliente = new Cliente();
    $cliente->nombreCompleto = $datos['nombreCompleto'];
    $cliente->telefono = $datos['telefono'];
    $cliente->descripcion = $datos['descripcion'];
    $cliente->ci = $datos['ci'];
    $cliente->guardar();
    header('location: ../Vista/layouts/administrador/cliente.php');
  }
?>