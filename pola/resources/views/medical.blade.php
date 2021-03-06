@extends('layouts.app')
@section('content')
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


   <div class="medical">
    <div class="container-fluid">
    
        <div class="row">
        @foreach ($cats as $cat)
            <div class=" col-md-3 col-sm-12">
            <div class="gallery">
               <div>
               <a href="/{{Str::slug($cat->name)}}"><img src="img/{{$cat->img}}" class="card-img-top" alt="{{$cat->name}}"> <span class="overlay"></span></a>
               </div>  
            </div>

               <a href="/{{Str::slug($cat->name)}}"><p class="parent-icon-five"><i class="fas {{$cat->icon}}"></i></p></a><h5 class="title-doctor">{{$cat->name}}</h5>
              
             </div>
            
        @endforeach 
 
  
      </div>
    </div> 

    </div>
    <div class="footer" style="bottom:-350px">

<div class="container">
    <div class="row">
        <div class="col-lg-4 footer-ph">
           
        <img src="../img/logo-footer-final.png" class="logo-about" height="100px">
         

            </div>
            <div class="col-lg-4">
            <p class="loginas-footer">Services</p>
            <ul class="ul-footer">
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('welcome') }}">Home</a></li>
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('about-as') }}">About Us</a></li>
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('navigation') }}">Navigation</a></li>
                @if (!Auth::guest())
            @if(auth()->user()->user_type == 1)
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('certificate') }}">Certificate</a></li>
            @endif
            @endif
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('contactus') }}">Contact Us</a></li>
            </ul>
            </div>
            <div class="col-lg-4 text-align-footer">
            <p class="redeemyourpoints-footer">Redeem Your Points</p>
            <a class="reedem-img" href="{{ route('redeemyourpoints') }}"><img class="buttom-redeem" src="../img/Reedem-final.png" alt="Redeem Your Points"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="../img/Google-play-x1.png" alt="Google Play"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="../img/App-Store-x1.png" alt="App Store"></a>  
            </div>
   </div>
  </div>



<div class="copyright">
<div class="container">
    <p class="footer-text">  Copyright ?? 2020 <a class="footer-egncda" href="https://www.egncda.org/">Egncda Organisation</a> All Rights Reserved</p>
</div>

<div class="col-12  col-lg-2 text-align-footer footer-icon">
                <a href="https://www.facebook.com/EGNCDA/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/EGNCDA?s=20"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCwO3rB9rh5-qVKAIl2n7tgQ"><i class="fab fa-youtube"></i></a>
        </div>
</div>
</div>

</div>
      
@endsection


