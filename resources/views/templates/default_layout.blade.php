<!DOCTYPE html>
<html>
<!-- head -->

@include('inc.head')

<!-- end of head -->
<body>
<!-- nav  -->



@include('inc.nav')



<!-- end nav -->
<!-- sidebar -->


@include('inc.sidebar')


	<!--/.sidebar-->


	<!-- main Content -->
	

 @yield('content')

		
	<!-- end main Content-->
	
	<!-- script -->


@include('inc.script')

	<!-- end script -->
		
</body>
</html>