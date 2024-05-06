

<?php
/**
* @author evilnapsis
* @brief Proceso de login
**/


$password = $_POST["password"];
$email = $_POST["email"];
$gett = UserData::sell($email);
$con = 0;


if($gett!=null){
	Core::alert("Es Admin");
	if(!empty($_POST)){
		if($_POST["email"]!=""&&$_POST["password"]!=""){
			$user = UserData::getLogin($_POST["email"],sha1(md5($_POST["password"])));
			if($user!=null){
				if($user->is_active){
					Session::set("user_id",$user->id);
					
					//Core::alert($user->id);
		    if(UserData::verificar($user->id)==null){
			//echo "Texto guardado con éxito en $nombreArchivo";
			Core::redir("./?view=home");
			Core::alert("Debes verificar tu correo electronico, tu uso de LOIS estara limitado.");
			
					}else{
						Core::redir("./?view=bloqueado");
					}

					//Core::redir("./?view=home");
				}else{			
	 
					
					$errorMessages = "";

// Verificar si la contraseña tiene al menos 8 caracteres
if (strlen($password) < 8) {
    $errorMessages .= "La contraseña debe tener al menos 8 caracteres.\n";
}

// Verificar si la contraseña contiene al menos una letra mayúscula
if (!preg_match('/[A-Z]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos una letra mayúscula.\n";
}

// Verificar si la contraseña contiene al menos una letra minúscula
if (!preg_match('/[a-z]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos una letra minúscula.\n";
}

// Verificar si la contraseña contiene al menos un número
if (!preg_match('/[0-9]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos un número.\n";
}

// Verificar si la contraseña contiene al menos un carácter especial
if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos un carácter especial.\n";
}

// Si hay errores, mostrar mensaje de alerta
if (!empty($errorMessages)) {
    echo "<script>alert('Por favor, corrige los siguientes errores:\\n\\n" . $errorMessages . "');</script>";
    
	Core::redir("./");
}else{
		
		
	
Session::set("user_id",$user->id);
if(UserData::verificar($user->id)==null){
	//echo "Texto guardado con éxito en $nombreArchivo";
	Core::redir("./?view=home");
	Core::alert("Debes verificar tu correo electronico, tu uso de LOIS estara limitado.");
	
			}else{
				Core::redir("./?view=bloqueado");
			}

		
	
						
						
	}
	
					
				}
			}else{
				Core::alert("Datos incorrectos");
				Core::redir("./");
			}
		}else{
			Core::alert("Datos vacios");
			Core::redir("./");
		}
	}
	//Core::redir("./?view=administrador");


}else{
	Core::alert("No es Admin");


if(!empty($_POST)){
	if($_POST["email"]!=""&&$_POST["password"]!=""){
		$user = UserData::getLogin($_POST["email"],sha1(md5($_POST["password"])));
		if($user!=null){
			if($user->is_active){
				Session::set("user_id",$user->id);

				if(UserData::verificar($user->id)==null){
					//echo "Texto guardado con éxito en $nombreArchivo";
					Core::alert($user->id);
					Core::alert("Debes verificar tu correo electronico, tu uso de LOIS estara limitado.");
					Core::redir("./?view=home");
					
							}else{
								Core::redir("./?view=bloqueado");
							}
		
							
		
							
			}else{			

				$errorMessages = "";

// Verificar si la contraseña tiene al menos 8 caracteres
if (strlen($password) < 8) {
    $errorMessages .= "La contraseña debe tener al menos 8 caracteres.\n";
}

// Verificar si la contraseña contiene al menos una letra mayúscula
if (!preg_match('/[A-Z]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos una letra mayúscula.\n";
}

// Verificar si la contraseña contiene al menos una letra minúscula
if (!preg_match('/[a-z]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos una letra minúscula.\n";
}

// Verificar si la contraseña contiene al menos un número
if (!preg_match('/[0-9]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos un número.\n";
}

// Verificar si la contraseña contiene al menos un carácter especial
if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
    $errorMessages .= "La contraseña debe contener al menos un carácter especial.\n";
}

// Si hay errores, mostrar mensaje de alerta
if (!empty($errorMessages)) {
    echo "<script>alert('Por favor, corrige los siguientes errores:\\n\\n" . $errorMessages . "');</script>";
    
	Core::redir("./");
}else{

					//echo "Texto guardado con éxito en $nombreArchivo";
					Session::set("user_id",$user->id);
					if(UserData::verificar($user->id)==null){
						//echo "Texto guardado con éxito en $nombreArchivo";
						Core::alert($user->id);
						Core::alert("Debes verificar tu correo electronico, tu uso de LOIS estara limitado.");
						Core::redir("./?view=home");
						
								}else{
									Core::redir("./?view=bloqueado");
								}
			
				
					//Core::redir("./?view=home");
}

				
			}
		}else{
			Core::alert("Datos incorrectos");
			Core::redir("./");
		}
	}else{
		Core::alert("Datos vacios");
		Core::redir("./");
	}
}

}

?>
