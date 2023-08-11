@include('frontend.layout.head')

<body id="top">

	@include('frontend.layout.header')

	<!-- Slider Start -->
	@yield('user')
	<!-- footer Start -->
	@include('frontend.layout.footer')



	<!-- 
    Essential Scripts
    =====================================-->
	@include('frontend.layout.script')

</body>


</html>