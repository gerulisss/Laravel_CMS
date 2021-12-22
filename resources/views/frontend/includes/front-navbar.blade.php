@section('logo-title', 'ZMFOOD')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">@yield('logo-title')</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
{{--              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                  <li class="nav-item dropdown d-md-down-none">--}}
{{--                      <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                          {{ $properties['native'] }}--}}
{{--                      </a>--}}
{{--                  </li>--}}
{{--              @endforeach--}}
          </ul>
{{--          @foreach (config('app.available_locales') as $locale)--}}
{{--              <li class="nav-item">--}}
{{--                  <a class="nav-link"--}}
{{--                     href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"--}}
{{--                     @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>--}}
{{--              </li>--}}
{{--          @endforeach--}}
{{--        <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--          <li class="nav-item">--}}
{{--              <ul class="navbar-nav ml-auto">--}}
{{--                  @if(count(config('app.languages')) > 1)--}}
{{--                      <li class="nav-item dropdown d-md-down-none">--}}
{{--                          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--                              {{ strtoupper(app()->getLocale()) }}--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu dropdown-menu-right">--}}
{{--                              @foreach(config('app.languages') as $langLocale => $langName)--}}
{{--                                  <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>--}}
{{--                              @endforeach--}}
{{--                          </div>--}}
{{--                      </li>--}}
{{--                      @endif--}}
{{--              </ul>--}}
{{--            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">{{__('Home')}}</a>--}}
{{--          </li>--}}
{{--          <li class="nav-item">--}}
{{--            <a class="nav-link active" aria-current="page" href="{{ route('production.index.page') }}">{{__('Production')}}</a>--}}
{{--          </li>--}}
{{--        </ul>--}}
{{--          <div class="dropdown">--}}
{{--              <a--}}
{{--                  id="dropdownMenuButton"--}}
{{--                  data-mdb-toggle="dropdown"--}}
{{--                  aria-expanded="false"--}}
{{--              >--}}
{{--                  @if(count(config('app.languages')) > 1)--}}
{{--                      {{ strtoupper(app()->getLocale()) }}--}}
{{--              </a>--}}
{{--              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                  @foreach(config('app.languages') as $langLocale => $langName)--}}
{{--                      <li><a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a></li>--}}
{{--                  @endforeach--}}
{{--              </ul>--}}
{{--              @endif--}}
{{--          </div>--}}
      </div>
    </div>
  </nav>
