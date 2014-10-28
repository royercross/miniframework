<?php include(ROOT . "/views/header.blade.php"); ?>
    <div class="container">
    	<?php if(isset($mensaje)){ ?>
    		<div class="alert alert-success mensaje-timeout"><?=$mensaje;?></div>
    	<?php } ?>
    	<?php if(isset($errors)){ ?>
    		<div class="alert alert-danger">
    			<?php foreach($errors as $error){ ?>
    				<p><?=$error;?></p> 
    			<?php } ?>
    		</div>
    	<?php } ?>
        <div class="well">
            <form role="form" method="post" action="<?=getPublic();?>/alumnos/guardar">                
              <?php field('text','nombre'); ?>              
              <?php field('text','apellido_paterno'); ?>              
              <?php field('text','apellido_materno'); ?>              
              <?php field('text','fecha_nacimiento'); ?>           

              <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
    </div>
<?php include( ROOT . "/views/footer.blade.php"); ?>




