<?php include("header.blade.php"); ?>
    <div class="container">
    	<?php if(getSession('mensaje')){ ?>
    		<div class="alert alert-success mensaje-timeout"><?=getAndRemoveSession('mensaje');?></div>
    	<?php } ?>
    	<?php 
        if(getSession('errores')){
          $errors = getAndRemoveSession('errores');
      	?>
    		<div class="alert alert-danger">
    			<?php foreach($errors as $error){ ?>
    				<p><?=$error;?></p> 
    			<?php } ?>
    		</div>
    	<?php } ?>		    
        <div class="row">            
            <div class="column col-md-12">
                <div class="well">                
                    <?php
		              Form::openForFileUpload("post",getPublic()."/usuarios/actualizaPerfil",$usuario);                
		            ?>
		              <img src="<?=getUploadFolder();?>/<?=$usuario->imagen_perfil;?>" alt="">
		              <?php Form::field('text','nombre'); ?>              
		              <?php Form::field('upload','imagen_perfil'); ?>              
		              <button type="submit" class="btn btn-default">Guardar</button>
		            <?php Form::close(); ?>
                </div>
                                
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
<?php include("footer.blade.php"); ?>