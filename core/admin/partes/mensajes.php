<?php 
    $mensajes = $DB->get_results("SELECT * FROM mensajes WHERE status = 'Sin leer' ");
    if( $mensajes !== false ){ ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-envelope"></i>
                <span class="d-lg-none">Mensajes:
                    <span class="badge badge-pill badge-primary"><?php echo count($mensajes); ?> Nuevos</span>
                </span>
                <span class="indicator text-primary d-none d-lg-block">
                    <i class="fa fa-fw fa-circle"></i>
                </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Nuevos Mensajes:</h6>
                <div class="dropdown-divider"></div>
                <?php
                    foreach ($mensajes as $mensaje) {
                        $hora = date("h:i A", strtotime($mensaje->fecha) );
                        echo '
                            <a class="dropdown-item" href="#">
                                <strong>'.$mensaje->nombre.'</strong>
                                <span class="small float-right text-muted">'.$hora.'</span>
                                <div class="dropdown-message small">'.substr($mensaje->comentarios, 0, 30).'...</div>
                            </a>
                        ';
                    }
                ?>
                <a class="dropdown-item small" href="<?php echo HOME(); ?>mensajes">Ver todos los mensajes</a>
            </div>
        </li> <?php 
    }
?>