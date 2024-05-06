

<?php if(!isset($_SESSION["user_id"])){ Core::redir("./");}?>
<?php
$frs = UserData::getAll();
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

foreach($frs as $fr):
?>
<tr>
    <td>
    <?php


    echo $fr->id." ".$fr->getFullname();

    ?>
    </td>
    <td style="width:190px;">
        <a href="./?view=user&id=<?php 
        
            echo $fr->id;
         ?>" class="btn btn-default btn-xs">Ver Perfil</a>
        <a href="./?view=sendmsg&id=<?php echo $fr->id;
             ?>" class="btn btn-default btn-xs">Enviar Mensaje</a>
<?php

//Core::alert(Session::$user->id);

if(Session::$user->id == $fr->id ){
    ?>
    <span class="btn btn-default btn-xs disabled">Bloquear</span>
    <span class="btn btn-default btn-xs disabled">Desbloquear</span>
    <?php

}else{
 
$bloqueado = UserData::getis_active($fr->id);
if ($bloqueado!=null) {
    
    // Si el botón debe estar bloqueado, no mostrar el enlace
    ?>
   <span class="btn btn-default btn-xs disabled">Bloquear</span>
   <?php
} else {
    // Si el botón no está bloqueado, mostrar el enlace
    ?>
    <a href="./?view=bloquear&id=<?php echo $fr->id; ?>" class="btn btn-default btn-xs">Bloquear</a>

    <?php
}

$bloqueado2 = UserData::getis_active($fr->id);
if ($bloqueado2==null) {
    
    // Si el botón debe estar bloqueado, no mostrar el enlace
    ?>
   <span class="btn btn-default btn-xs disabled">Desbloquear</span>
   <?php
} else {
    // Si el botón no está bloqueado, mostrar el enlace
    ?>
    <a href="./?view=desbloquear&id=<?php echo $fr->id; ?>" class="btn btn-default btn-xs">Desbloquear</a>

    <?php
}







             ?>

        


    </td>
</tr>
<?php 
}

        
//$fr->read();
endforeach; 

// Deshabilitar el botón
 

?>

    
        
    
    



      </table>
    <?php else:
      
      
      ?>
      <div class="jumbotron">
      <h2>No hay Usuarios</h2>
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