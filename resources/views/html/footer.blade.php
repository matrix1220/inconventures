<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="footer-content">
        <h2 class="section-title">{!! __("$section.footer_title") !!}</h2>
        <p class="section-description">{!! __("$section.footer_description") !!}</p>
      </div>
      <div class="link-wrapper">
        <a href="{{ route('contact') }}" class="get-in-touch-link">{!! __("parts.footer.get_in_touch") !!}</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom__item logo">
        <a href="#" class="img-wrapper ">
          <img src="/img/logo-w.svg" alt="logo">
        </a>
        <p class="copyright-text">{!! __("parts.footer.copyright") !!}</p>
      </div>
      <div class="footer-bottom__item">
        <h5>{!! __("parts.footer.visit_us") !!}</h5>
        <p>{{ setting('site.address') }}</p>
      </div>
      <div class="footer-bottom__item">
        <h5>{!! __("parts.footer.get_in_contact") !!}</h5>
        <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
        <a href="mailto:{{ setting('site.mail') }}">{{ setting('site.mail') }}</a>
      </div>
      <div class="footer-bottom__item">
        <h5>{!! __("parts.footer.get_in_contact") !!}</h5>
        <ul class="social-links">
          <li><a href="{{ setting('site.link_facebook') }}" class="img-wrapper" target="_blank"><img src="/img/icons/fb.svg" alt="fb"></a></li>
          <li><a href="{{ setting('site.link_instagram') }}" class="img-wrapper" target="_blank"><img src="/img/icons/ig.svg" alt="ig"></a></li>
          <li><a href="{{ setting('site.link_twitter') }}" class="img-wrapper" target="_blank"><img src="/img/icons/tw.svg" alt="tw"></a></li>
          <li><a href="{{ setting('site.link_telegram') }}" class="img-wrapper" target="_blank"><img src="/img/icons/tg.svg" alt="tg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>