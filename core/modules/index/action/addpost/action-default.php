<?php
if(isset($_POST)){
$p = new PostData();
$p->title = $_POST['title'];
$p->content = $_POST['content'];
$public =0;
if(isset($_POST['is_public'])){ $public=1; }

$p->is_public = $public;
$p->user_id = 1;
$p->add();

// setcookie("added",$p->title);
$carpeta = Session::$user->id;
$ca = "images";
// Verificar si la carpeta no existe
if (!file_exists($carpeta)) {
    // Crear la carpeta
    mkdir($carpeta, 0777, true); // El tercer parámetro 'true' crea subdirectorios recursivamente
    if (!file_exists($ca)) {
        // Crear la carpeta
        mkdir($ca, 0777, true); // El tercer parámetro 'true' crea subdirectorios recursivamente
        echo "La carpeta '$carpeta' ha sido creada.";
    } else {
        echo "La carpeta '$carpeta' ya existe.";
    }
    echo "La carpeta '$carpeta' ha sido creada.";
} else {
    echo "La carpeta '$carpeta' ya existe.";
}
 print "<script>window.location='index.php?view=newpost';</script>";
}
?>