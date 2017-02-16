<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
     <div id="app">
        <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       KHICT CMS
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Username</a></li>
                            <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class = "row">
        	<div class="col-md-3 left-side">
		
			</div>
	        <div class="col-md-9 right-side">
				 <div class="row">
	                <div class="col-lg-12">
	                    <h1>Coment Management Systems</h1>
	                </div>
	                
	           </div>
				<div class="row">  
					@yield('content')  
	            </div>
	            
	        </div>
        </div>
		
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
