<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
        <link rel="icon" href="" type="image/x-icon"/>
        <link rel="shortcut icon" href="" type="image/x-icon"/>
        <link type="text/css" href="<?php echo base_url(); ?>system/css/flick/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>system/css/default.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>system/css/jquery.dataTables.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo base_url(); ?>system/css/jquery.dataTables_themeroller.css" rel="stylesheet" />
        <title>quadRigis</title>
    </head>
    <body>
        <script src="<?php echo base_url(); ?>system/js/jquery-1.7.2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>system/js/jquery-ui-1.8.19.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>system/js/date.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>system/js/jquery.blockUI.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>system/js/funk.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>system/js/jquery.dataTables.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>system/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>system/js/jquery.validate.unobtrusive.min.js" type="text/javascript"> </script>
        
        <div id="bodyContainer">
            <?php $this->load->view($main_content); ?>
        </div>
    </body>
</html>