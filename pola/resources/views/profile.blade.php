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

  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-redeem">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card-body">
                          
                          <form action="{{route('profile')}}" method="POST">
                            {{ csrf_field()}}
    
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control  @error('first_name') is-invalid @enderror" name="first_name"  value="{{$user->first_name}}">
                              @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                             </div>
                            
                             <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" readonly value="{{$user->email}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                            </div>


                            <div class="form-group">
                                <label for="password">Old Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                            </div>

                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="text" class="form-control" name="new_password">
                                @error('new_password')
                                    <span class="invalid-feedback  @error('new_password') is-invalid @enderror" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
    
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>  
                         
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection

