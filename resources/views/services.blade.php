@extends('layout', ['section' => 'services'])

@section('body_attributes')
class="services-body"
@endsection

@section('header_title')
{{ $service->title() }}
@endsection

@section('header_text')
{{ $service->long_description() }}
@endsection

@section('content')
    <section class="services">
      <div class="container">
        <h5 class="fancy-title">
          <span>{!! __("parts.services.we_offer") !!}</span>
        </h5>
        <div class="services-box">
          <ul class="services__side-bar">
            @foreach($service->subservices as $tmp_subservice)
            <li class="service-sidebar__item {{ $tmp_subservice->id==$subservice->id ? 'active' : '' }}">
              <a href="{{ route('services', $tmp_subservice->id) }}#services">{{ $tmp_subservice->title() }}</a>
            </li>
            @endforeach
          </ul>

          <div class="services__content">
            <h3>{{ $subservice->description() }}</h3>
            <ul class="subservices-list">
              @foreach($subservice->items as $item)
              <li>{{ $item->name() }}</li>
              @endforeach
            </ul>
            <div class="sample-works-wrapper">
              @foreach($subservice->images as $image)
              <div class="img-wrapper">
                <span>{{ $image->item->name() }}</span>
                <img src="{{ Voyager::image($image->img) }}" alt="{{ $image->item->name() }}">
              </div>
              @endforeach
            </div>
          </div>
          
        </div>
        <div class="link-wrapper">
          <a href="#" class="h-default">{!! __("parts.services.other") !!}</a>
        </div>
      </div>
      
    </section>


@endsection