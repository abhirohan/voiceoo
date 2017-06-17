<!DOCTYPE html>
<html lang="en">
<head>

	<title>Voiceoo - Voice your thoughts</title>

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

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="{{ route('basepath') }}/css/bootstrap-select.css">


</head>

<body class="landing-page">

<div class="content-bg-wrap">
	<div class="content-bg"></div>
</div>


@include('layouts.navbar')
