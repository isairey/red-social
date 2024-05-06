
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOIS :) | Red Social de Propósito General</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .panel {
            max-width: 400px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .panel-heading {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .checkbox-label {
            margin-bottom: 20px;
        }
        .checkbox-input {
            margin-right: 10px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Registrar Administrador
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
            </div>
        </div>
    </div>
    <script>
        function validarContrasena() {
            var contrasena = document.getElementById("exampleInputPassword11").value;
            var contrasena1 = document.getElementById("exampleInputPassword1").value;
            var errorMessages = '';

            if (contrasena != contrasena1) {
                errorMessages += 'Las contraseñas deben ser iguales.\n';
            }
            if (contrasena.length < 8) {
                errorMessages += 'La contraseña debe tener al menos 8 caracteres.\n';
            }
            if (!/[A-Z]/.test(contrasena)) {
                errorMessages += 'Verificar que tenga al menos una letra mayúscula.\n';
            }
            if (!/[a-z]/.test(contrasena)) {
                errorMessages += 'Verificar que tenga al menos una letra minúscula.\n';
            }
            if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(contrasena)) {
                errorMessages += 'Verificar que tenga al menos un símbolo.\n';
            }
            if (/123|234|345|456|567|678|789|890/.test(contrasena)) {
                errorMessages += 'Verificar que no tenga números consecutivos.\n';
            }
            if (/abc|bcd|cde|def|efg|fgh|ghi|hij|ijk|jkl|klm|lmn|mno|nop|opq|pqr|qrs|rst|stu|tuv|uvw|vwx|wxy|xyz/.test(contrasena.toLowerCase())) {
                errorMessages += 'Verificar que no tenga letras consecutivas del abecedario.\n';
            }
            if (/qwe|rty|tyu|yui|uio|iop|asd|sdf|dfg|fgh|ghj|hjk|jkl|zxc|xcv|cvb|vbn|bnm/.test(contrasena.toLowerCase())) {
                errorMessages += 'Verificar que no tenga letras consecutivas del teclado.\n';
            } 

            if (errorMessages !== '') {
                alert('Por favor, corrige los siguientes errores:\n\n' + errorMessages);
                return false;
                
               
            } else {
                alert('Datos ingresados correctamente.');
                return true;
            }
        }
    </script>
</body>
</html>
