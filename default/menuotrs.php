            

            <!-- start: Main Menu -->
                
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul style="font-size: 12px;" class="nav nav-tabs nav-stacked main-menu">

                        <?php
                        if ($_SESSION['tipo'] == 'Creador de Tickets') {
                        echo '
                        <li>
                            <a href="/intranet/alarma/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Nueva Solicitud
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/intranet/alarma/tickets/listado/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Mis Solicitudes
                                </span>
                            </a>
                        </li>
                        ';
                        } elseif ($_SESSION['tipo'] == 'Alarma') {
                        echo '
                        <li>
                            <a href="/intranet/alarma/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Tickets
                                </span>
                            </a>
                        </li>
                        ';
                        } else {
                        echo '

                        <li>
                            <a href="/intranet/alarma/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Nueva Solicitud
                                </span>
                            </a>
                        </li>   

                        <li>
                            <a href="/intranet/alarma/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Solicitudes
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/tickets/listado/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Mis Solicitudes
                                </span>
                            </a>
                        </li>                     
                        
                        

                        

                        <li>
                            <a href="/intranet/alarma/usuarios/">
                                <i class="icon-user"></i>
                                <span class="hidden-tablet">
                                    Usuarios
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/solicitudes/">
                                <i class="icon-list"></i>
                                <span class="hidden-tablet">
                                    Tipos de Solicitudes
                                </span>
                            </a>
                        </li>

                        

                        <li>
                            <a href="/intranet/alarma/admin/">
                                <i class="icon-wrench"></i>
                                <span class="hidden-tablet">
                                    Administrador
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/dashboard/">
                                <i class="icon-plus-sign"></i>
                                <span class="hidden-tablet">
                                    Base de Conocimiento
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/dashboard/">
                                <i class="icon-dashboard"></i>
                                <span class="hidden-tablet">
                                    Nivel de Servicio (SLA)
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/intranet/alarma/dashboard/">
                                <i class="icon-bar-chart"></i>
                                <span class="hidden-tablet">
                                    Dashboard
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/dashboard/">
                                <i class="icon-book"></i>
                                <span class="hidden-tablet">
                                    Manual
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/dashboard/">
                                <i class="icon-reorder"></i>
                                <span class="hidden-tablet">
                                    FAQ
                                </span>
                            </a>
                        </li>

                        
                        ';
                        }
                        ?>
                        

                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->

