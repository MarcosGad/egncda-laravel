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


<div class="container">
<div class="desc-title-nav">
  <div class="row">
    <div class="col-md-12">
      <h1 class="head">How to navigate through our website?</h1>
<p>For Doctor User:</p>
<p>1-	Click on <a href="https://egncda.com/login"> Doctor </a> icon in Home Page</p>
<p>2-	If you have an account please <a href="https://egncda.com/login"> log in </a>, if you don’t have an account you have to <a href="https://egncda.com/code"> register </a> (to register you have to enter your code given to you)</p>
<p>3-	After registration you will have to choose between <a href="https://egncda.com/home"> Medical </a> & <a href="https://egncda.com/home"> Social </a></p>
<p>4-	In <a href="https://egncda.com/medical"> medical </a> you will find Several Specializations</p>
<p class="sub">- <a href="https://egncda.com/cvs"> CVS </a></p>
<p class="sub">- <a href="https://egncda.com/diabetes"> Diabetes </a></p>
<p class="sub">- <a href="https://egncda.com/respiratory"> Respiratory </a></p>
<p class="sub">- <a href="https://egncda.com/oncology"> Oncology </a></p>
<p class="sub">- <a href="https://egncda.com/miscellaneous"> Miscellaneous </a></p>
<p class="sub">- <a href="https://egncda.com/assessment"> Assessment </a></p>
<p class="sub">- <a href="https://egncda.com/courses-registration"> Courses Registration </a></p>
<p>5-	In each Specialization you will find it’s resources</p>
<p>Ex: in <a href="https://egncda.com/cvs"> CVS </a> You will find:</p>
<p class="sub">- <a href="https://egncda.com/basic-resources"> Basic Resources ( Books & Curriculum ) </a></p>
<p class="sub">- <a href="#"> Clinical Scenarios </a></p>
<p class="sub">- <a href="#"> Guidelines </a></p>
<p class="sub">- <a href="#"> updates & News </a></p>
<p class="sub">- <a href="https://egncda.com/exam"> Exam </a></p>
<p>7-	In <a href="https://egncda.com/social"> Social </a> you will find:</p>
<p class="sub">- <a href="#"> Syndicate News </a></p>
<p class="sub">- <a href="#"> Sports </a></p>
<p class="sub">- <a href="#"> News </a></p>
<p>For Patient User:</p>

<p class="sub-right">1-	اضغط علي ايقونه ال <a href="https://egncda.com/login_p"> Patient </a> في الصفحة الرئيسية</p>
<p class="sub-right">2-	ازا كان لديك حساب اضغط علي <a href="https://egncda.com/login_p"> Log In </a>  , إذا لم يكن لديك حساب قم بإنشاء حساب عن طريق الضغط علي <a href="https://egncda.com/codePa"> Register </a> </p>
<p class="sub-right">( ستقوم بإدخال الكود الذي حصلت عليه من الدكتور لتكمل عملية التسجيل)</p>
<p class="sub-step">.........................................................................................</p>
<p class="sub-right">3-	بعد التسجيل والدخول ستجد:</p>
<p class="sub-right">- <a href="#"> أحداث توعية </a></p>
<p class="sub-right">- <a href="#"> أساليب تعديل نمط الحياة </a></p>
<p class="sub-right">- <a href="#"> "التوصيات الغذائية" كل ولا تأكل </a></p>

</div>
</div>
</div>
</div>





<div class="footer" style="bottom:-300px">

<div class="container">
    <div class="row">

        <div class="col-lg-4 footer-ph">   
             <img src="img/logo-footer-final.png" class="logo-about" height="100px">
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
            <a class="reedem-img" href="{{ route('redeemyourpoints') }}"><img class="buttom-redeem" src="img/Reedem-final.png" alt="Redeem Your Points"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="img/Google-play-x1.png" alt="Google Play"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="img/App-Store-x1.png" alt="App Store"></a>   
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


