@extends('layout', ['section' => 'about'])

@section('body_attributes')
class="about-body"
@endsection

@section('content')
    <div class="services-wrapper-links">
      @include('html.services-block', [
        "hasArrow"=> true,
        "title"=> "We are a full service agency with offerings in web development, marketing and user experience.",
        "description"=> "We at Incon Ventures plays a major role in connecting global business with innovation in business strategy & corporate trends. Our enthusiastic and dedicated teamwork coupled with commitment towards our valued customer-satisfaction approach would help us to full-in our clients list"
      ])
      <div class="container">
        <p class="simple-text">
          Incon Ventures can also provide a fully-integrated service as an agent, local sponsor also as a 
          joint venture to International Manufacturers, Suppliers and Contractors seeking to supply their products 
          and services in Uzbekistan for any industry by offering the necessary assistance business/procurement support
        </p>
        <p class="simple-text">
          Incon Ventures the beacon you have as a partner who offers comprehensive business solutions for all your
          project requirements. We would very much be pleased to enter in to your vender/- suppliers list and
          to support for your enquiries/tenders.
        </p>
      </div>
    </div>
    
    <section class="teams-block">
      <div class="container">
        <h2 class="section-title">We are combination of great culture, values and strong beliefs</h2>
        <p class="section-description">We are a honest, passionate team of visual designers, programmers, strategic thinkers and
          enthusiastic coffee drinkers who believe in honesty, dedication and ongoing support for
          our clients. We build inspiring brands, modern websites and disruptive digital products
          with enough power to leave the stratosphere.</p>
        <h5 class="fancy-title">
          <span>
            our team
          </span>
        </h5>
        <div class="team-members-wrapper">
          @foreach(App\TeamMember::all() as $team_member)
            @include('html.team-member', $team_member)
          @endforeach
        </div>
      </div>
    </section>

    @include('html.clients')

@endsection