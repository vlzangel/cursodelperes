<?php
    function WEB(){
        global $CONFIG;
        return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/".$CONFIG["home"]."/";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Iniciar Sesi&oacute;n</title>

        <link href="<?php echo WEB(); ?>lib/bootstrap/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="<?php echo WEB(); ?>admin/recursos/css/sb-admin.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="<?php echo WEB(); ?>admin/recursos/css/login.css?v=<?php echo time(); ?>" rel="stylesheet">

        <script type="text/javascript">
            var HOME = "<?php echo WEB(); ?>";
        </script>
        
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Iniciar Sesi&oacute;n</div>
                <div class="card-body">
                    <form id="login">
                        <div class="form-group">
                            <label for="user">E-mail</label>
                            <input class="form-control" id="user" name="user" type="text" title="Ex: example@mail.com" placeholder="Ingresar E-mail" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"  required />
                        </div>
                        <div class="form-group">
                            <label for="pass">Contrase&ntilde;a</label>
                            <input class="form-control" id="pass" name="pass" type="password" placeholder="Contrase&ntilde;a" required />
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-primary btn-block" value="Ingresar" />
                    </form>
                    <div class="login_error">
                        Error, email o contrase&ntilde;a invalido
                    </div>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="<?php echo WEB(); ?>" >Ir a la WEB</a>
                        <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
                        <!-- <a class="d-block small" href="forgot-password.html">¿Se te olvidó tu contraseña?</a> -->
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo WEB(); ?>lib/jquery/jquery.min.js?v=<?php echo time(); ?>"></script>
        <script src="<?php echo WEB(); ?>lib/bootstrap/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>

        <script src="<?php echo WEB(); ?>admin/recursos/js/login.js?v=<?php echo time(); ?>"></script>

    </body>
</html>
