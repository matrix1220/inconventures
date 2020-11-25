<header class="main-header" id="particles-js">
  <div class="container">
    <div class="header-top basic-flex">
      <a href="/" class="img-wrapper logo">
        <img src="img/logo-w.svg" alt="logo" />
      </a>
      @include('html.header-top', ["section" => $section ])
      <button type="button" class="img-wrapper menu-btn js-menu-btn">
        <img src="img/icons/burger-i.svg" alt="burger">
      </button>
    </div>
    <div class="header-content">
      <h1 class="main-title">
        {!! __("$section.header_title") !!}
      </h1>
      <p class="header-content__text">
        {!! __("$section.header_text") !!}
      </p>
      <div class="header-content__buttons">
        {!! __("$section.header_buttons") !!}
      </div>
      @yield('header')
      <!--  -->
    </div>
  </div>
</header>
