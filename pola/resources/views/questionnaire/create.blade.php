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
                                <div class="card-header">Create new Exam</div>

                                <div class="card-body">
                                <form action="/questionnaires" method="post"> 
                                    @csrf

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        
                                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">

                                        @error('title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="purpose">Purpose</label>
                                        <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">

                                        @error('purpose')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                    <label for="cat_id">Cat</label>
                                    <select class="form-control" name="cat_id" id="cat_id">
                                     
                                     @foreach ($cats as $cat)
                                     <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                     @endforeach
                                    
                                    </select>
                                    </div>

                                    
                                    <div class="form-group">
                                    <label for="categoriesofdoctors_id">Categories of Doctors</label>
                                    <select class="form-control" name="categoriesofdoctors_id" id="categoriesofdoctors_id">
                                    <option value="0">select......</option>
                                     @foreach ($categoriesofdoctors as $categoriesofdoctor)
                                     <option value="{{$categoriesofdoctor->id}}" >{{$categoriesofdoctor->name}}</option>
                                     @endforeach
                                
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="basicmanagements_id">Categories of Doctors</label>
                                    <select class="form-control" name="cvscurriculums_id" id="basicmanagements_id">
                                    <option value="0">select......</option>
                                     @foreach ($basicmanagements as $basicmanagement)
                                     <option value="{{$basicmanagement->id}}" >{{$basicmanagement->name}}</option>
                                     @endforeach
                                
                                    </select>
                                    
                                    </div>

                                


                                    <button type="submit" class="btn btn-primary">Create Exam</button>

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

            <div class="footer" style="bottom:-210px;">

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
@else
@php
$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
header('Location:' . $host_upper );
exit;
@endphp
@endif