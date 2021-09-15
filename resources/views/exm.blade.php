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
                <div class="card-header">Exams</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionnaires/create" class="btn btn-dark">Create New Exam</a>
                </div>
            </div>

            <div class="card card-exam-one  mt-4">
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

        </div>
    </div>
            </div>
            </div>
          </div>
        </div>
        

        <div class="pola">
        </div>


</div>
@include('layouts.footer')
@endsection
