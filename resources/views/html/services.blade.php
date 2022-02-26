<section class="services-block">
  <div class="container">
    <h2 class="section-title">{{ $title }}</h2>
    <p class="section-description">{{ $description }}</p>
    <h5 class="fancy-title">
      <span>{!! __("parts.services.we_offer") !!}</span>
    </h5>

    <div class="services-wrapper">
      @foreach(App\Service::all() as $service)
<div class="service__item">
  <div class="img-wrapper">
    <img src="{{ Voyager::image($service->icon) }}" alt="{{ $service->title() }}">
  </div>
  @php($first = $service->subservices->first())
  <a href="{{ route('services', $first?$first->id:1 ) }}">{{ $service->title() }}</a>
  @if($hasArrow)
    <div class="img-wrapper arrow-right">
      <img src="img/icons/arrow-right-i.svg" alt="arrow">
    </div>
  @endif
  <p>{{ $service->description() }}</p>
  <ul class="steps-wrapper">
    @php($i = 0)
    @foreach ($service->subservices as $subservice)
      <li>
        <span>0{{ ++$i }}</span>
        <a href="{{ route('services', $subservice->id ) }}" class="step__name">{{ $subservice->title() }}</a>
      </li>
    @endforeach
  </ul>
</div>
      @endforeach
    </div>
  </div>
</section>