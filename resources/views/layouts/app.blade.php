<?php

use Illuminate\Support\Facades\Auth;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #468ba4;
        color: #d1ecfc;
    }

    .header a {
        text-decoration: none;
        color: #d1ecfc;
        font-size: 24px;
        font-weight: bold;
    }

    .header .login-button,
    .header .logout-button {
        display: none;
    }

    .header .register-button,
    .header .register-button {
        display: none;
    }


    <?php if (!Auth::check()) : ?>.header .login-button {
        display: block;
    }

    <?php endif; ?><?php if (!Auth::check()) : ?>.header .register-button {
        display: block;
    }

    <?php endif; ?><?php if (Auth::check()) : ?>.header .logout-button {
        display: block;
    }

    <?php endif; ?>.header .login-button a,
    .header .logout-button a {

        padding: 5px 10px;
        border: 1px solid #d1ecfc;
        border-radius: 5px;
        text-decoration: none;
        color: #d1ecfc;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header .login-button a:hover,
    .header .logout-button a:hover {
        background-color: #d1ecfc;
        color: #468ba4;
    }

    .header .register-button a,
    .header .register-button a {

        padding: 5px 10px;
        border: 1px solid #d1ecfc;
        border-radius: 5px;
        text-decoration: none;
        color: #d1ecfc;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.2s ease;
    }

    .header .register-button a:hover,
    .header .register-button a:hover {
        background-color: #d1ecfc;
        color: #468ba4;
    }


    .login-register-container {
        display: flex;
    }

    .register-button {
        padding-left: 10px;
    }
</style>

<body>
    <div class="header">
        <a href="/">My Eventportal</a>
        <div class="events">
            <a href="/">All events</a>
        </div>
        @guest
            <div class="login-register-container">
                <div class="login-button">
                    <a href="/login">Login</a>
                </div>
                <div class="register-button">
                    <a href="/register">Register</a>
                </div>
            </div>
        @endguest
        @auth
            <div class="">
                <a href="/form_create">create Event</a>
            </div>

            <div class="logout-button">
                <a href="/logout">Logout</a>
            </div>
        @endauth
    </div>
    @yield('content')
</body>

</html>
