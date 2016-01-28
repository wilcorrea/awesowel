<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">


<title>{{ awesovel_config('name') }}</title>

<!-- Google Fonts -->
{{--https://design.google.com/icons/--}}
<link href="{{ awesovel_asset('google-fonts/roboto/index.css') }}" rel="stylesheet">
<link href="{{ awesovel_asset('google-fonts/material-icons/index.css') }}" rel="stylesheet">
<link href="{{ awesovel_asset('google-fonts/audiowide/index.css') }}" rel="stylesheet">
<link href="{{ awesovel_asset('google-fonts/play/index.css') }}" rel="stylesheet">

<!-- Bootstrap -->
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
<link href="{{ awesovel_asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ awesovel_asset('bootstrap/css/sticky-footer-fixed.css') }}" rel="stylesheet">
<link href="{{ awesovel_asset('bootstrap/css/index.css') }}" rel="stylesheet">

@include(awesovel_config('theme'))

<!-- Font Awesome -->
<link href="{{ awesovel_asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- JQuery -->
<script src="{{ awesovel_asset('jquery/jquery.min.js') }}"></script>
<script src="{{ awesovel_asset('jquery/plugins/jquery.mousewheel.min.js') }}"></script>
<script src="{{ awesovel_asset('jquery/plugins/jquery.simplr.smoothscroll.js') }}"></script>
<script src="{{ awesovel_asset('jquery/plugins/jquery.browser.js') }}"></script>

<link href="{{ awesovel_asset('@/css/index.css') }}" rel="stylesheet">

<!-- Formly Api-Check -->
<script src="{{ awesovel_asset('formly/api-check.js') }}"></script>

<script src="{{ awesovel_asset('angular/angular.min.js') }}"></script>
<script src="{{ awesovel_asset('formly/formly.js') }}"></script>

<script src="{{ awesovel_asset('@/app/App.js') }}"></script>
<script src="{{ awesovel_asset('@/app/core/Angular.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">