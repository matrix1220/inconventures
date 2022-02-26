<!-- <div class="partners" id="partners">
  <div class="container">
    <h2 class="section-title">{!! __("parts.partners.description") !!}</h2>

<div class="clients-block">
  <h5 class="fancy-title">
    <span>{!! __("parts.partners.our") !!}</span>
  </h5>

  @php($partners = App\Partner::all()->toArray())
  @php($notend=true)
  @while($notend)
  <div class="clients-wrapper">
    @for($i=0;$i<5 and $notend;$i++)
      @php($partner=current($partners))
      @if($partner!==false)
      <div class="img-wrapper">
        <img src="{{ Voyager::image($partner['img']) }}" alt="{{ $partner['name'] }}">
      </div>
      @php(next($partners))
      @else
        @php($notend=false)
      @endif
    @endfor
  </div>
  @endwhile

</div>


  </div>
</div> -->