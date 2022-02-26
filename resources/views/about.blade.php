@extends('layout', ['section' => 'about'])

@section('body_attributes')
class="about-body"
@endsection

@section('content')
    <div class="services-wrapper-links">
      @include('html.services', [
        "hasArrow"=> true,
        "title" => __("about.service_title"),
        "description" => __("about.service_description")
      ])
      <div class="container">
        <p class="simple-text">{!! __("about.body_1") !!}</p>
        <p class="simple-text">{!! __("about.body_2") !!}</p>
      </div>
    </div>
    
    <section class="teams-block">
      <div class="container">
        <h2 class="section-title">{!! __("about.team_title") !!}</h2>
        <p class="section-description">{!! __("about.team_description") !!}</p>
        <h5 class="fancy-title"><span>{!! __("parts.team.our") !!}</span></h5>
        <div class="team-members-wrapper">
          @foreach(App\TeamMember::all() as $team_member)
            @include('html.team-member', $team_member)
          @endforeach
        </div>
      </div>
    </section>

    @include('html.clients')

@endsection