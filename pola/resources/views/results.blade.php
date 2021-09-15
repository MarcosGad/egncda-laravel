@extends('layouts.app')
@include('upperbar')
@section('content')

<div class="wrapper">


<div class="container">
   
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse bg-inverse">
<a class="navbar-brand" href="#"><img src="img/logo-header.png" height="98px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    
    <li class="nav-item {{ Request::segment(1) === 'welcome' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('welcome') }}">Home</a>
      </li>

      <li class="nav-item {{ Request::segment(1) === 'about-as' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('about-as') }}">About As</a>
      </li>

      <li class="nav-item {{ Request::segment(1) === 'navigation' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('navigation') }}">Navigation</a>
      </li>

      <li class="nav-item {{ Request::segment(1) === 'contactus' ? 'active' : null }}">
          <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
      </li>
      
      
     
    </ul>

  </div>
</nav>
</div>


<div class="container">
        <div class="row">
          @if($users->count() > 0)
               <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Doctor</th>
                    <th scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>

                @foreach ($users as $user)
                    <tr>
                    <th scope="row">{{$user->first_name}}</th>
                    <td>{{$user->scoure}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
               
                @else
                <div class="col-md-12">
                <div class="no-result">
                  <p>No Search Found</p>
                </div>
                </div>
                @endif


   </div>
   </div>




@include('layouts.footer')
@endsection


