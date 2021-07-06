<?php
require_once ('../Modelo/usuario.php');
  if (isset($_POST) && isset($_GET))
  {
    // swich no me acepta arrays y lo que hago es optener un valor del array , en este caso obtenemos el valor de la vacriable (opc) vista/usuario.html
    switch ($_GET['opc'])
    {
      case 'guardar':
        registrar($_POST);
        break;
      case 'listar':
          echo json_encode(listar());
        break;
        case 'eliminarUsuario':
          eliminarUsuario($_GET);
          break;
        case 'buscarUsuario':
          BuscarUsuario($_GET);
          break;
      default:
        // code...
        break;
    }
  }


// ============================= Funcion para Eliminar =============================


  function eliminarUsuario($dato)
  {
    $usuario = new Usuario();
    $usuario->id_usuario = $dato['key'];
    $datosUsuario = $usuario->eliminar();
    header('location: ../Vista/layouts/administrador/cuenta.php');
  }


// ============================= Funcion para listar =============================


  function listar()
  {
    $listaUsuario = array();
    $usuario = new Usuario();
    $registros = $usuario->listarUsuarios();
    $contador = 0;
    foreach ($registros as $value)
    {
      $usuario = new Usuario();
      $usuario->id_usuario = $value['id_usuario'];
      $usuario->usuario = $value['usuario'];
      $usuario->email = $value['email'];
      $usuario->contrasena = $value['contrasena'];
      $usuario->rol = $value['rol'];
      $listaUsuario[$contador] = $usuario;

      $contador++;
    }
    return $registros;
  }

  
// ============================= Funcion para registrar =============================


  function registrar($datos)
  {
    $usuario = new Usuario();
    $usuario->usuario = $datos['usuario'];
    $usuario->email = $datos['email'];
    $usuario->contrasena = $datos['contrasena'];
    $usuario->rol = $datos['rol'];
    $usuario->guardar();
    header('location: ../Vista/layouts/administrador/cuenta.php');
  }
?>