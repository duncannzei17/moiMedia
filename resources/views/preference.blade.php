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
    <!--- Custom -->
    <link rel="stylesheet" type="text/css" href="{{url('css/slidefolio.css')}}">
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
        <h2><a href="#services" id="arrow" style="color:white"><span ><i class="fa fa-arrow-down"></i></span></a></h2>
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
    <!-- /Form 
    <form method="POST" action="preference.php"  id="contact-form" class="form-horizontal">
    -->
{!!Form::open(['method'=>'POST', 'action'=>'PreferencesController@store'])!!}    
  <fieldset>	
      <!-- Services -->
      <div id="services" class="contact">
      <div class="container">
      <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center" id="services">
              <h2>Select Your Preferences</h2>
              <hr>
            </div>
          </div>
          <div class="row">
        <div class="col-md-4 text-center">
              <div class="service-item">          
                <h3>Academia</h3>
          <input type="radio" name="academia" value="students_affairs">Students Affairs
          <br>
          <input type="radio" name="academia" value="students_council">Student council
              </div>
            </div>
          <div class="col-md-4 text-center">
              <div class="service-item">
                <h3>News Room</h3>
          <input type="radio" name="news_room" value="horizon">Horizon
          <br>
          <input type="radio" name="news_room" value="3rd_eye">3rd Eye
              </div>
            </div>
          <div class="col-md-4 text-center">
              <div class="service-item">          
                <h3>Leisure</h3>
          <input type="radio" name="leisure" value="fashion">Fashion/Glamour
          <br>
          <input type="radio" name="leisure" value="techy">Technology/Geeky
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="service-item">
                <h3>Clubs</h3>    
          <input type="radio" name="clubs" value="music">Music/Drama
          <br>
          <input type="radio" name="clubs" value="sports">Sports
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="service-item">          
                <h3>Community</h3>
          <input type="radio" name="community" value="christian_union">Grace chapel
          <br>
          <input type="radio" name="community" value="grace_chapel">Christian union
          <br>
          <input type="radio" name="community" value="st.michael">Catholic
              </div>
            </div>      
      <div class="col-sm-offset-4 col-sm-8">
      {{Form::submit('Update',['class'=>'btn btn-success'])}}
      <br>
      </div>
      </div>
      </fieldset>
{!!Form::close()!!}    
   
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