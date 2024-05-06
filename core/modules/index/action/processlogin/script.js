function validarContraseña() {
    var contrasena = document.getElementById("contra").value;
    const btnEnviar = document.querySelector("#btnenviar");
    const txtt = document.querySelector("#contra");
      // Verificar que tenga al menos 8 caracteres
      var errorMessages = '';
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
                  alert('Por favor, corrige los siguientes errores:\n\n' + errorMessages);
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