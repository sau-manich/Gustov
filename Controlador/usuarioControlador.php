<?php
require_once ('../Modelo/usuario.php');
// include '../Vista/assets/js/push.min.js';

  // get muestran las url en el navegador
  // post no muestra la url

  // este if me dice si llego un post de vista/usuario.html
  // post y get ingresan como arrays
  if (isset($_POST) && isset($_GET))
  {
    // swich no me acepta arrays y lo que hago es optener un valor del array , en este caso obtenemos el valor de la vacriable (opc) vista/usuario.html
    switch ($_GET['opc'])
    {
      case 'guardar':
        // la funcion var_dump sirve para imprimir arrays y clases
        // var_dump($_POST);
        registrar($_POST);
        break;
      case 'listar':
          echo json_encode(listar());
       // var_dump(listar());
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



  // con esta funcion eliminaremos al usuario
  function eliminarUsuario($dato)
  {
    $usuario = new Usuario();
    // este amarillo es de la peticion que se realizo de la vista
    $usuario->id_usuario = $dato['key'];
    // recuperamos los datos desde la funcion obtener datos del modelo
    $datosUsuario = $usuario->eliminar();
    header('location: ../Vista/layouts/administrador/cuenta.php');
  }


  // con esta funcion listamos los usuarios
  function listar()
  {
    $listaUsuario = array();
    // Instanciamos la clase usuario de la carpeta modelo
    $usuario = new Usuario();
    // listar usuario viene de jS del html
    $registros = $usuario->listarUsuarios();
    $contador = 0;
    foreach ($registros as $value)
    {
      $usuario = new Usuario();
      // letras en blanco son de los atributos de la clase usuarios
      // leteas en amarillo son de las tablas de la base de datos
      $usuario->id_usuario = $value['id_usuario'];
      $usuario->usuario = $value['usuario'];
      $usuario->email = $value['email'];
      $usuario->contrasena = $value['contrasena'];
      $usuario->rol = $value['rol'];
      $listaUsuario[$contador] = $usuario;

      $contador++;
    }
    // var_dump($listaUsuario);
    return $registros;
  }

  function registrar($datos)
  {
    // los de color blanco son los atributos de la clase MODELO
    // los de color amarillo son los valores asignados en (name=" xyz ") en el html
    $usuario = new Usuario();
    $usuario->usuario = $datos['usuario'];
    $usuario->email = $datos['email'];
    $usuario->contrasena = $datos['contrasena'];
    $usuario->rol = $datos['rol'];
    // var_dump($usuario);
    $usuario->guardar();
    
      // echo '<script>
      //       Push.create("CUENTA",{
      //           body: "El registro de la cuenta fue realizado correctamente",
      //           icon: "../../assets/img/mmee.png",
      //           timeout: 40000,
      //           onClick: function () {
      //               window.location="../../../";
      //               this.close();
      //           }
      //           });
      //       </script>';
    header('location: ../Vista/layouts/administrador/cuenta.php');
  }
  
  function buscarUsuario()
  {
    
  }

  // function obtener($correo)
  // {
    
  //   // Instanciamos la clase usuario de la carpeta modelo
  //   $usuario = new Usuario();
  //   // listar usuario viene de jS del html
  //   $registro = $usuario->getUsuario($correo);
  //   // var_dump($listaUsuario);
  //   return $registro;
  // }
?>