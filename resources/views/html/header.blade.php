<header class="main-header" id="particles-js">
  <div class="container">
    <div class="header-top basic-flex">
      <a href="/" class="img-wrapper logo">
        <img src="/img/logo-w.svg" alt="logo" />
      </a>
      @include('html.header-top', ["section" => $section ])
      <button type="button" class="img-wrapper menu-btn js-menu-btn">
        <img src="/img/icons/burger-i.svg" alt="burger">
      </button>
    </div>
    <div class="header-content">
      <h1 class="main-title">
        @if (trim($__env->yieldContent('header_title')))
          @yield('header_title')
        @else
          {!! __("$section.header_title") !!}
        @endif
      </h1>
      <p class="header-content__text">
        @if (trim($__env->yieldContent('header_text')))
          @yield('header_text')
        @else
          {!! __("$section.header_text") !!}
        @endif
      </p>
      <div class="header-content__buttons">
        @if (trim($__env->yieldContent('header_buttons')))
          @yield('header_buttons')
        @else
          {!! __("$section.header_buttons") !!}
        @endif
      </div>
      @yield('header')
      <!--  -->
    </div>
  </div>
</header>
