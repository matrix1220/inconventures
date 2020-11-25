@extends('layout', ['section' => 'services'])

@section('body_attributes')
class="services-body"
@endsection

@section('content')
    <section class="services">
      <div class="container">
        <h5 class="fancy-title">
          <span>
            Services We Offer
          </span>
        </h5>
        <div class="services-box">
          <ul class="services__side-bar">
            <li class="service-sidebar__item">
              <a href="#">Branding</a>
            </li>
            <li class="service-sidebar__item">
              <a href="#">Website</a>
            </li>
            <li class="service-sidebar__item active">
              <a href="#">Graphic Design</a>
            </li>
            <li class="service-sidebar__item">
              <a href="#">Packaging</a>
            </li>
            <li class="service-sidebar__item">
              <a href="#">SMM</a>
            </li>
            <li class="service-sidebar__item">
              <a href="#">All works</a>
            </li>
          </ul>

          <div class="services__content">
            <h3>Recognizable designs that reflects your business values</h3>
            <ul class="subservices-list">
              <li>Postcards and flyers</li>
              <li>Posters, banners and billboards</li>
              <li>Business cards</li>
              <li>Brochures (print and digital)</li>
              <li>Infographics</li>
              <li>Vehicle wraps</li>
            </ul>
            <div class="sample-works-wrapper">
              <div class="img-wrapper">
                <span>Business card</span>
                  <img src="img/businesscard1.png" alt="businesscard1">
                </div>
              <div class="img-wrapper">
                <span>Brochures</span>
                <img src="img/gd2.png" alt="gd2">
              </div>
              <div class="img-wrapper">
                <span>Vehicle wraps</span>
                <img src="img/gd3.png" alt="gd3">
              </div>
              <div class="img-wrapper">
                <span>Book Cover</span>
                <img src="img/gd4.png" alt="gd4">
              </div>
            </div>
          </div>
          
        </div>
        <div class="link-wrapper">
          <a href="#" class="h-default">Other services</a>
        </div>
      </div>
      
    </section>


@endsection