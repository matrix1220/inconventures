@extends('layout', ['section' => 'portfolio'])

@section('body_attributes')
class="portfolio-body"
@endsection

@section('content')
    
<section class="portfolio-sec">
  <div class="container">
    <div class="portfolio-types">
      <a href="{{ route('portfolio') }}" class="h-default {{ $subservice_id==0 ? 'active':''}}">
        {{ __('portfolio.all') }}
      </a>
      @foreach(App\PortfolioItem::distinct()->get(['item_id']) as $portfolio_item)
        <a
          href="{{ route('portfolio', $portfolio_item->item_id) }}"
          class="h-default {{ $subservice_id==$portfolio_item->item_id ? 'active':''}}">
          {{ $portfolio_item->item->title() }}
        </a>
      @endforeach
    </div>
  </div>
  <div class="portfolios-wrapper">

  @foreach($portfolios as $portfolio)
  <div class="portfolio__item">
    <div class="portfolio-inner__item">


<div class="portfolio-content">
  <h4>{{ $portfolio->name }}</h4>
  <p>{{ $portfolio->description() }}</p>
  <div class="services-link-wrapper">
    @foreach ($portfolio->items as $item)
      <a href="{{ route('services',$item->id) }}">{{ $item->title() }}</a>
    @endforeach
  </div>
  @if($portfolio->link)
    <a href="{{ $portfolio->link }}" class="more-info-link" target="_blank">{!! __("parts.portfolio.more_info") !!}</a>
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