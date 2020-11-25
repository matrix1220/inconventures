
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

  @include('html.services-block', [
    "hasArrow" => false,
    "title" => "We help your business thrive",
    "description" => "Transforming business challenges into impactful web and mobile solutions that people love to use every day"
  ])



<section class="portfolio">
  <div class="container">
    <h2 class="section-title">We form long-term partnerships to create topclass digital products</h2>
    <p class="section-description">Incon Ventures is a large and experienced team working with many companies
      at the same time. We look forward to seeing you as one of our clients.</p>
    <h5 class="fancy-title">
      <span>
        our portfolio
      </span>
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
      @foreach ($portfolio->service_types as $service_type)
        <a href="{{ route('services',$service_type->id) }}">{{ $service_type->name() }}</a>
      @endforeach
    </div>
    <a href="{{ $portfolio->link }}" class="more-info-link">More information</a>
  </div>
</div>

        @php($right = !$right)
      @endforeach
    </div>

    <div class="link-wrapper">
      <a href="{{ route('portfolio') }}" class="more-info-link">
        See all works
      </a>
    </div>
  </div>
  
</section>


<section class="team">
  <div class="container">
    <h2 class="section-title">This is our team, achieving goals</h2>
    <p class="section-description">Our team is keen to try out the newest tools & techniques. We’re always in
      for experimenting with innovative solutions. Quality is valuable to us 
      and not incidentally, we’re most self-critical. </p>
    <h5 class="fancy-title">
      <span>
        our team
      </span>
    </h5>
    <div class="team-members-wrapper">
      @foreach(App\TeamMember::take(6)->get() as $team_member)
        @include('html.team-member', $team_member)
      @endforeach
    </div>
    <div class="link-wrapper">
      <a href="{{ route('about') }}" class="more-info-link">
        See full list
      </a>
    </div>
  </div>
</section>

@include('html.partners')

@endsection