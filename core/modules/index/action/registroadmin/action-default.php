<?php
/**
* @author evilnapsis
* @brief Proceso de registo, obtiene los valores post del formulario de registro y los guarda en la bd.
**/
$password = $_POST["password"];
$ps2 = $_POST["confirm_password"];

echo "<script>console.log('$password');</script>";
echo "<script>console.log('$ps2');</script>";
		if(!empty($_POST)){
			if($_POST["name"]!=""&&$_POST["lastname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""){
				$user = UserData::getByEmail($_POST["email"]);
				if($user==null){
					$str = "abcdefghijklmopqrstuvwxyz1234567890";
					$code = "";
					for ($i=0; $i < 6; $i++) { 
						$code .= $str[rand(0,strlen($str)-1)];
					}
					
					$errorMessages = false;
					if ($password == $ps2) {
						$errorMessages .= "Las 2 Contraseñas deben de ser iguales.\n";
					}
// Verificar si la contraseña tiene al menos 8 caracteres
if (strlen($password) < 8) {
    $errorMessages = true;
}

// Verificar si la contraseña contiene al menos una letra mayúscula
if (!preg_match('/[A-Z]/', $password)) {
    $errorMessages = true;
}

// Verificar si la contraseña contiene al menos una letra minúscula
if (!preg_match('/[a-z]/', $password)) {
    $errorMessages = true;
}

// Verificar si la contraseña contiene al menos un número
if (!preg_match('/[0-9]/', $password)) {
    $errorMessages = true;
}

// Verificar si la contraseña contiene al menos un carácter especial
if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
    $errorMessages = true;
}

// Si hay errores, mostrar mensaje de alerta
if ($errorMessages==true) {
	//Core::alert("Por favor, corrige los siguientes errores:\\n\\n" . $errorMessages . "");
    Core::alert("Datos Incorrectos");
	Core::redir("./?view=admin");
}else{
    Core::alert("Datos Correctos");
				$user = new UserData();
					$user->name = $_POST["name"];
					$user->lastname = $_POST["lastname"];
					$user->email = $_POST["email"];
					$user->password = sha1(md5($_POST["password"]));
					$user->code = $code;
					$u = $user->add2();

					$p =  new ProfileData();
					$p->user_id = $u[1];
					$p->add();


					$msg = "<body><h1>Registro Exitoso</h1>
					<p>Ahora debes activar tu cuenta en el siguiente link:</p>
					<p><a href='http://youhost/app/index.php?r=index/processactivation&e=".sha1(md5($_POST["email"]))."&c=".sha1(md5($code))."'>Activa tu cuenta:</a></p>
					<p>O tambien puedes usar el siguiente codigo de activacion: ".$code."</p>
					</body>";
	
					mail($_POST["email"], "Registro Exitoso", $msg);
					/* $f = fopen (ROOT."/register.txt","w");
					fwrite($f, $msg);
					fclose($f);
					*/
					Core::alert("Registro Exitoso!, se ha enviado un correo electronico con los datos necesarios para activar su cuenta.");
					Core::redir("./?view=admin");
}
				}else{
					Core::alert("El email proporcionado ya esta registrado.");
					Core::redir("./?view=admin");

				}
			}else{
				Core::alert("No puede dejar campos vacios");				
				Core::redir("./?view=admin");
			}
		}

//		Core::redir("./");
		//View::render($this,"index",array("meta"=>$meta));
	





?>