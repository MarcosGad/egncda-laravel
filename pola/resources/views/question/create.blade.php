@if (auth()->user()->admin)
@extends('layouts.app')
@include('upperbar')
@section('content')
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
            <div class="col-lg-10 col-sm-8">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-exam-one">
                                <div class="card-header">Create new Question</div>

                                <div class="card-body">
                                <form action="/questionnaires/{{$questionnaire->id}}/questions" method="post"> 
                                    @csrf

                                  <div class="form-group">
                                     <label for="question">Question</label>
                                     <textarea class="form-control" rows="5" id="question" name="question[question]" value="{{ old('question.question') }}"  placeholder="Enter question"  required ></textarea>
                                        @error('question.question')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>


                                    <div class="form-group">
                                    <fieldset>
                                        <legend>Choices</legend>
                                            <div>
                                                <div class="form-group">
                                                    <label for="answer1">A</label>
                                                    <input name="answers[][answer]" value="{{ old('answers.0.answer') }}" type="text" class="form-control" id="answer1" aria-describedby="answer1Help" placeholder="Enter A">

                                                        @error('answers.0.answer')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                    <label for="answer2">B</label>
                                                    <input name="answers[][answer]" value="{{ old('answers.1.answer') }}" type="text" class="form-control" id="answer2" aria-describedby="answer1Help" placeholder="Enter B">

                                                        @error('answers.1.answer')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                    <label for="answer3">C</label>
                                                    <input name="answers[][answer]" value="{{ old('answers.2.answer') }}" type="text" class="form-control" id="answer3" aria-describedby="answer1Help" placeholder="Enter C">

                                                        @error('answers.2.answer')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                    <label for="answer4">D</label>
                                                    <input name="answers[][answer]" value="{{ old('answers.3.answer') }}" type="text" class="form-control" id="answer4" aria-describedby="answer1Help" placeholder="Enter D">

                                                        @error('answers.3.answer')
                                                        <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                </div>
                                            </div>


                                    </fieldset>
                                    </div>

                                    <div class="form-group">
                                        <label for="number_answer">The correct answer</label>
                                        <select class="form-control" id="number_answer" name="question[number_answer]">
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option value="4">D</option>
                                        </select>

                                        @error('question.number_answer')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror

                                    </div>

                                
                                    <button type="submit" class="btn btn-primary">Create Question</button>

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>
</div>
</div>

<div class="pola">
</div>

<div class="footer">

<div class="container">
    <div class="row">
        <div class="col-lg-4 footer-ph">
           
        <img src="../../../img/logo-footer-final.png" class="logo-about" height="100px">
         

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
            <a class="reedem-img" href="{{ route('redeemyourpoints') }}"><img class="buttom-redeem" src="../../../img/Reedem-final.png" alt="Redeem Your Points"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="../../../img/Google-play-x1.png" alt="Google Play"></a>
            <a class="app-img" href="#"><img class="buttom-redeem" src="../../../img/App-Store-x1.png" alt="App Store"></a>  
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
@else
@php
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
header('Location:' . $host_upper );
exit;
@endphp
@endif
