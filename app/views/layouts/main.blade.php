<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ Config::get('shop.title') }} -  {{ $title or Lang::get('misc.home') }}</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Noto+Sans:700') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/theme.css') }}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{ HTML::script('/js/wow.min.js') }}
    <script>new WOW().init();</script>
  </head>
  <body>

    @if (Session::has('message'))
    <div class="alert alert-warning alert-dismissable fade" data-alert="alert" id="alert-message">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('message') }}
      </div>
    </div>
    @endif


    @include('partials._navbar')

    <div class="wrap">
      <div class="container" id="main" role="main">
        <div class="row">
          <div class="page-header col-xs-12">
            <h1>
              <div class="wow fadeInDown pull-left" data-wow-delay="0.1s">
                @yield('icon')
                {{ $title or Lang::get('misc.home') }}
              </div>
              @yield('print')
            </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      @yield('breadcrumbs')

      @yield('pagination')

      @yield('content')

      @yield('pagination')
    </div>

    <footer class="hidden-print">
      <div class="container wow fadeInUp" data-wow-duration="1.5s">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy;{{ date('Y') }} <a href="http://42dev.eu">42dev</a> - {{ Lang::get('misc.footer-text') }}.</p>
          </div>
          <div class="col-sm-6">
            <div class="pull-right">
              <a href="#">Imprint</a> |
              <a href="#">Privacy policy</a> |
              <a href="#">Terms of service</a> |
              <a href="/contact">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/main.js') }}
    @yield('script')
</body>
</html>