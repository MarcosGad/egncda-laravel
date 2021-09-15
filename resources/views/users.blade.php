@extends('layouts.app')
@section('content')
@include('upperbar')
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
            <div class="row">
            <div class="col-md-10">
            <table class="table table-responsive">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->scoure}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

            </div>
            </div>
            
          </div>
         
        </div>

       </div>
       </div>
       @include('layouts.footer')
@endsection
