<!DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}"> 
 <!-- Bootstrap core CSS -->
 <link href="{{url('css/app.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/theme.css')}}">
<!--- Custom -->
<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="{{url('/home')}}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
              <li><a href="#">About</a></li>
              <li><a href="{{action('FeedbackController@index')}}">Contact</a></li>
            @if (auth()->user()->isAdmin == 1)  
              <li><a href="{{action('ArticlesController@index')}}">Admin</a></li>
            @endif
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php echo date("l jS \of F Y ");?></p>
          </div>
        </div>
      </div>
      <!--
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    -->
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li><a href="{{url('/preference')}}">Preferences</a></li>
          <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          </li>
          <!--
          <li><a href="pages/contact.html">Contact Us</a></li>
          <li><a href="pages/404.html">404 Page</a></li>
          -->
        </ul>
      </div>
    </nav>
  </section>

   @yield('content')

    <footer id="footer">
        <div class="footer_top">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInLeftBig">
                <h2>MoiBuzz 2018</h2>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInDown">
                <h2>Links</h2>
                <ul class="tag_nav">
                <li><a href="{{url('/preference')}}">Preferences</a></li>
                <li><a href="{{action('FeedbackController@index')}}">Contact</a></li>
                <li><a href="#">About</a></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="footer_widget wow fadeInRightBig">
                <h2>Contact</h2>
                <address>
                Moi University Media P.O BOX 70300 St.Suite 25 Town City 3333, Phone: 123-326-789 Fax: 123-546-567
                </address>
            </div>
            </div>
        </div>
        </div>
        <div class="footer_bottom">
        <p class="copyright">Copyright &copy; 2018 <a href="index.html">MoiBuzz</a></p>
        <p class="developer">Nzei Software Solutions</p>
        </div>
    </footer>
    </div>
<script src="{{url('js/jquery.min.js')}}"></script> 
<script src="{{url('js/wow.min.js')}}"></script> 
<script src="{{url('js/bootstrap.min.js')}}"></script> 
<script src="{{url('js/slick.min.js')}}"></script> 
<script src="{{url('js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{url('js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{url('js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{url('js/custom.js')}}"></script>
<script>
        var updateArticleStats = {
            Like: function (articleId) {
                document.querySelector('#likes-count-' + articleId).textContent++;
            },
        };

        var actOnArticle = function (event) {
            var articleId = event.target.dataset.articleId;
            var action = event.target.textContent;
            toggleButtonText[action](event.target);
            updateArticleStats[action](articleId);
            axios.post('/articles/' + articleId + '/act',
                { action: action });
        };
<script> 

</body>
</html>