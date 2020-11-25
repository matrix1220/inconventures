@extends('layout', ['section' => 'portfolio'])

@section('body_attributes')
class="portfolio-body"
@endsection

@section('content')
    
<section class="portfolio-sec">
  <div class="container">
    <div class="portfolio-types">
      <a href="#" class="h-default active">All</a>
      <a href="#" class="h-default">Website</a>
      <a href="#" class="h-default">Mobile app</a>
      <a href="#" class="h-default">Branding</a>
      <a href="#" class="h-default">Logo</a>
      <a href="#" class="h-default">SMM</a>
      <a href="#" class="h-default">Graphic design</a>
    </div>
  </div>
  <div class="portfolios-wrapper">

  @foreach(App\Portfolio::all() as $portfolio)
  <div class="portfolio__item">
    <div class="portfolio-inner__item">


<div class="portfolio-content">
  <h4>{{ $portfolio->name }}</h4>
  <p>{{ $portfolio->description() }}</p>
  <div class="services-link-wrapper">
    @foreach ($portfolio->service_types as $service_type)
      <a href="{{ route('services',$service_type->id) }}">{{ $service_type->name() }}</a>
    @endforeach
  </div>
  @if($portfolio->link)
    <a href="{{ $portfolio->link }}" class="more-info-link">More information</a>
  @endif
    <ul class="social-links">
      @if($portfolio->link_telegram)
        <li><a href="{{ $portfolio->link_telegram }}" class="img-wrapper"><img src="img/icons/tg.svg" alt="tg"></a></li>
      @endif
      @if($portfolio->link_facebook)
        <li><a href="{{ $portfolio->link_facebook }}" class="img-wrapper"><img src="img/icons/fb.svg" alt="fb"></a></li>
      @endif
      @if($portfolio->link_instagram)
      <li><a href="{{ $portfolio->link_instagram }}" class="img-wrapper"><img src="img/icons/ig.svg" alt="ig"></a></li>
      @endif
      
<!--       @if($portfolio->link_telegram)
        <li><a href="{{ $portfolio->link_telegram }}" class="img-wrapper"><img src="img/icons/dribble.svg" alt="dribble"></a></li>
      @endif -->
    </ul>
</div>

<div class="js-portfolio-slider portfolio-slider">
  @foreach(json_decode($portfolio->images) as $image)
    <div class="img-wrapper">
      <img src="{{ Voyager::image($image) }}" alt="{{ $image }}">
    </div>
  @endforeach
</div>


    </div>
  </div>
  @endforeach

  </div>
</section>

    @include('html.partners')

@endsection