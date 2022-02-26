@extends('layout', ['section' => 'contact'])

@section('body_attributes')
class="contact-body" id="contact-body"
@endsection

@section('content')
    <section class="contact">
      <div class="container">
        <div class="contact-content">
          <div class="form-wrapper">
            @if(isset($ok))
            <p class="success-message">{!! __("contact.succesfull") !!}</p>
            @endif
            @if ($errors->any())
              @foreach ($errors->all() as $error)
                <p class="error-message">{{ $error }}</p>
              @endforeach
            @endif
            <form method="POST">
              @csrf
              <label>
                <input type="text" placeholder="Name" autocomplete="name" name="name" required value="{{ old('name') }}">
              </label>
              <label>
                <input type="tel" placeholder="Phone (optional)" autocomplete="tel" name="phone" required value="{{ old('phone') }}">
              </label>
              <label>
                <input type="email" placeholder="Email" autocomplete="email" name="email" value="{{ old('email') }}">
              </label>
              <label>
                <textarea placeholder="Message" name="message" required>{{ old('message') }}</textarea>
              </label>
              <button type="submit" class="h-big">{!! __("contact.send_message") !!}</button>
            </form>
          </div>
          <div class="map-wrapper" data-button="Click to Zoom">
            {!! setting('site.map') !!}
          </div>
        </div>
        <div class="contacts-wrapper">
          <div class="footer-bottom__item">
            <h5>{!! __("contact.contact_us") !!}</h5>
            <a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone') }}</a>
            <a href="mailto:{{ setting('site.mail') }}">{{ setting('site.mail') }}</a>
          </div>
          <div class="footer-bottom__item">
            <h5>{!! __("contact.visit_us") !!}</h5>
            <p>{{ setting('site.address') }}</p>
          </div>
          
        </div>
      </div>
    </section>

@endsection