<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Panel de Control</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="<?php echo WEB(); ?>">
                    <i class="fa fa-fw fa-globe"></i>
                    <span class="nav-link-text">WEB</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="<?php echo HOME(); ?>">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Inicio</span>
                </a>
            </li>
            <?php
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

       <!--  <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul> -->

        <ul class="navbar-nav ml-auto">