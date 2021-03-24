<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-info">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light rounded mt-5">
				  <a class="navbar-brand" href="#">Brand</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Gallery</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Event</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				    	<div class="col-auto pl-0">
					      <div class="input-group">
					        <div class="input-group-prepend">
					          <div class="input-group-text"><i class="fa fa-user"></i></div>
					        </div>
					        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
					      </div>
					    </div>
					    <div class="col-auto pl-0">
					      <div class="input-group">
					        <div class="input-group-prepend">
					          <div class="input-group-text"><i class="fa fa-lock"></i></div>
					        </div>
					        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
					      </div>
					    </div>
					    <div class="col-auto pl-0 pr-0">
				      		<button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
				      	</div>
				    </form>
				  </div>
				</nav>	
			</div>
        </div>

        <main class="py-4">
			<--@yield('content')
			
        </main>
        
	</div>
  </body>
</html>
