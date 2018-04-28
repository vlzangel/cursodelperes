                    </div>
                </div>
            </div>
            
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © M.C. INT'L TRANSPORT 2018</small>
                    </div>
                </div>
            </footer>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Seleccione <strong>"Salir"</strong> a continuaci&oacute;n si está listo para finalizar su sesi&oacute;n actual.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo HOME()."admin/recursos/ajax/logout.php"; ?>">Salir</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="<?php echo HOME(); ?>admin/recursos/vendor/jquery/jquery.min.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo HOME(); ?>admin/recursos/vendor/bootstrap/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo HOME(); ?>admin/recursos/vendor/jquery-easing/jquery.easing.min.js?v=<?php echo time(); ?>"></script>

            <script src="<?php echo HOME(); ?>admin/recursos/vendor/datatables/jquery.dataTables.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo HOME(); ?>admin/recursos/vendor/datatables/dataTables.bootstrap4.js?v=<?php echo time(); ?>"></script>
            <!-- Custom scripts for all pages-->
            <script src="<?php echo HOME(); ?>admin/recursos/js/sb-admin.js?v=<?php echo time(); ?>"></script>

            <?php
                foreach ($CSSs as $css) {
                    echo '<link href="'.HOME().'modulos'.$PAGE.$css.'.css?v='.time().'" rel="stylesheet">';
                }
                foreach ($JSs as $js) {
                    echo '<script src="'.HOME().'modulos'.$PAGE.$js.'.js?v='.time().'"></script>';
                }
            ?>
        </div>
        
    </body>

</html>