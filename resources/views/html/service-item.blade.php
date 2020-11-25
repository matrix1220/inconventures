<div class="service__item">
  <div class="img-wrapper">
    <img src="img/icons/{{ $icon }}" alt="{{ $name }}">
  </div>
  <a href="services.html">{{ $name }}</a>
  @if($hasArrow)
    <div class="img-wrapper arrow-right">
      <img src="img/icons/arrow-right-i.svg" alt="arrow">
    </div>
  @endif
  <p>{{ $description }}</p>
  <ul class="steps-wrapper">
    @for ($i = 0; $i < count($steps); $i++)
      <li>
        <span>0{{ $i+1 }}</span>
        <span class="step__name">{{ $steps[$i] }}</span>
      </li>
    @endfor
  </ul>
</div>