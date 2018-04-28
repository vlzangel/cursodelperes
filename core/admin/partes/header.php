<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Panel de Control</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css?v=<?php echo time(); ?>" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        
        <link href="<?php echo WEB(); ?>lib/bootstrap/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

        <link href="<?php echo WEB(); ?>lib/datatables/dataTables.bootstrap4.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo WEB(); ?>lib/datatables/fixedHeader.bootstrap.min.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo WEB(); ?>lib/datatables/responsive.bootstrap.min.css?v=<?php echo time(); ?>" />

        <link href="<?php echo WEB(); ?>core/admin/recursos/css/tablas.css?v=<?php echo time(); ?>" rel="stylesheet">
        <link href="<?php echo WEB(); ?>core/admin/recursos/css/sb-admin.css?v=<?php echo time(); ?>" rel="stylesheet">
        
        <?php $CSSs = array(); $JSs = array(); ?>

        <script type="text/javascript">
            var HOME = "<?php echo HOME()."modulos".$PAGE; ?>";
        </script>
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">