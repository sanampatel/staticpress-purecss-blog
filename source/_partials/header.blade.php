<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('head')

	<link rel="icon" href="{{ $page->mainUrl }}/asset/images/favicon.ico">

	{{-- Pure CSS --}}
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ $page->mainUrl }}/asset/build/css/main.css">

	<style>
		.brand_logo {
			width: 210px; 
			background: url(/images/{{ basename($settings->setting->sitelogo) }}) no-repeat; 
			background-size: 210px;
			text-indent: -9999px;
			margin: 10px 0 0 0;
			vertical-align: middle;
			height: 60px;
			margin-left: 0px;
		}
		.bg-grey-lightest {
			background-color: rgb(249, 249, 249);
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	{{-- Font awesome --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.css">
	@include('_custom.header')
</head>
<body>
	<div id="layout" class="pure-g">
	
			@include('_partials.nav')
