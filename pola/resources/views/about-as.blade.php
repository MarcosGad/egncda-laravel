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
          <a class="nav-link"  href="{{ route('welcome') }}">Home</a>
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

<div class="container">
<div class="desc-title-about">
  <div class="row">
    <div class="col-md-12">
<p>EgNCDS “ Egyptian NCD alliance”</p>
<p>EGNCDA Non— GovernrnentaI Organization, Managed by board of directors. The alliance works with the efforts of 25 nonprofit organizations, all of which cooperate against non-communicable diseases.</p>
<p>Aim to raise awareness about NCD in public through a lot of activities of our alliance successfully achieved, as EgNCDA  is one of the 10 alliances receiving the 2019 ENOUGH. Campaign Fuel Award for workplace wellness activities and social media, radio and television advocacy</p>
</div>
</div>
</div>
</div>


@include('layouts.footer')
@endsection


