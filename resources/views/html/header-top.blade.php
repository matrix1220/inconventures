<div class="header-top__right basic-flex">
  <div class="mob-header-top">
    <a href="/" class="img-wrapper logo">
      <img src="/img/logo-w.svg" alt="logo" />
    </a>
    <button type="button" class="img-wrapper menu-btn js-menu-btn">
      <img src="/img/icons/close-i.svg" alt="close">
    </button>
  </div>
  <nav class="main-nav">
    <ul class="main-menu">
      <li class="main-menu__item">
        <a class="h-default {{ $section == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
          {{ __("home.title") }}
        </a>
      </li>
      <li class="main-menu__item">
        <a class="h-default {{ $section == 'services' ? 'active' : '' }}" href="{{ route('services') }}">
          {{ __("services.title") }}
        </a>
      </li>
      <li class="main-menu__item">
        <a class="h-default {{ $section == 'portfolio' ? 'active' : '' }}" href="{{ route('portfolio') }}">
          {{ __("portfolio.title") }}
        </a>
      </li>
      <li class="main-menu__item">
        <a class="h-default {{ $section == 'about' ? 'active' : '' }}" href="{{ route('about') }}">
          {{ __("about.title") }}
        </a>
      </li>
      <li class="main-menu__item">
        <a class="h-default {{ $section == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">
          {{ __("contact.title") }}
        </a>
      </li>
    </ul>
  </nav>
  <div class="language-box"> 
    <a href="#" class="current-language js-current-language">{{ config('app.locales')[App::getLocale()] }}</a>
    <ul class="language-options">
      @foreach(config('app.locales') as $key=>$value)
        @if($key!=App::getLocale())
          <li class="language-options__item">
            <a class="h-default" href="{{ route('setlocale', ['locale' => $key]) }}">
              {{ $value }}
            </a>
          </li>
        @endif
      @endforeach
    </ul>
  </div>
  <div class="mob-contactbox">
    <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
    <a href="mailto:{{ setting('site.mail') }}">{{ setting('site.mail') }}</a>
  </div>
</div>