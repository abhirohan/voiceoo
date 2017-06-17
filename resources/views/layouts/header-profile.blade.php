<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
    <script src="{{ route('basepath') }}/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Theme Styles CSS -->
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/bootstrap-select.css">

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/mediaelement-playlist-plugin.min.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/mediaelementplayer.css">

	<!-- Lightbox popup script-->
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/magnific-popup.css">



</head>
<body>
@include('layouts.navbar-profile')