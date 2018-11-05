<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MoiBuzz</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/app.css')}}" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{url('css/slidefolio.css')}}">
	<!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
	     <img class="img-rounded" alt="Company Logo" src="{{ asset('storage/background/logo.jpg') }}" style ="height:150px ; width:180px"/>
        <h2><em>m_o_i_b_u_z_z</em></h2>
        <h2><a href="#navBar" id="arrow" style="color:white"><span ><i class="fa fa-arrow-down"></i></span></a></h2>
        <div class="container">
          <!--Add paragraph here-->
        </div>
    <!--
		 <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
              <li><i class="fa fa-google-plus fa-3x"></i></li>
			  <li><i class="fa fa-linkedin fa-3x"></i></li>
			   <li><i class="fa fa-pinterest fa-3x"></i></li>
            </ul>	
			<br>
      <a href="#about" class="btn btn-top">Learn More</a>
    -->
      </div>
    </div>
    <!-- /Header Area -->
	  <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
    <div class="container" id="navBar">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a href="#" id="navBar" class="navbar-brand">MoiBuzz</a>
      </div>
      <div class="collapse navbar-collapse" id="mobilemenu">

        <ul class="nav navbar-nav navbar-right text-center">
            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; Login</a></li>
            <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>&nbsp; Register</a></li>
        </ul>
      </div>
  <!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
           <h2>Welcome</h2>
           <em>Copyright &copy;  2018</em>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    
   <script src="{{url('js/jquery.min.js')}}"></script>
	<script src="{{url('js/jquery-scrolltofixed-min.js')}}"></script>
	<script src="{{url('js/jquery.vegas.js')}}"></script>
	<script src="{{url('js/jquery.mixitup.min.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'{{ asset('storage/background/back1.jpg') }}', fade:2000 },
	 { src:'{{ asset('storage/background/back2.jpg') }}', fade:2000 },
    { src:'{{ asset('storage/background/back3.jpg') }}', fade:2000 },
	 { src:'{{ asset('storage/background/back4.jpg') }}', fade:2000 },
    { src:'{{ asset('storage/background/back5.jpg') }}', fade:2000 },
    { src:'{{ asset('storage/background/back5.jpg') }}', fade:2000 },
	 { src:'{{ asset('storage/background/back6.jpg') }}', fade:2000 },
	   { src:'{{ asset('storage/background/back7.jpg') }}', fade:2000 }
	   
  ]
})('overlay', {
src:'{{ asset('storage/background/overlay.png') }}'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>