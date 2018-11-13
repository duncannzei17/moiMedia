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
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="storage/background/user.png" style="width:30px ;height:30px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->cluster}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{action('ArticlesController@index')}}"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Articles</span></a></li>
        <li><a class="app-menu__item" href="{{ url('/publisher') }}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Publish</span></a></li>
        <li><a class="app-menu__item" href="{{action('ArticlesController@create')}}"><i class="fa fa-bar-chart-o"></i><span class="app-menu__label">Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Article Editor</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Article Publisher</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            {!!Form::open(['method'=>'POST', 'action'=>['ArticlesController@update', $article->id], 'enctype'=>'multipart/form-data'])!!}
                <div class="form-group">
                  <label class="control-label">Article Title</label>
                  <input class="form-control" value="{{$article->article_title }}" name="title" type="text">
                </div>
                <div class="form-group">
                  <label class="control-label">Author Name</label>
                  <input class="form-control" value="{{$article->author_name }}" name="author_name" type="text">
                </div>
                <div class="form-group">
                  <label class="control-label">Article Content</label>
                  <textarea class="form-control" name="content" rows="16">{{$article->article_content}}</textarea>
                </div>
              <!--  <div class="form-group">
                  <label class="control-label">Upload article image</label>
                  <input class="form-control" name="image" type="file">
                </div>  -->
            </div>
            @if (session('update'))    
                    <div class="alert alert-success text-center">
                        {{Session::get('update')}}
                    </div>
                  @endif
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;
            </div>
            {{form::hidden('_method', 'PUT')}}
            {!!Form::close()!!}
          </div>
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
  </body>
</html>