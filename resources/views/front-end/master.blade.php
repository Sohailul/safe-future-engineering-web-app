<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ asset('/home') }}"><img src="{{ asset('/') }}/front-end/images/safe.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('/') }}/front-end/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ asset('/home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Company Section</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Employee</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="{{ route('add-employee') }}">Add Employee</a></li>
                        <li><i class="fa fa-eye"></i><a href="{{ route('manage-employee') }}">Manage Employee</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Salary</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="{{ route('add-salary') }}">Add Salary</a></li>
                        <li><i class="fa fa-eye"></i><a href="{{ route('manage-salary') }}">Manage Salary</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Clients</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="{{ route('add-client') }}">Add Clients</a></li>
                        <li><i class="fa fa-eye"></i><a href="{{ route('manage-client') }}">Manage Clients</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">About Company</h3><!-- /.menu-title -->
                        <li><i class="menu-icon fa fa-info"></i><a href="{{ route('about-us') }}">About Us</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                    </div>


                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>

                    </div>
                </div>
            </div>


            <div class="col-sm-5">
                <div class="user-area nav-item dropdown float-right">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i> <span class="caret"></span>
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->
@yield('content')
</div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset('/') }}/front-end/vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('/') }}/front-end/assets/js/main.js"></script>

    <script src="{{ asset('/') }}/front-end/assets/js/dashboard.js"></script>
    <script src="{{ asset('/') }}/front-end/assets/js/widgets.js"></script>
{{--    <script src="{{ asset('/') }}/front-end/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{ asset('/') }}/front-end/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="{{ asset('/') }}/front-end/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>--}}
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('.table').DataTable();
    } );
</script>
<script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    <script>
        $(document).ready(function(){
            $('#xyz').click(function(){
                $(this).text(' ');
            });
        });
    </script>

    <script language="javascript">
        function totalSalary()
        {
            var val1 = parseFloat(document.getElementById("salary").value);
            var val2 = parseFloat(document.getElementById("tday").value);

            var val3 = parseFloat(document.getElementById("govholy").value);

            var val4 = parseFloat(document.getElementById("weekholy").value);

            var val5 = parseFloat(document.getElementById("absent").value);

            var val6 = parseFloat(document.getElementById("overtime").value);

            var val7 = parseFloat(document.getElementById("transport_bill").value);

            var val8 = parseFloat(document.getElementById("allowance").value);


            var perdaysalary = document.getElementById("pdpot");

            perdaysalary.value = (val1 / val2).toFixed(2);

            var workingday = document.getElementById("wday");
            workingday.value = val2-(val3+val4+val5);

            var payableworkingday = document.getElementById("awday");
            payableworkingday.value = (val2-(val3+val4+val5))+(val6+val3+val4);

            var ansd = document.getElementById("total");
            ansd.value = (((val2-(val3+val4+val5)+val6+val3+val4)*(val1 / val2))+val7+val8).toFixed(2);
        }
    </script>


</body>

</html>