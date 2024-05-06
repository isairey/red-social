
<?php



// Tu lógica PHP aquí

// Verificar si se ha confirmado la acción
if (isset($_POST["confirmado"])) {
    // Acción confirmada, mostrar mensaje de confirmación
    echo "Acción confirmada";
}




/*
echo "<script>
// Función para mostrar el cuadro de diálogo de confirmación
function confirmarEliminacion() {
    return confirm('¿Estás seguro que deseas eliminar este elemento?');
}

// Función para enviar la confirmación al servidor
function enviarConfirmacion(confirmacion) {
    // Crear un formulario invisible
    var form = document.createElement('form');
    form.method = 'post';
    form.action = ''; // URL del script PHP que maneja la confirmación

    // Crear un campo de entrada para la confirmación
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'confirmacion';
    input.value = confirmacion;

    // Agregar el campo de entrada al formulario
    form.appendChild(input);

    // Agregar el formulario al cuerpo del documento y enviarlo
    document.body.appendChild(form);
    form.submit();
}

// Llamar a la función para mostrar el cuadro de diálogo de confirmación
var confirmacion = confirmarEliminacion();

// Enviar la confirmación al servidor
enviarConfirmacion(confirmacion);
</script>";*/


    

    // Si la confirmación es verdadera, procede con la eliminación
  
 if(!isset($_SESSION["user_id"])){ Core::redir("./");}?>




<?php
$frs = FriendData::getFriends($_SESSION["user_id"]);
//echo "<script>console.log('$frs');</script>";
?>
<div class="container">
<div class="row">
    <div class="col-md-3">
<?php Action::execute("_userbadge",array("user"=>Session::$user,"profile"=>Session::$profile,"from"=>"logged" ));?>
<?php Action::execute("_mainmenu",array());?>
    </div>
    <div class="col-md-7">
    <h2>Mis Amigos</h2>
    <?php if(count($frs)>0):?>
      <table class="table table-bordered">
      <thead>
        <th>Amigo</th>
        <th></th>
      </thead>
      
      <?php
      
      $s = Session::$user->id;
echo "<script>console.log('$s');</script>";


$id = $_GET['id'];
echo "<script>console.log('$id');</script>";
      foreach($frs as $fr):?>
        <tr>
          <td>
          <?php  
          
          //echo "<script>  return confirm('¿Estás seguro que deseas eliminar este elemento?');</script>";
     



  
          if(($fr->sender_id == $s || $fr->sender_id == $id )&& ($fr->sender_id == $s || $fr->sender_id == $id)){
          // $mensaje =  "FriendData::sel($s,$id)";
            echo "<script>alert('seguro que deseas eliminarlo');</script>";
          FriendData::eliminar($s,$id);
            Core::redir("./?view=myfriends");
           
           }else {
            Core::redir("./?view=myfriends");
             } 
          ?></td>
          <td style="width:190px;">
        
        </td>
        </tr>
      <?php 
      
    
      endforeach;
      
    
         $fr->read();
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
	





