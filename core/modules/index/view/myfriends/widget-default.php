

<?php if(!isset($_SESSION["user_id"])){ Core::redir("./");}?>
<?php
$frs = FriendData::getFriends($_SESSION["user_id"]);
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
$ss = 0;
$con = 0;
$con1 = 0;
foreach($frs as $fr):
?>
<tr>
    <td>
    <?php
    if($fr->receptor_id == Session::$user->id){
        echo $fr->getSender()->getFullname();
    } else {
        echo $fr->getReceptor()->getFullname();
    }
    ?>
    </td>
    <td style="width:190px;">
        <a href="./?view=user&id=<?php 
        if($fr->sender_id == Session::$user->id){
            echo $fr->receptor_id;
        } else {
            echo $fr->sender_id;
        } ?>" class="btn btn-default btn-xs">Ver Perfil</a>
        <a href="./?view=sendmsg&id=<?php 
        if($fr->sender_id == Session::$user->id){
            echo $fr->receptor_id;
        } else {
            echo $fr->sender_id;
        } ?>" class="btn btn-default btn-xs">Enviar Mensaje</a>


        <form method="POST" action="./?view=delete&id=<?php
        if($fr->sender_id == Session::$user->id){
            $ss = $fr->receptor_id;
            echo $fr->receptor_id;
            $con++;
        } else {
            $ss = $fr->sender_id; 
            echo $fr->sender_id;
            $con1++;
        } ?>" class="form" id="form_<?php echo $ss; ?>">
            <input type="submit" value="Eliminar" name="B1" class="btn btn-default btn-xs">     
        </form>
    </td>
</tr>
<?php 
$fr->read();
endforeach; 

echo "<script>console.log('$con');</script>";
echo "<script>console.log('$con1');</script>";
?>
<script type="text/javascript">
(function() {
    <?php 
    if($con>=1){
        foreach($frs as $fr):?>
            var form_<?php echo $fr->receptor_id; ?> = document.getElementById('form_<?php echo $fr->receptor_id; ?>');
            if(form_<?php echo $fr->receptor_id; ?>) {
                form_<?php echo $fr->receptor_id; ?>.addEventListener('submit', function(event) {
                    if (!confirm('Realmente desea eliminar?')) {
                        event.preventDefault();
                    }
                }, false);
            }

            console.log(<?php $ss ?>);
    <?php endforeach; 
    }

    if($con1>=1){

        foreach($frs as $fr):?>
            var form_<?php echo $fr->sender_id; ?> = document.getElementById('form_<?php echo $fr->sender_id; ?>');
            if(form_<?php echo $fr->sender_id; ?>) {
                form_<?php echo $fr->sender_id; ?>.addEventListener('submit', function(event) {
                    if (!confirm('Realmente desea eliminar?')) {
                        event.preventDefault();
                    }
                }, false);
            }
    <?php endforeach;  
    }?>
 

})();

</script>

      </table>
    <?php else:
      
      
      ?>
      <div class="jumbotron">
      <h2>No hay Amigos</h2>
      </div>
    <?php endif;
    
    echo "<script>console.log('$fr->sender_id');</script>";
    ?>
    </div>
    <div class="col-md-2">
    </div>
  </div>
</div>


</div>
<br><br><br><br><br>