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
        <div class="col-md-12">
        <h1 class="head">Certificate program in Applied Public Health and NCDs</h1>
        <p class="phragraf">EgNCDA announced the next phase of its Certificate program in Applied Public Health and NCDs.</p>
        <p class="phragraf">a free, online resource called the Egyptian NCD Academy, which will provide primary care providers in Egypt with access to the most up-to-date information and resources on all related fields of  non-communicable diseases (NCDs).</p>
        <p class="phragraf">NCDs, such as cardiovascular disease, cancer, diabetes and chronic lung diseases, are the cause of over 80 percent of deaths worldwide.</p>
        <p class="phragraf">The Egyptian NCD Academy builds on a model framework that integrates healthcare professional advocacy and capacity building paving the way for replication in Egypt and EMR region.</p>
        <p class="phragraf">Educational medical forum, for primary care physicians, tackling the prevention and management of NCDs.</p>
        <p class="phragraf">Egyptian NCD Academy for primary care physicians, tackling the prevention and management of NCDs supported by Pfizer Upjohn Egypt, to equip clinicians with the latest science, resources and tools needed to reinforce best practices in treating patients.</p>
        <p class="phragraf">Capability building of primary care personnel through education and tools is a national priority that the Egyptian NCD alliance is committed to contribute to through several initiatives that we are developing and planning to conduct with our partners throughout the next years” commented Professor Adel El Sayed – Professor of Internal Medicine and President of the Egyptian NCD alliance</p>
        <p class="phragraf">In his turn Dr Mohamed Sweilam – General Manager of Upjohn Egypt emphasized the role that public private partnerships can have to advance strategic actions that can provide efficient and effective solutions to overcome the NCDs healthcare challenges in its many facets.</p>
        <p class="phragraf">With the continued commitment of Pfizer Upjohn, NCD Academy will provide primary care providers with a suite of online certificate programs to enhance their knowledge for NCD prevention.</p>
        <p class="phragraf">Program will focus on cardiovascular disease, chronic respiratory diseases, diabetes and mental disorders with plans to add courses in cancer. </p>
        <p class="phragraf">Program accredited from Royal college  of physicians “RCP” UK. & CEMTA “Compulsory Egyptian Medical Training Authority” </p>
        </div>
   </div>

   <div class="medical-two">
    <div class="container-fluid">
    
        <div class="row">
        @foreach ($cats as $cat)
            <div class="col-md-3 col-sm-12">
            <div class="gallery">
               <div>
               <a href="/{{Str::slug($cat->name)}}"><img src="img/{{$cat->img}}" class="card-img-top" alt="{{$cat->name}}"> <span class="overlay"></span></a>
               </div>  
            </div>

               <a href="/{{Str::slug($cat->name)}}"><p class="parent-icon"><i class="fas {{$cat->icon}}"></i></p></a><h5 class="title-doctor">{{$cat->name}}</h5>
               <a class="btn btn-primary curriculum-link" href="/{{$cat->link_curriculum}}">Curriculum</a>
               <a class="btn btn-primary exam-link" href="/{{$cat->link_exam}}">Exam</a>
             
             </div>
            
        @endforeach 
 
  
      </div>
    </div> 

    </div>
   
    <div class="footer"  style="bottom: -350px">

<div class="container">
    <div class="row">
        <div class="col-lg-4 footer-ph">
         
        <img src="img/logo-footer-final.png" class="logo-about" height="100px">
         

            </div>
            <div class="col-lg-4">
            <p class="redeemyourpoints-footer">Redeem Your Points</p>
            <a class="reedem-img" href="{{ route('redeemyourpoints') }}"><img class="buttom-redeem" src="img/Reedem-final.png" alt="Redeem Your Points"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="img/Google-play-x1.png" alt="Google Play"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="img/App-Store-x1.png" alt="App Store"></a>  
            
            </div>
            <div class="col-lg-4 text-align-footer">
            <p class="loginas-footer">Services</p>
            <ul class="ul-footer">
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('welcome') }}">Home</a></li>
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('about-as') }}">About Us</a></li>
                <li><i class="fas fa-chevron-right"></i> <a  href="{{ route('navigation') }}">Navigation</a></li>
            </ul>
            </div>
   </div>
  </div>



<div class="copyright">
<div class="container">
    <p class="footer-text">  Copyright © 2020 <a class="footer-egncda" href="https://www.egncda.org/">Egncda Organisation</a> All Rights Reserved</p>
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

