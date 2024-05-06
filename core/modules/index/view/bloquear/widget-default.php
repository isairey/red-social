
<?php
// Tu lógica PHP aquí
// Verificar si se ha confirmado la acción
if (isset($_POST["confirmado"])) {
    // Acción confirmada, mostrar mensaje de confirmación
    echo "Acción confirmada";
}

  
 if(!isset($_SESSION["user_id"])){ Core::redir("./");}?>
<?php
$frs = UserData::getAll();
//echo "<script>console.log('$frs');</script>";
?>
<div class="container">
<div class="row">
    <div class="col-md-3">
<?php Action::execute("_userbadge",array("user"=>Session::$user,"profile"=>Session::$profile,"from"=>"logged" ));?>
<?php Action::execute("_mainmenu",array());?>
    </div>
    <div class="col-md-7">
    <h2>Usuarios</h2>
    <?php if(count($frs)>0):?>
      <table class="table table-bordered">
      <thead>
        <th>Usuarios</th>
        <th></th>
      </thead>
      
      <?php
      
      $s = Session::$user->id;
echo "<script>console.log('$s');</script>";

$id = $_GET['id'];

      $regreso = UserData::update_active($id);
      if($regreso!=null){
        Core::alert("Se Bloqueo Con Exito");
        Core::redir("./?view=administrador");
      }else{
        Core::alert("No se Bloqueo");
        Core::redir("./?view=administrador");
      }
    
       
      ?>
      </table>
    <?php else:?>
      <div class="jumbotron">
      <h2>No hay Amigos</h2>
      </div>
    <?php endif;
   
    
    
    ?>
    </div>
    <div class="col-md-2">
    </div>
  </div>
</div>


</div>
<br><br><br><br><br>

//		Core::redir("./");
		//View::render($this,"index",array("meta"=>$meta));
	