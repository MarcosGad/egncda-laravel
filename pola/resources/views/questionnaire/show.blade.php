@extends('layouts.app')

@include('upperbar')

@section('content')

@if (auth()->user()->admin)

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
            <div class="col-lg-10 col-sm-8 ">
            @endif
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-exam-one ">
                                <div class="card-header">{{ $questionnaire->title }}</div>
                                <div class="card-body">
                                @if (auth()->user()->admin)
                                    <a class="btn btn-primary" href="/questionnaires/{{$questionnaire->id}}/questions/create">Add New Question</a>
                                @else
                                <a class="btn btn-primary" href="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}">Take Exam</a>
                                @endif
                                </div>
                            </div>
                        
                            @if (auth()->user()->admin)
                            @foreach($questionnaire->questions as $question)
                            <div class="card mt-4">
                                <div class="card-header">{{ $question->question }}</div>
                                <div class="card-body">
                                    <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <li class="list-group-item d-flex justify-content-between">
                                        <div>{{ $answer->answer }}</div>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            
                            <div class="card-footer">
                                <form action="/questionnaires/{{$questionnaire->id}}/questions/{{$question->id}}" method="post">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete Question</button>
                                </form>
                            </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            </div>
            </div>
            <div class="adel">

            </div>

            <div class="footer">

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
