@extends('layouts.app')
@include('upperbar')
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
          <a class="nav-link" href="{{ route('welcome') }}">Home</a>
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


<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-8 col-8">
            <p class="note">“Note:  Each Exam Will be taken for just one time … if you have any problem or enquiries please contact us”</p>
            <div class="card card-exam">
                <div class="card-header">My Exams</div>

                <div class="card-body">
                    <ul class="list-group">
                      @foreach($questionnaires as $questionnaire)
                          <li class="list-group-item">
                             <a href="{{$questionnaire->path()}}">{{$questionnaire->title}}</a>
                          </li>
                      @endforeach
                    </ul>
                </div>
            </div>

            @if (\Session::has('success'))
            <div class="alert alert-success msg-ex">
                {!! \Session::get('success') !!}
            </div>
            @endif

        </div>
    </div>
            </div>
            
<div class="container">
        <p class="number-calc">
       Score=
       <span>{{$scoure}}</span>
</p>
</div>
@include('layouts.footer')

