@extends('layouts.app')
@include('upperbar')
@section('content')

<div class="wrapper">


<div class="container">
   
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse bg-inverse">
<a class="navbar-brand" href="{{ route('welcome') }}"><img src="img/logo-header.png" height="90px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item {{ Request::segment(1) === 'welcome' ? 'active' : null }}">
          <a class="nav-link" style="color:#caf55f;" href="{{ route('welcome') }}">Home</a>
      </li>
   

      <li class="nav-item {{ Request::segment(1) === 'about-as' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('about-as') }}">About As</a>
      </li>

      <li class="nav-item {{ Request::segment(1) === 'navigation' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('navigation') }}">Navigation</a>
      </li>

     @if (!Auth::guest())
     @if(auth()->user()->user_type == 1)
      <li class="nav-item {{ Request::segment(1) === 'certificate' ? 'active' : null }}">
             <a class="nav-link" href="{{ route('certificate') }}">Certificate</a>
      </li>
     @endif
     @endif
      
      <li class="nav-item {{ Request::segment(1) === 'contactus' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
      </li>
      @if (!Auth::guest())
      <li class="nav-item {{ Request::segment(1) === 'logout' ? 'active' : null }}">    
                                   
          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
             Logout
          </a>
      </li>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
          
      @endif
    </ul>
    


  </div>
</nav>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <p class="desc-title">EgNCDS “ Egyptian NCD alliance”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/22.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <p class="desc-title">EGNCDA Non— GovernrnentaI Organization, Managed by board of directors. The alliance works with the efforts of 25 nonprofit organizations, all of which cooperate against non-communicable diseases.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <p class="desc-title">Aim to raise awareness about NCD in public through a lot of activities of our alliance successfully achieved, as EgNCDA  is one of the 10 alliances receiving the 2019 ENOUGH. Campaign Fuel Award for workplace wellness activities and social media, radio and television advocacy</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="login">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
          <a href="{{ route('login_p') }}"><img src="img/1.png" alt="Patient"></a>
          <h3 class="patient">Patient</h3>
        </div>
        <div class="col-sm-6">
        <a href="{{ route('login') }}"><img src="img/2.png" alt="Doctor(HCP)"></a>
          <h3 class="doctor">Doctor(HCP)</h3>
        </div>
    </div>
    </div>
</div>

@include('layouts.footer')
@endsection


