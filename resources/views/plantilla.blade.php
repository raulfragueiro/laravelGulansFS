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
        <div class="row d-flex justify-content-center">
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
        </div>

        <div class="row d-flex justify-content-center">
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">8</span>
              <a href="/plantilla/xoel">
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/xoel.png') }}" alt="Image" class="img-fluid image rounded-circle">
              </a>
              <h4>Xoel González</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">9</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/gabriel.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Gabriel Porto</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">10</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/javi.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Javier Gómez</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">11</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/gochy.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>David Fernández</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">14</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/sito.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Andrés González</h4>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center" >
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">21</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/isma.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Ismael Groba</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">23</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/xoel.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Iván González</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">31</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/sergio.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Sergio Reigosa</h4>
            </div>
          </div>
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5">
              <span class="team-number">93</span>
              <img src="{{ asset('mdbootstrap411/img/images/jugadores/yoni.png') }}" alt="Image" class="img-fluid image rounded-circle">
              <h4>Yonatan Troncoso</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection