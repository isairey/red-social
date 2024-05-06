<html>
<head>
<title>LOIS :) | Red Social de Proposito General</title>

</head>
<body>
<div class="container">
<div class="row">
 
<div class="col-md-8">
<h2>LOIS - Red Social</h2>
<p>LOIS es un sistema de red social de proposito general</p>
<img src="res/main.png">
<h3>Descripcion</h3>
<p>LOIS es un sistema de red social en el que puedes rellenar tu perfil, hacer publicaciones de texto y/o imagenes, buscar amigos, enviar, recibir y aceptar solicitudes de amistad, enviar mensajes a amigos, comentar y/o dar likes a las publicaciones, recibir notificaciones y mucho mas.</p>


<h3>Modulos</h3>
<p>Defino a grandes rasgos los modulos generales del sistema</p>

<ul>
<li><b>Usuarios</b>: Se pueden registrar para acceder a sus cuentas y asi empezar la aventura LOIS.</li>
<li><b>Publicaciones</b>: Cada usuario puede publicar lo que quiera y lo visualizara en su muro, el cual podran ver tambien sus amigos.</li>
<li><b>Perfiles</b>: Los usuarios pueden rellenar su perfil, escribir sobre ellos, que les gusta y que no, sus amigos pueden ver esta informacion.</li>
<li><b>Likes</b>: Los usuarios pueden darle likes a las publicaciones y/o imagenes de sus amigos.</li>
<li><b>Comentarios</b>: Los usuarios pueden escribir comentarios a las publicaciones y/o imagenes de sus amigos.</li>
<li><b>Imagenes</b>: Poder subir imagenes, poner imagen de perfil.</li>
<li><b>Amigos</b>: Puedes buscar personas, enviarles solicitud de amistad, esperar a que te acepten o tu puedes recibir solicitudes y aceptarlas.</li>
<li><b>Mensajes</b>: Puedes enviar mensajes a tus amigos y tener conversaciones.</li>
<li><b>Notificaciones</b>: recibe notificaciones cuando tus amigos dan like o comentan tus publicaciones y/o imagenes.</li>
</ul>
</div>
 
<div class="col-md-4">



<div class="panel panel-default">
		<div class="panel-heading">
		Registro 
		</div>

		<div class="panel-body">
		<form role="form" method="post" action="./?action=processregister">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail11" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" placeholder="Apellidos" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail111" placeholder="Correo electronico" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword11" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirmar Password</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Password" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" required> Acepto terminos y condiciones
    </label>
  </div>
  <button type="submit" class="btn btn-block btn-default" onclick="validarContrasena()">Registrar</button>
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