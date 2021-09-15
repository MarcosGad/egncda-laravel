@extends('layouts.app')
@include('upperbar')

@section('content')
<div class="wrapper">
<div class="container-fluid">
          <div class="row">
            <div class="col-lg-2 col-sm-4 col-4">

            <ul class="nav flex-column">
                
            
            <li class="nav-item {{request()->is('home')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('home') }}">Add</a>
            </li>
            <li class="nav-item {{request()->is('exm')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('exm') }}">Exm</a>
            </li>
            <li class="nav-item {{request()->is('comment')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('comment') }}">Comment Eams</a>
            </li>
            <li class="nav-item {{request()->is('confer')  ? 'active' : null }}">
                    <a class="nav-link" href="{{ route('confer') }}">Conferences</a>
            </li>
            <!-- logout -->
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                       Log Out
                </a>                        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
                

            </ul> 
            
            </div>
            <div class="col-lg-10 col-sm-8 col-8">
            <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8">

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($comment_eams as $comment_eam)
                    <tr>
                    <th scope="row">{{$comment_eam->id}}</th>
                    <td>{{$comment_eam->first_name}}</td>
                    <td>{{$comment_eam->questionnaire_title}}</td>
                    <td>{{$comment_eam->comment}}</td>
                    <td>{{$comment_eam->created_at}}</td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('comment.delete',['id'=>$comment_eam->id])}}">Delete</a></td>
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
