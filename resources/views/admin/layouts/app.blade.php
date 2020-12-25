<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Asta - Bootstrap 4 Responsive Clean Admin HTML5 Dashboard Template</title>

	@include('admin.frontend.css')

	</head>

	<body class="app ">

		<div id="spinner"></div>

		<div id="app" class="page">
			<div class="main-wrapper page-main" >
				@include('admin.includes.navbar')
			  @include('admin.includes.sidebar')
            <div class="app-content">
                @yield('content')
            </div>



                @include('admin.includes.footer')


			</div>
		</div>

	@include('admin.frontend.js')
	</body>
</html>
