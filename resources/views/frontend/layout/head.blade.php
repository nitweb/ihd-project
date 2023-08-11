<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	
	@yield('meta')

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	

	<!-- Favicon -->
	<link rel="shortcut icon" class="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}" />

	<!-- 
  Essential stylesheets
  =====================================-->
	<link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/icofont/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick-theme.css') }}">

	{{-- Swiper JS --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>