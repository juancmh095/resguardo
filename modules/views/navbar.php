<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?">Sistema de Resguardo</a>
            </div>
            <!-- /.navbar-header -->
 
            <ul class="nav navbar-top-links navbar-right">
               
                             
                <!--<li class="dropdown" id="users">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#user" href="">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" id="user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>-->
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           <!-- <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>-->
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i>Equipos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?module=equipos">Nuevos Equipos</a>
                                </li>
                                <li>
                                    <a href="index.php?module=C_E&data=all">Consultar</a>
                                </li>
                            </ul>
                        </li>
                        <li> <a href="index.php?module=emp"><i class="fa fa-user fa-fw"></i> Empleados</a> </li>
                        
                        <li>
                           <li> <a href="index.php?module=res"><i class="fa fa-edit fa-fw"></i> Resguardos</a> </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-folder-open-o"></i> Agregar otros datos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?module=areas">Areas</a>
                                </li>
                                <li>
                                    <a href="index.php?module=clave">Clave</a>
                                </li>
                                <li>
                                    <a href="index.php?module=marcas">Marcas</a>
                                </li>
                                <li>
                                    <a href="index.php?module=tipo">Tipo de equipo</a>
                                </li>
                                <li>
                                    <a href="index.php?module=tc">Tipo de combustible</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="index.php?module=com"><i class="fa fa-sitemap fa-fw"></i> Combustible</a>
                            
                        </li>
                        <li>
                           
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <br>
                    <br>
                    <center>
                    <a href="../modules/controller/login/logout.php" class="btn btn-danger" style="font-size: 20px;" title="Cerrar sesion"><span class="fa fa-power-off"></span></a>
                    <a href="index.php?module=user" class="btn btn-success" style="font-size: 20px;" title="Nuevo usuario"><span class="fa fa-plus-circle"></span></a>
					</center>
                </div>
                <!-- /.sidebar-collapse -->
                
            </div>
            <!-- /.navbar-static-side -->
        </nav>