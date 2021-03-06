<?php $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/'); ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo __('global.manage'); ?> <?php echo Config::meta('sitename'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo asset('dino/views/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css'); ?>" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo asset('dino/views/assets/global/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/plugins/select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo asset('dino/views/assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo asset('dino/views/assets/pages/css/login-4.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo asset('dino/views/assets/layouts/layout3/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('dino/views/assets/layouts/layout3/css/themes/default.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo asset('dino/views/assets/layouts/layout3/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.png" />

  	</head>
    <!-- END HEAD -->
    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html"> <img src="<?php echo asset('dino/views/assets/pages/img/logo-big.png'); ?>" alt="" style="height: 160px;"/> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content text-center" style="padding-bottom: 45px;">
            
            <h3 class="form-title"><?php echo __('global.welcome_to_dino_lets_go'); ?></h3>
            <a href="<?php echo $base . '/install/index.php'; ?>" class="btn default btn-outline"><?php echo __('global.run_the_installer'); ?></a>
            
        </div>
	    
	    <!--[if lt IE 9]>
		<script src="<?php echo asset('dino/views/assets/global/plugins/respond.min.js');?>"></script>
		<script src="<?php echo asset('dino/views/assets/global/plugins/excanvas.min.js');?>"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/js.cookie.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/uniform/jquery.uniform.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo asset('dino/views/assets/global/plugins/moment.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/morris/morris.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/morris/raphael-min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/counterup/jquery.waypoints.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/counterup/jquery.counterup.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/fullcalendar/fullcalendar.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/flot/jquery.flot.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/flot/jquery.flot.resize.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/flot/jquery.flot.categories.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery.sparkline.min.js');?>" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo asset('dino/views/assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo asset('dino/views/assets/pages/scripts/dashboard.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/jquery-validation/js/additional-methods.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/select2/js/select2.full.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/global/plugins/backstretch/jquery.backstretch.min.js');?>" type="text/javascript"></script>
        
        <script src="<?php echo asset('dino/views/assets/layouts/layout3/scripts/layout.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/layouts/layout3/scripts/demo.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo asset('dino/views/assets/layouts/global/scripts/quick-sidebar.min.js');?>" type="text/javascript"></script>

        <script src="<?php echo asset('dino/views/assets/pages/scripts/login-4.min.js'); ?>" type="text/javascript"></script>
	    
	    <script>
			(function(d) {
				var v = new Date().getTimezoneOffset();
				d.cookie = "dino-install-timezone=" + v + "; path=/";
			}(document));
		</script>
    </body>
</html>