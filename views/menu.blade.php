    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=getPublic();?>/">Pagina Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?=getPublic();?>/usuarios/login">Login</a>
                    </li>
                    <li>
                        <a href="<?=getPublic();?>/muro">Muro</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Carreras<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=getPublic();?>/carreras/agregar">Agregar Carrera</a></li>
                            <li><a href="<?=getPublic();?>/carreras/lista">Ver Carrera</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumnos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=getPublic();?>/alumnos/agregar">Agregar Alumnos</a></li>
                            <li><a href="<?=getPublic();?>/alumnos/lista">Ver Alumnos</a></li>
                        </ul>
                    </li>                                                                            
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
