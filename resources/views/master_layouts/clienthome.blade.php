<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>@yield('title')</title>
	  <meta charset="utf-8">

		<!-- ====================CSS================== -->
	
	  <link href="{!! URL::asset('../css/materialize.css') !!}" type="text/css" rel="stylesheet"/>
	  <link href="{{!! URL::asset('../css/materialize.min.css') !!}" rel="stylesheet" type="text/css" media="screen,projection" />
	  <link href="{!! URL::asset('../css/style.css') !!}" type="text/css" rel="stylesheet"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="{!! URL::asset('../css/animate.css') !!}" type="text/css" rel="stylesheet"/>
	  
	  <script type="text/javascript" src="{!! URL::asset('../js/jquery-2.2.1.js') !!}"></script>
<!--	  <script type="text/javascript" src="{{!! URL::asset('../js/materialize.js') !!}}"></script>-->
	  <script type="text/javascript" src="{!! URL::asset('../js/materialize.min.js') !!}"></script>
	  <script type="text/javascript" src="{!! URL::asset('../js/init.js') !!}"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>  
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		 $(document).ready(function(){
      	$('.slider').slider({full_width: true});
    	});
	
	</script>
    
</head>
<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
  <nav class="orange" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img width="79px" height="65px" src="{!! URL::asset('../images/PCGlogo.png') !!}"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/client/clientmain">Main</a></li>
		<li><a href="/client/viewpets">Tools</a></li>
		<li><a href="/client/clientservices">Services</a></li>
		<li><a href="/client/schedule">Schedule</a></li>
		<li><div class="fb-share-button" data-href="http://paredes-rosello.herokuapp.com/main/homepage" data-layout="button_count"></div></li>
		
		<li><a class="red" href = "{{action('ClientMainController@destroy')}}">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="/main/homepage">Main</a></li>
		<li><a href="/main/offeredservices">Services</a></li>
		<li><a href="/client/schedule">Schedule</a></li>
		<li><a class="red" onclick = "test">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
@yield('content')
    </body>
    
