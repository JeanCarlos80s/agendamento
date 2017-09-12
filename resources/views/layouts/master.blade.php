<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: Agendamento de Reuniões ::</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <!-- <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet"> -->
    <link href="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="{{ asset('/bower_components/select2/dist/css/select2.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->
    <link href="{{ asset('/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-size:12px;">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">PSJNet</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Agendamento de Reuniões</a>
            </div>
            <!-- /.navbar-header -->

            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> MENU</a>
                        </li>

                        <li>
                            <a href="{{ route('reuniaos.index')}}"><i class="fa fa-caret-right fa-fw"></i> Reuniões</span></a>
                        </li>

                        <li>
                            <a href="{{ asset('auth/logout') }}"><i class="fa fa-caret-right fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h3 class="page-header">:: Dashboard ::</h3> -->

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

    @section('scripts')
    <!-- jQuery -->
    <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('/bower_components/select2/dist/js/select2.js') }}"></script>

    <!-- Select2 JS translate -->
    <script src="{{ asset('/bower_components/select2/dist/js/i18n/pt-BR.js') }}"></script>

    <!-- jQuer Date Mask -->
    <script src="{{ asset('/bower_components/jquery-date-mask/jquery.mask.js') }}"></script>

    <!-- jQuer Mask Money -->
    <script src="{{ asset('/bower_components/jqery-mask-money/jquery.maskMoney.js') }}"></script>
    
    <script src="{{ asset('/bower_components/jquery-price-format/jquery.priceFormat.js') }}"></script>


    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

    @show

</body>

</html>
