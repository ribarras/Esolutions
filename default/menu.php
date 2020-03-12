            

            <!-- start: Main Menu -->
                
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">

                        <?php
                        if ($_SESSION['tipo'] == 'Creador de Tickets') {
                        echo '
                        <li>
                            <a href="/intranet/alarma/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="/intranet/alarma/tickets/listado/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Mis Tickets
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
                                    Crear Tickets
                                </span>
                            </a>
                        </li>   

                        <li>
                            <a href="/intranet/alarma/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Tickets
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/intranet/alarma/tickets/listado/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Mis Tickets
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
                            <a href="/intranet/alarma/admin/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets Admin
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
                                <i class="icon-bar-chart"></i>
                                <span class="hidden-tablet">
                                    Dashboard
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

