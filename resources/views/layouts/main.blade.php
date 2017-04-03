<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <style>
        p, span{
            word-wrap: break-word;
        }
    </style>
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">Portal Berita</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @foreach( \App\Category::all() as $category )
                    <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(auth()->check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('post.index') }}">Post</a>
                            </li>
                            <li><a href="{{ route('category.index') }}">Category</a>
                            </li>
                            <li><a href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <a href="{{ route('login') }}">
                        <button class="btn btn-default" style="margin-top: 8px;">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn btn-success" style="margin-top: 8px;">Register</button>
                    </a>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        @yield('main')
    </div>
</body>

</html>