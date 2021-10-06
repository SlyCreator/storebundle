@extends('shopify-app::layouts.default')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/promo.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/create.css') }}" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito';
        }

        a {
            text-decoration: none;
        }

        .super-container {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="super-container">
        <nav class="navbar navbar-dark bg-dark p-2">
            <div class="container-fluid">
                <a href="/"><img src="/images/logo-image.png"></a>
                <div class="d-flex justify-content-between align-items-center nav-impression-super">
                    <div class="nav-impression-con">
                        <div class="progress-bar-con mx-2">
                            <div class="progress">
                                <div class="value"></div>
                            </div>
                            <p class="my-0 mt-2 small"> 5% (1500 of 1500 impressions left in this month)</p>
                        </div>
                    </div>
                    <a href="/"><span class="mb-0 h4 menu-btn"><i class="fa fa-th"></i>
                        </span></a>
                    <a href="/"><span class="mb-0 account-nav">MY ACCOUNT<i class="fa fa-angle-right mx-2"></i>
                        </span></a>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-0">
            <div class="jumbotron m-0 d-flex justify-content-start">
                <div class="jumbotron border left">
                    <ul class="list-group">
                        <li class="list-group-item active-menu"><i class="fa fa-window-restore"></i>
                            <p class="m-0 small d-inline"> Applications</p>
                        </li>
                        <li class="list-group-item"><i class="fa fa-address-book"></i>
                            <p class="m-0 small d-inline">Contacts</p>
                        </li>
                        <li class="list-group-item"><i class="fa fa-plus-square"></i>
                            <p class="m-0 small d-inline">Integration</p>
                        </li>
                        <li class="list-group-item"><i class="fa fa-money-bill-alt"></i>
                            <p class="m-0 small d-inline">Billing</p>
                        </li>
                        <li class="list-group-item"><i class="fa fa-envelope-open"></i>
                            <p class="m-0 small d-inline">Contact Us</p>
                        </li>
                        <li class="list-group-item"><i class="fa fa-comment-alt"></i>
                            <p class="m-0 small d-inline">Feedback</p>
                        </li>
                    </ul>
                </div>
                <style>
                    .account-nav {
                        display: none;
                    }
                </style>
                <div class="jumbotron big-right">
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</body>

</html>
@section('scripts')
    @parent<script type="text/javascript">var AppBridge = window['app-bridge'];
    var actions = AppBridge.actions;
    var TitleBar = actions.TitleBar;
    var Button = actions.Button;
    var Redirect = actions.Redirect;
    var titleBarOptions = {title: 'Welcome',};
    var myTitleBar = TitleBar.create(app, titleBarOptions);
</script>
@endsection
