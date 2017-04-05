<!DOCTYPE html>
<html lang="en">
	<head>
		
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Little Boxes Menu or Navigation with jQuery - radnomly animate the menu items to show content, accodion like boxes menu" />
        <meta name="keywords" content="jquery, boxes, menu, navigation, animate"/>
        <title>Juan pablo II</title>
        <link rel="icon" href="<?php echo base_url();?>assets/img/ti.ico"> 
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                background:#E4FFCF  no-repeat top center;
                font-family:Futura, "Century Gothic", AppleGothic, sans-serif;
                overflow:hidden;
            }
            h1{
                color:#fff;
                margin:40px 0px 20px 40px;
                text-shadow:1px 1px 1px #555;
                font-weight:normal;
            }
            a.back{
                position:absolute;
                bottom:5px;
                right:5px;
            }
            .reference{
                position:absolute;
                bottom:5px;
                left:5px;
            }
            .reference p a, a.back{
                text-transform:uppercase;
                text-shadow:1px 1px 1px #fff;
                color:#666;
                text-decoration:none;
                font-size:16px;
                font-weight:bold;
            }
            .reference p a:hover, a.back:hover{
                color:#000;
            }
        </style>
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/grid-framework.less" />
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen"/>
                
                
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
       <script  src="<?php echo base_url();?>assets/js/angular.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
