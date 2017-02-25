<html>
<head>
    <title>EFS Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body style="background-color:lightgrey;">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                EFS
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<title>Eagle Financial</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

<style>
    html, body {
        height: 100%;
    }


    body {
        background-color: transparent;
        background-image: url("http://cdn.pcwallart.com/images/eagle-flying-silhouette-wallpaper-2.jpg");
        margin: 0 auto;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Play', sans-serif;
    }

    .container {
        text-align: Center;
        display: table-cell;
        vertical-align: middle;
    }


    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 106px;
    }
</style>


@yield('content')

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<h1 style="color:darkblue; text-align:center; font-size:400%"> <b>EAGLE FINANCIAL SERVICES</b>
</h1>
{{--<h1 style="text-align:center;"><img style="-webkit-user-select: none" src="http://nebula.wsimg.com/381b1a9a823b593df44577d8bfed4493?AccessKeyId=8C5D0257F10D0CEAECE7&disposition=0&alloworigin=1"--}}
                                    {{--alt="Eagle View" width="1000" height="500">--}}
</h1>
</body>



</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset9="EFS-1">
        <script type="text/javascript">
            function portcheck(){
                var selected;
                alert("Click OK to continue viewing profile");
                var yourSelect = document.getElementById( "select-id" );
                var sel = yourSelect.options[ yourSelect.selectedIndex ].value;
                document.getElementsByTagName('option');

                if(sel=="Review customers portfolio")
                {
                    window.open("/customers");
                }
                else if(sel=="Investments")
                {
                    window.open("/investments");
                }
                else if(sel=="Stocks")
                {
                    window.open("/stocks");
                }
                else if(sel=="Mutualfunds")
                {
                    window.open("http://localhost/efs1/public/mutualfunds");
                }
            }
        </script>
        </head>
<body>

<h1 style="text-align:center; font-size:300%;text-decoration-color: #ff6666;color: #d58512 "><i>"Welcome Back!"</i></h1>
<h1 style="text-align:center; font-size:200%; animation-name: progress-bar-stripes"><i>"Your Financial Security Is Our Business"</i></h1>

<h1 style="text-align:LEFT; font-size:150%;color: yellow"> <b>PORTFOLIO PLANNING OPTIONS </b>:</h1>

<body style="background-color:lightgrey;">

<form name="form1" id="Eagle_portfolio">
    <select name="Portfolio" id="select-id">
        <option value="Review customers portfolio" name="s1" id="1" >Review customers portfolio</option>
        <option value="Stocks" id="2">Stocks</option>
        <option value="Investments" id="3">Investments</option>
        <option value="Mutualfunds" id="3">Mutual Funds</option>
    </select>
    <br><br>
    <input type="submit" onclick="portcheck()">
</form>

</body>
</html>
