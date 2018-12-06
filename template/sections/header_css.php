<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php   $o__user = new user();
$user_det=$o__user->getOneuser($_SESSION['b2b_kpr_rech_id']);
$o__admin = new admin();
     $url =  $_SERVER["HTTP_HOST"];
$uell = explode(".",$url);

$getdata = $o__admin->getdatabyurl('http://'.$uell[1].'.'.$uell[2]);

?>
    <head>
        <meta charset="utf-8">

        <title><?php echo $getdata->cmpy_name; ?></title>

        
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo Fcss;?>/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo Fcss;?>/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo Fcss;?>/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo Fcss;?>/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo Fjs;?>/vendor/modernizr.min.js"></script>
         <script src="<?php echo Fjs;?>/vendor/jquery.min.js"></script>
    </head>