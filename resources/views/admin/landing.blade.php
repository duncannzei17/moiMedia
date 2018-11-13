<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="">

    <title>admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{url('/home')}}">MoiBuzz</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
 
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="storage/background/user.png" style="width:30px ;height:30px"  alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->cluster}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{action('ArticlesController@index')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Articles</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/publisher') }}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Publish</span></a></li>
        <li><a class="app-menu__item" href="{{action('ArticlesController@create')}}"><i class="app-menu__icon fa fa-bar-chart-o"></i><span class="app-menu__label">Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Article Posts</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">Article Posts</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
                @if (session('del'))    
                    <div class="alert alert-danger text-center">
                        {{Session::get('del')}}
                    </div>
                  @endif
              @if(count($articles)>0)
                @foreach($articles as $article)
                   <div class="tile">
                        <p><strong>Title:</strong> {{$article->article_title}}</p>
                        <p><strong>Author:</strong> {{$article->author_name}}</p>
                        <p><strong>Image:</strong> {{$article->image}}</p>
                        <p><strong>Date:</strong> {{$article->created_at}}</p>
                        <a href="{{action('ArticlesController@edit', $article->id)}}" class="btn btn-primary">Edit</a>
                        {!!Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right'])!!}  
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger pull-right'])}}
                        {!!Form::close()!!}  
                        <hr>
                   </div>
                @endforeach
              @else
                  <div class="well">You haven't published an article yet</div>
              @endif          
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>