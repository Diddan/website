<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.2 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="fr"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="fr"><![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
	<!--<![endif]-->	<!-- start: HEAD -->
	<head>
	<?php
        // portal detection => portal needs an adapted version of the layout
        $isPortal = false;
        if($this->getParam("controller") == "content" && $this->getParam("action") == "portal") {
            $isPortal = true;
        }

        // output the collected meta-data
        if(!$this->document) {
            // use "home" document as default if no document is present
            $this->document = Document::getById(1);
        }

        if($this->document->getTitle()) {
            // use the manually set title if available
            $this->headTitle()->set($this->document->getTitle());
        }

        if($this->document->getDescription()) {
            // use the manually set description if available
            $this->headMeta()->appendName('description', $this->document->getDescription());
        }

        $this->headTitle()->append("ResaExpress");
        $this->headTitle()->setSeparator(" : ");

        echo $this->headTitle();
        echo $this->headMeta();
    ?>

		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		

		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" media="all" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/extensions/TableTools/css/dataTables.tableTools.mod.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/extensions/TableTools/css/dataTables.tableTools.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/DataTables/extensions/Editor/css/dataTables.editor.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-modal/css/bootstrap-modal.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/select2/select2.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-social-buttons/bootstrap-social.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/styles.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/extra/extradids.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/styles-responsive.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/plugins.css">
		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/themes/theme-style8.css" type="text/css" id="skin_color">

		<link rel="stylesheet" href="<?= PIMCORE_WEBSITE_LAYOUTS?>/assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<!-- end: HEAD -->