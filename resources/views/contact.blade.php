@extends('layout', ['section' => 'contact'])

@section('body_attributes')
class="contact-body" id="contact-body"
@endsection

@section('content')
    <section class="contact">
      <div class="container">
        <div class="contact-content">
          <div class="form-wrapper">
            <form>
              <!-- error-message success-message -->
              <!-- <p> Error Message</p> -->
              <label>
                <input type="text" placeholder="Name" autocomplete="name" name="name" required>
              </label>
              <label>
                <input type="tel" placeholder="Phone (optional)" autocomplete="tel" name="phone">
              </label>
              <label>
                <input type="email" placeholder="Email" autocomplete="email" name="email" required>
              </label>
              <label>
                <textarea placeholder="Message" name="message" required></textarea>
              </label>
              <button type="submit" class="h-big">Send message</button>
            </form>
          </div>
          <div class="map-wrapper" data-button="Click to Zoom">
            {!! setting('site.map') !!}
          </div>
        </div>
        <div class="contacts-wrapper">
          <div class="footer-bottom__item">
            <h5>Сontact Us</h5>
            <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
            <a href="mailto:{{ setting('site.mail') }}">{{ setting('site.mail') }}</a>
          </div>
          <div class="footer-bottom__item">
            <h5>Visit us</h5>
            <p>{{ setting('site.address') }}</p>
          </div>
          
        </div>
      </div>
    </section>

@endsection