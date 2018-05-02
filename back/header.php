<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $CONFIG["titulo"]; ?></title>

        <link href="<?php echo RAIZ(); ?>libs/fontawesome/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo RAIZ(); ?>libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo RAIZ(); ?>libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
        <link href="<?php echo RAIZ(); ?>libs/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo RAIZ(); ?>libs/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo HOME(); ?>recursos/css/tablas.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="<?php echo HOME(); ?>recursos/css/admin.css?v=<?php echo time(); ?>" rel="stylesheet">

        <script src="<?php echo RAIZ(); ?>libs/jquery/jquery.min.js"></script>
        <script src="<?php echo RAIZ(); ?>libs/bootstrap/bootstrap.bundle.min.js"></script>

        <script src="<?php echo RAIZ(); ?>libs/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo RAIZ(); ?>libs/datatables/dataTables.bootstrap4.js"></script>


        <script src="<?php echo RAIZ(); ?>libs/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo RAIZ(); ?>libs/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo RAIZ(); ?>libs/datatables/responsive.bootstrap.min.js"></script>
        
        <?php $CSSs = array(); $JSs = array(); ?>

        <script type="text/javascript">
            var RAIZ = "<?php echo RAIZ(); ?>";
            var PAGE = "<?php echo PAGE(); ?>";
            var HOME = RAIZ+PAGE;
            var AJAX = RAIZ+"ajaxb/"+PAGE;
        </script>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="<?php echo RAIZ(); ?>"><?php echo $CONFIG["titulo"]; ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                        <a class="nav-link" href="<?php echo HOME(); ?>">
                            <i class="fa fa-fw fa-home"></i>
                            <span class="nav-link-text">Inicio</span>
                        </a>
                    </li>
                    <?php
                        include dirname(__FILE__).'/menu.php';
                        if( count($MENUS) > 0 ){
                            foreach ($MENUS as $menu) {
                                echo '
                                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="'.$menu["titulo"].'">
                                        <a class="nav-link" href="'.HOME().$menu["path"].'">
                                            <i class="fa fa-fw '.$menu["icono"].'"></i>
                                            <span class="nav-link-text">'.$menu["titulo"].'</span>
                                        </a>
                                    </li>
                                ';
                            }
                        }
                    ?>
                        
                </ul>

                <ul class="navbar-nav ml-auto">
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
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#salir">
                        <i class="fa fa-fw fa-sign-out"></i>Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">