<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('partials.favicons')
    <title>@yield('title_prefix', $viewModel->project->name) @yield('title_postfix', '')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="canonical" href="{{url('/')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if (isset($viewModel->socialMediaMetadataVM))
        @include('landingpages.partials.header-meta', ['viewModel' => $viewModel->socialMediaMetadataVM])
    @endif
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{ asset('dist/css/common.css') }}?{{env("APP_VERSION")}}">
    <link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
    <link href="{{asset('dist/css/survey.css')}}" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('dist/css/landing-page.css') }}?{{env("APP_VERSION")}}">
    <link rel="stylesheet" href="{{ asset('dist/css/home.css') }}?{{env("APP_VERSION")}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @if (App::environment('production'))
        @include('analytics')
    @endif
</head>
<body class="project-landing-page">
    <div class="row">
        <div class="col-md-12">
            @include('landingpages.partials.navbar')
        </div>
    </div>
    @yield('content')
    <footer style="background-color: {{ $viewModel->project->lp_footer_bg_color }}">
        <div class="container" style="
                color: {{ $viewModel->project->lp_footer_color }}">

            {!! $viewModel->project->footer !!}

        </div>
    </footer>

    <div id="pyro" class="">
        <div class="before"></div>
        <div class="after"></div>
    </div>

    <div class="loader-wrapper hidden">
        <img src="{{asset('images/loading.gif')}}" alt="loading image">
    </div>
    @include('partials.footer-scripts')
    <script src="{{asset('dist/js/showdown.min.js')}}?{{env("APP_VERSION")}}"></script>
    <script src="{{asset('dist/js/landingPage.js')}}?{{env("APP_VERSION")}}"></script>
</body>
</html>
