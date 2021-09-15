@extends('layouts.app')
@section('content')
@include('upperbar')

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
    
    <div class="medical">
     <div class="container-fluid">
         <div class="row">
                    
            <div class="col-sm-4">  
             <div class="gallery-three">
               <div>          
               <a href="#"><img src="img/6666.jpg" class="img-doctor" alt="Social"><span class="overlay-three"></span></a>
                </div>
                <div>
                <p class="parent-icon-three"><i class="fas fa-newspaper"></i></p>
                </div>
             </div>
             
                <h5 class="title-do">Syndicate news</h5>
            </div>


            <div class="col-sm-4">
            <div class="gallery-three">
            <div>    
                <a href="#"><img src="img/1111.jpg" class="img-doctor" alt="Social" ><span class="overlay-three"></span></a>
                </div> 
                <div>
                <p class="parent-icon-three"><i class="fas fa-futbol"></i></p>
                </div> 
             </div>
             
                <h5 class="title-do">Sports</h5>
            </div>

            <div class="col-sm-4">
            <div class="gallery-three">
            <div>    
                <a href="#"><img src="img/2222.jpg" class="img-doctor" alt="Social" ><span class="overlay-three"></span></a>
                </div> 
                <div>
                <p class="parent-icon-three"><i class="fas fa-newspaper"></i></p>
                </div> 
             </div>
             
                <h5 class="title-do">News</h5>
            </div>

           </div>   
     </div>
   </div>      
      
@include('layouts.footer')
@endsection
