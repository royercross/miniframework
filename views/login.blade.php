<?php include("header.blade.php"); ?>
    <div class="container">
        <!-- Call to Action Section -->
        <div class="well">
        	<div class="row">
        		<div class="column col-md-6 col-md-offset-3">
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
        		</div>
        	</div>	        
            <div class="row">
            	<div class="column col-md-6 col-md-offset-3">
	              <?php
		          	Form::open("post",getPublic()."/usuarios/loginpost");
		          ?>
	              <?php Form::field('text','correo'); ?>              
	              <?php Form::field('text','password'); ?>              	              
	              <button type="submit" class="btn btn-default">Entrar</button>
	            <?php Form::close(); ?>
	                </div>
	            </div>
	        </div>
        </div>

    </div>
<?php include("footer.blade.php"); ?>