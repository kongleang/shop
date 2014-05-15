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
        <a href="/contact">Contact us</a> |
        @foreach(Config::get('app.languages') as $locale => $language)
          <a href="{{ URL::route('switchLanguage', $locale) }}" title="{{ Lang::get('misc.switch-to-language', ['lang' => $language]) }}"><div class="flag flag-{{ $locale }}"></div></a>
        @endforeach
      </div>
    </div>
  </div>
</div>