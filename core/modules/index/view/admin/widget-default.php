<html>
<head>
<title>LOIS :) | Red Social de Proposito General</title>

</head>
<body>
<div class="container">
<div class="row">
 
<div class="col-md-8">

</div>
 
<div class="col-md-4">



<div class="panel panel-default">
		<div class="panel-heading">
		Registro 
		</div>

		<div class="panel-body">
		<form role="form" method="post" action="./?action=registroadmin">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" name="lastname" class="form-control" id="exampleInputEmail11" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail111" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword11" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar Contraseña</label>
                        <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" required> Acepto términos y condiciones
                        </label>
                    </div>
                    <button type="submit" class="btn btn-block btn-default" onclick="validarContrasena()">Registrar</button>
                  <!--  <button type="button" class="btn btn-block btn-default" onclick="window.history.back()">Regresar</button>-->
                    <a href="./" class="btn btn-block btn-default">Regresar</a>
                </form>

<script>
function validarContrasena() {
    var contrasena = document.getElementById("exampleInputPassword11").value;
    var contrasena1 = document.getElementById("exampleInputPassword1").value;
    
    
    // Asignar la información al valor del input

    //const btnEnviar = document.querySelector("#btnenviar");
    //const txtt = document.querySelector("#contra");
      // Verificar que tenga al menos 8 caracteres
      var errorMessages = '';
      if (contrasena!=contrasena1) {
        errorMessages += 'las contraseñas deben de ser iguales\n';
     
         
          
      }
  

      if (contrasena.length < 8) {
        errorMessages += 'La contraseña debe tener al menos 8 caracteres..\n';
     
         
          
      }
  
      // Verificar que tenga al menos una letra mayúscula
      if (!/[A-Z]/.test(contrasena)) {
      
        errorMessages += 'Verificar que tenga al menos una letra mayúscula.\n';
          
         
      }
  
      // Verificar que tenga al menos una letra minúscula
      if (!/[a-z]/.test(contrasena)) {
        
        errorMessages += 'Verificar que tenga al menos una letra minúscula\n';
          return false;
          
      }
  
      // Verificar que tenga al menos un símbolo
      if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(contrasena)) {
        errorMessages += 'Verificar que tenga al menos un símbolo\n';
        
          
      }
  
      // Verificar que no tenga números consecutivos
      if (/123|234|345|456|567|678|789|890/.test(contrasena)) {
        errorMessages += 'Verificar que no tenga números consecutivos\n';
     
          
      }
  
      // Verificar que no tenga letras consecutivas del abecedario
      if (/abc|bcd|cde|def|efg|fgh|ghi|hij|ijk|jkl|klm|lmn|mno|nop|opq|pqr|qrs|rst|stu|tuv|uvw|vwx|wxy|xyz/.test(contrasena.toLowerCase())) {
      
        errorMessages += 'Verificar que no tenga letras consecutivas del abecedario.\n';
      
      }
  
      // Verificar que no tenga letras consecutivas del teclado
      if (/qwe|rty|tyu|yui|uio|iop|asd|sdf|dfg|fgh|ghj|hjk|jkl|zxc|xcv|cvb|vbn|bnm/.test(contrasena.toLowerCase())) {
      
        errorMessages += 'Verificar que no tenga letras consecutivas del teclado\n';
        
      } 
      
      if (errorMessages !== '') {
                  // Mostrar mensajes de error en una alerta
                  alert('Por Favor, corrige los siguientes errores:\n\n' + errorMessages);
                  // Evitar que el formulario se envíe
                  return false;
              }else{
                  alert('Datos Ingresados correctamente');
                   // Realizar la petición AJAX para enviar el resultado al archivo PHP
                /*
                   let texto = contrasena.value.trim(); // Obtener el texto del textarea
                   if (texto !== "") { // Verificar que el texto no esté vacío
                       let formData = new FormData();
                       formData.append("texto", texto); // Agregar texto al FormData
                       fetch("core/modules/index/action/processlogin/action-default.php", {
                           method: 'POST',
                           body: formData, // Enviar FormData al script PHP
                       })
                           .then(respuesta => respuesta.text()) // Convertir respuesta a texto
                           .then(decodificado => {
                               console.log(decodificado); // Mostrar respuesta en consola
                           });
                   } else {
                       // El usuario no ha ingresado texto
                       alert("Ingresa algún texto");
                   }
                 return true;
      */
             
         
              }
  
      // Si pasó todas las validaciones, la contraseña es válida
     
  }

</script>
		</div>
		</div>
</div>
</div>
</div>
</body>
</html>