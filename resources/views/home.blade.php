
@extends('layout', ['section' => 'home'])

@section('header')

<div class="header-video">
  <button type="button" class="play-btn js-play-btn">
    <div class="img-wrapper">
      <img src="img/icons/play-i.svg" alt="play" />
      <img src="img/icons/pause-i.svg" alt="pause" />
    </div>
  </button>
  <div class="progress">
    <div class="progress__filled"></div>
   </div>
  <video id="js-video">
    <source src="img/example.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
  <button type="button" class="fullscreen-btn js-fullscreen-btn">
    <div class="img-wrapper">
      <img src="img/icons/fullscreen-i.svg" alt="fullscreen" />
    </div>
  </button>
</div>

@endsection

@section('content')

  @include('html.clients')

  @include('html.services', [
    "hasArrow" => false,
    "title" => __("home.service_title"),
    "description" => __("home.service_description")
  ])



<section class="portfolio">
  <div class="container">
    <h2 class="section-title">{!! __("home.portfolio_title") !!}</h2>
    <p class="section-description">{!! __("home.portfolio_description") !!}</p>
    <h5 class="fancy-title">
      <span>{!! __("parts.portfolio.our") !!}</span>
    </h5>
    <div class="portfolio-wrapper">
      @php($right = true)
      @foreach(App\Portfolio::take(3)->get() as $portfolio)
        @php($image = json_decode($portfolio->images)[0])

<div class="portfolio-block__item {{ $right ? 'right' : '' }}">
  <div class="img-wrapper">
    <img src="{{ Voyager::image($image) }}" alt="{{ $image }}">
  </div>
  <div class="portfolio-content">
    <h4>{{ $portfolio->name }}</h4>
    <p>{{ $portfolio->description() }}</p>
    <div class="services-link-wrapper">
      @foreach ($portfolio->items as $item)
      <a href="{{ route('services',$item->id) }}">{{ $item->title() }}</a>
      @endforeach
    </div>
    <a href="{{ $portfolio->link }}" class="more-info-link" target="_blank">{!! __("parts.portfolio.more_info") !!}</a>
  </div>
</div>

        @php($right = !$right)
      @endforeach
    </div>

    <div class="link-wrapper">
      <a href="{{ route('portfolio') }}" class="more-info-link">{!! __("parts.portfolio.see_all") !!}</a>
    </div>
  </div>
  
</section>


<section class="team">
  <div class="container">
    <h2 class="section-title">{!! __("home.team_title") !!}</h2>
    <p class="section-description">{!! __("home.team_description") !!}</p>
    <h5 class="fancy-title">
      <span>{!! __("parts.team.our") !!}</span>
    </h5>
    <div class="team-members-wrapper">
      @foreach(App\TeamMember::take(6)->get() as $team_member)
        @include('html.team-member', $team_member)
      @endforeach
    </div>
    <div class="link-wrapper">
      <a href="{{ route('about') }}" class="more-info-link">{!! __("parts.team.see_all") !!}</a>
    </div>
  </div>
</section>

@include('html.partners')

@endsection