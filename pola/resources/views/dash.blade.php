@extends('layouts.app')
@include('upperbar')


@if (auth()->user()->user_type)




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
                    
            <div class="col-sm-6">  
             <div class="gallery-two">
               <div>          
               <a href="{{route('medical')}}"><img src="img/m.jpg" class="img-doctor" alt="Medical"><span class="overlay-two"></span></a>
                </div>
                <div>
                <p class="parent-icon-two"><i class="fas fa-briefcase-medical"></i></p>
                </div>
             </div>
             
                <h5 class="title-do">Medical</h5>
            </div>


            <div class="col-sm-6">
            <div class="gallery-two">
            <div>    
                <a href="{{route('social')}}"><img src="img/s.jpg" class="img-doctor" alt="Social" ><span class="overlay-two"></span></a>
                </div> 
                <div>
                <p class="parent-icon-two"><i class="fas fa-share-alt"></i></p>
                </div> 
             </div>
             
                <h5 class="title-do">Social</h5>
            </div>

           </div>   
     </div>
    </div>  
   

    @elseif (auth()->user()->admin)
    <div class="wrapper">
    <div class="body-admin">     
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-2 col-sm-4">

            <ul class="nav flex-column">

            <li class="nav-item {{request()->is('home')  ? 'active' : null }}">
             <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li> 
                
            <li class="nav-item {{request()->is('add')  ? 'active' : null }}">
             <a class="nav-link" href="{{ route('add') }}"><i class="fas fa-plus"></i> Add</a>
            </li>
           
            <li class="nav-item {{request()->is('exm')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('exm') }}"><i class="fas fa-newspaper"></i> Exm</a>
            </li>
            <li class="nav-item {{request()->is('confer')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('confer') }}"><i class="fas fa-star-of-life"></i> Conferences</a>
            </li>
            <li class="nav-item {{request()->is('users')  ? 'active' : null }}">
             <a class="nav-link" href="{{ route('users') }}"><i class="fas fa-users"></i> Users</a>
            </li> 
            <!-- logout -->
                <li class="nav-item {{request()->is('logout')  ? 'active' : null }}">
                <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                         Log Out
                </a>                        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
                

            </ul> 
            
            </div>

            <div class="col-lg-10  col-sm-8">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="container">
    <div id="chartContainer" style="height: 300px; width: 100%; margin-top:27px; display: block;" ></div>
   </div>




   <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  backgroundColor: "#A4A4A4",  
	title:{
    fontColor: "#fff",
		text: "Redeem Your Points"
	},
	data: [{
		type: "spline",
		dataPoints:<?php echo json_encode($data); ?>
	}]
});
chart.render();

}
</script>


            </div>
            </div>
            
          </div>
         
        </div>

       </div>
       </div>
       <div class="adel">

        </div>

           
            </div>
          </div>
        </div>

   @elseif (auth()->user()->user_type == 0)

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
            <div class="gallery-four">
            <div>          
            <a href="#"><img src="img/3333.jpg" class="img-doctor" alt=""><span class="overlay-four"></span></a>
                </div>
                <div>
                <p class="parent-icon-four"><i class="fas fa-utensils"></i></p>
                </div>
            </div>
            
                <h5 class="title-do">التوصيات الغذائية " كل ولا تاكل"</h5>
            </div>


            <div class="col-sm-4">
            <div class="gallery-four">
            <div>    
                <a href="#"><img src="img/5555.jpg" class="img-doctor" alt="" ><span class="overlay-four"></span></a>
                </div> 
                <div>
                <p class="parent-icon-four"><i class="fas fa-dumbbell"></i></p>
                </div> 
            </div>
            
                <h5 class="title-do">أساليب تعديل نمط الحياة</h5>
            </div>

            <div class="col-sm-4">
            <div class="gallery-four">
            <div>    
                <a href="#"><img src="img/4444.jpg" class="img-doctor" alt="" ><span class="overlay-four"></span></a>
                </div> 
                <div>
                <p class="parent-icon-four"><i class="fas fa-calendar-plus"></i></p>
                </div> 
            </div>
            
                <h5 class="title-do">احداث توعية</h5>
            </div>

        </div>   
     </div>
    </div>


@endif
@include('layouts.footer')


