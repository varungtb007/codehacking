<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
{{--    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">--}}

    <!-- Bootstrap core CSS -->
{{--    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}


        <link href="{{asset('css/libs.css')}}" rel="stylesheet">
</head>
<body id="admin-page">

<div id="wrapper">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-header" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            {{--    <div class="collapse navbar-collapse" id="navbarsExampleDefault">--}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">User Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>


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
                <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
        </ul>
        <ul class="nav" id="side-menu">
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/users">All Users</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
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
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>


@yield('footer')


{{--<script src="{{asset('js/libs.js')}}"></script>--}}

</body>
</html>
