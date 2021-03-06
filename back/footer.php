                    </div>
                </div>
            </div>
            
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © <?php echo $CONFIG["titulo"]; ?> 2018</small>
                    </div>
                </div>
            </footer>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="salir" tabindex="-1" role="dialog" aria-labelledby="salirLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="salirLabel">¿Listo para salir?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleccione <strong>"Salir"</strong> a continuaci&oacute;n si está listo para finalizar su sesi&oacute;n actual.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo HOME()."ajax/logout.php"; ?>">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
 
            <!-- Custom scripts for all pages-->
            <script src="<?php echo HOME(); ?>recursos/js/admin.js?v=<?php echo time(); ?>"></script>

            <?php
                if( count($CSSs) > 0 ){
                    foreach ($CSSs as $css) {
                        echo '<link href="'.HOME().'recursos/css/'.$PAGE.$css.'.css?v='.time().'" rel="stylesheet">';
                    }
                }
                if( count($JSs) > 0 ){
                    foreach ($JSs as $js) {
                        echo '<script src="'.HOME().'recursos/js/'.$PAGE.$js.'.js?v='.time().'"></script>';
                    }
                }
            ?>
        </div>
        
    </body>

</html>