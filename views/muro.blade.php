<?php include("header.blade.php"); ?>
    <div class="container">
        <div class="row">
            <div class="column col-md-3">
                <div class="well">
                    Muro Izquierda
                </div>
            </div>
            <div class="column col-md-7">
                <div class="well">
                    <div class="publicar">
                        <p>Realizar una publicación</p>
                        <div class="row">
                            <div class="column col-md-9">
                                <form action="<?=getPublic();?>/usuarios/publicar" method="post">
                                    <input name="mensaje" class="form-control" type="text" placeholder="¿En que estas pensando?">
                                </form>
                            </div>
                            <div class="column col-md-3">
                                <button class="btn btn-primary">Publicar</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php foreach($publicaciones as $publicacion){ ?>

                    <div class="well">
                        <div class="publicacion">
                            <div class="row">
                                <div class="column col-md-2">
                                    <img src="<?=getPublic();?>/uploads/<?=$publicacion['usuarios_id'];?>/perfil.jpg" alt="" class="imagen-perfil-muro">
                                </div>
                                <div class="column col-md-10">
                                    <span class="nombre-usuario"><?=$publicacion['nombre'];?></span>
                                    <span class="fecha-publicacion">Publicado el <?=$publicacion['fecha'];?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="comentario">
                                    <p><?=$publicacion['mensaje'];?></p>
                                </div>
                            </div>
                        </div>      
                    </div>
                <?php } ?>          
                
            </div>
            <div class="column col-md-2">
                <div class="well">
                    Muro Derecha
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