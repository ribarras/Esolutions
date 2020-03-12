            

            <!-- start: Main Menu -->
                
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">

                        <?php
                        if ($_SESSION['tipo'] == 'Super Administrador') {

                            echo '

                        <li>
                            <a href="/eweb2019/sigi/dashboard/">
                                <i class="icon-bar-chart"></i>
                                <span class="hidden-tablet">
                                    Dashboard
                                </span>
                            </a>
                        </li> 
                        
                        <li>
                            <a href="/eweb2019/sigi/admin/">
                                <i class="icon-wrench"></i>
                                <span class="hidden-tablet">
                                    Administrador
                                </span>
                            </a>
                        </li>  


                        <li>
                            <a href="/eweb2019/sigi/usuarios/">
                                <i class="icon-user"></i>
                                <span class="hidden-tablet">
                                    Usuarios
                                </span>
                            </a>
                        </li>     

                        <li>
                            <a href="/eweb2019/sigi/departamentos/">
                                <i class="icon-envelope-alt"></i>
                                <span class="hidden-tablet">
                                    Departamentos
                                </span>
                            </a>
                        </li> 
                        
                        <li>
                            <a href="/eweb2019/sigi/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets
                                </span>
                            </a>
                        </li> 

                        <li>
                            <a href="/eweb2019/sigi/admin/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets Admin
                                </span>
                            </a>
                        </li>                 

                        <li>
                            <a href="/eweb2019/sigi/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Tickets
                                </span>
                            </a>
                        </li> 

                        <li>
                            <a href="/eweb2019/sigi/tickets/listado/">
                                <i class="icon-list-alt"></i>
                                <span class="hidden-tablet">
                                    Mis Tickets
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/conocimiento/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Base de Conocimiento
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/contacto/">
                                <i class="icon-book"></i>
                                <span class="hidden-tablet">
                                    Contacto
                                </span>
                            </a>
                        </li>

                        ';
                        
                        } elseif ($_SESSION['tipo'] == 'Creador') {
                        echo '
                       
                        <li>
                            <a href="/eweb2019/sigi/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets
                                </span>
                            </a>
                        </li> 

                        <li>
                            <a href="/eweb2019/sigi/tickets/listado/">
                                <i class="icon-list-alt"></i>
                                <span class="hidden-tablet">
                                    Mis Tickets
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/conocimiento/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Base de Conocimiento
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/contacto/">
                                <i class="icon-book"></i>
                                <span class="hidden-tablet">
                                    Contacto
                                </span>
                            </a>
                        </li>
                        ';
                        } elseif ($_SESSION['tipo'] == 'Gestionador') {
                        echo '               

                        <li>
                            <a href="/eweb2019/sigi/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Tickets
                                </span>
                            </a>
                        </li> 


                        <li>
                            <a href="/eweb2019/sigi/conocimiento/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Base de Conocimiento
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/contacto/">
                                <i class="icon-book"></i>
                                <span class="hidden-tablet">
                                    Contacto
                                </span>
                            </a>
                        </li>
                        ';
                        }  else {
                            echo '
                        <li>
                            <a href="/intranet/giatc/dashboard/">
                                <i class="icon-bar-chart"></i>
                                <span class="hidden-tablet">
                                    Dashboard
                                </span>
                            </a>
                        </li> 
                        
                        <li>
                            <a href="/eweb2019/sigi/admin/">
                                <i class="icon-wrench"></i>
                                <span class="hidden-tablet">
                                    Administrador
                                </span>
                            </a>
                        </li>  
                        
                        <li>
                            <a href="/eweb2019/sigi/tickets/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets
                                </span>
                            </a>
                        </li> 

                        <li>
                            <a href="/eweb2019/sigi/admin/crear/">
                                <i class="icon-plus"></i>
                                <span class="hidden-tablet">
                                    Crear Tickets Admin
                                </span>
                            </a>
                        </li>                 

                        <li>
                            <a href="/eweb2019/sigi/tickets/">
                                <i class="icon-check"></i>
                                <span class="hidden-tablet">
                                    Gestionar Tickets
                                </span>
                            </a>
                        </li> 

                        <li>
                            <a href="/eweb2019/sigi/tickets/listado/">
                                <i class="icon-list-alt"></i>
                                <span class="hidden-tablet">
                                    Mis Tickets
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/conocimiento/">
                                <i class="icon-tasks"></i>
                                <span class="hidden-tablet">
                                    Base de Conocimiento
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="/eweb2019/sigi/contacto/">
                                <i class="icon-book"></i>
                                <span class="hidden-tablet">
                                    Contacto
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

