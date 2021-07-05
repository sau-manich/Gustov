var error = 5;

$(document).ready(function()
{

  autentificar();
});

function autentificar()
{
  // console.log('sbn');
  $('#autentificacionLogin').submit(function(e)
{
  e.preventDefault();
  var datos=$('#autentificacionLogin').serialize();
  $.ajax({
    // la URL es del login y fijamos la ruta para ingresar
    'url':'../Controlador/autentificacionControlador.php?opc=autentificar',
    'data': datos,
    'method':'POST'
  }).done(function(info)
  {
    console.log(info);
    if (info == 'ADMINISTRADOR' || info == 'USUARIO')
    {
      if (info == 'ADMINISTRADOR') {
        $('#info').html('<div style="border: 2px solid green; border-radius:1rem; padding:1rem; background-color:#1E2A31;"><h5 style="color:white; text-align:center;">Datos Correctos</h5></div>');
        // esta dirección es desde el login hasta donde queramos llegar si son validos los datos
        window.location.href = "layouts/administrador/venta.php";
      } else {
        $('#info').html('<div style="border: 2px solid green; border-radius:1rem; padding:1rem; background-color:#1E2A31;"><h5 style="color:white; text-align:center;">Datos Correctos</h5></div>');
      // esta dirección es desde el login hasta donde queramos llegar si son validos los datos
      window.location.href = "layouts/socio/index.php";
      }
      
    }
    else
    {
      error--;
      if(error==0){
        window.location.href = "404.php";
      }
      else {
        // console.log(error);
        $('#info').html('<div style="border: 2px solid red; border-radius:1rem; padding:1rem; background-color:#1E2A31;"><h5 style="color:white; text-align:center;">Datos incorrectos, quedan '+error+' intentos</h5></div>');
      }

    }
  })
});
}
