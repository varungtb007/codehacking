<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


        <link href="{{asset('css/libs.css')}}" rel="stylesheet">
</head>
<body id="admin-page">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-header" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
</nav>


<div class="navbar-default sidebar" role="navigation" >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                    </span>
                </div>
            </li>
        </ul>
        <ul class="nav" id="side-menu">
            <li>
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
        </ul>
        <ul class="nav nav-list">
            <li>
                <a href="#" class="accordion-heading" data-toggle="collapse" data-target="#submenu">
                    <i class="fa fa-wrench fa-fw"></i>Users<b class="caret"></b>
                </a>
                <ul class="nav nav-list collapse" id="submenu">
                    <li><a href="{{route('users.index')}}"><i class="fa fa-wrench fa-fw"></i>All Users</a></li>
                    <li><a href="{{route('users.create')}}"><i class="fa fa-wrench fa-fw"></i>Create User</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav nav-list">
            <li>
                <a href="#" class="accordion-heading" data-toggle="collapse" data-target="#submenu1">
                    <i class="fa fa-wrench fa-fw"></i>Posts<b class="caret"></b>
                </a>
                <ul class="nav nav-list collapse" id="submenu1">
                    <li><a href="{{route('posts.index')}}"><i class="fa fa-wrench fa-fw"></i>All Posts</a></li>
                    <li><a href="{{route('posts.create')}}"><i class="fa fa-wrench fa-fw"></i>Create Post</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
{{--<script src="{{asset('js/libs.js')}}"></script>--}}

</body>
</html>
