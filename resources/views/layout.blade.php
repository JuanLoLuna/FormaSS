<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- JQUERY Datepicker css links --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">

    <title>@yield('header')</title>

  </head>

<body style="margin:0;padding:70px">
    <nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
        	
        	<div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#">Colegio de Ingenieros Biomédicos de México</a>
        	</div>

        	<div id="navbar" class="collapse navbar-collapse">
        	<ul class="nav navbar-nav"></ul>
        	</div>
      
      	</div>
    </nav>

    <div class="container">

    	<div class="jumbotron">
        	<h1>@yield('PageTitle')</h1>
        	<p class="lead">@yield('InitialMessage')</p>
      	</div>

      	<div>
      		<h1>@yield('SectionHeading')</h1>
      		<p class="lead">@yield('Q1')</p>
      	</div>
      	
      	@yield('FormContent')

    </div>

	@yield('footer')
</body>

</html>