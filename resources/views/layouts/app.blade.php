<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/css/uikit.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
<div id="app">
    <nav class="uk-navbar-container uk-margin uk-navbar">
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="/">GFS</a>
            <ul class="uk-navbar-nav">
                <li>
                    <a href="{{ route('pages.rates')}}">
                        Rates
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.rules')}}">
                        Rules
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.contacts')}}">
                        Contacts
                    </a>
                </li>
                @if (session()->get('user'))
                    <li>
                        <a href="{{ route('deals.index') }}">Deals</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-navbar-item">
                @if (!session()->get('user'))
                    <a href="/auth" class="uk-button uk-button-default uk-button-small">ESI LOGIN</a>
                @else
                    <div class="uk-button-group">
                        <button class="uk-button uk-button-default">{{ session()->get('user')->name }}</button>
                        <div class="uk-inline">
                            <a href="{{ route('auth.logout') }}" class="uk-button uk-button-danger">Logout</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>
            @yield('content')
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit-icons.min.js"></script>
<script src="uikit/dist/js/uikit-icons.min.js"></script>

</body>
</html>
