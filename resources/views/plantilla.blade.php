@extends('layouts.main')

@section('content')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h1 class="text-uppercase">Plantilla</h1>
            <h3>TEMPORADA 2019-2020</h3>
          </div>
        </div>
        <div class="row">
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">1</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/denis.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Denís González</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">2</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/brais.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Brais González</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">5</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/miguel.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Miguel Lago</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">6</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/fran.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Fran Campelo</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">7</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/raul.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Raúl Fragueiro</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">8</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/xoel.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Xoel González</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection