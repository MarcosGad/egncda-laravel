@extends('layouts.app')
@section('content')
@include('upperbar')
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
            <div class="col-md-12">
            <table class="table table-responsive">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mr/Mrs</th>
                    <th scope="col">Dr</th>
                    <th scope="col">Prof</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Passport</th>
                    <th scope="col"> Affiliation</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type Of Attendance</th>
                    <th scope="col">Type Of Contribution Submitted</th>
                    <th scope="col">Title Of The Contribution</th>
                    <th scope="col">Conference Fee</th>
                    <th scope="col">Conference Dinner</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Money Order Issued On</th>
                    <th scope="col">Money Order Issued To</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($redeems as $redeem)
                    <tr>
                    <th scope="row">{{$redeem->id}}</th>
                    <td>{{$redeem->first_name}}</td>
                    <td>{{$redeem->middle_name}}</td>
                    <td>{{$redeem->last_name}}</td>
                    <td>{{$redeem->mr_mrs}}</td>
                    <td>{{$redeem->dr}}</td>
                    <td>{{$redeem->prof}}</td>
                    <td>{{$redeem->nationality}}</td>
                    <td>{{$redeem->passport}}</td>
                    <td>{{$redeem->affiliation}}</td>
                    <td>{{$redeem->mobile_no}}</td>
                    <td>{{$redeem->email}}</td>
                    <td>{{$redeem->type_of_attendance}}</td>
                    <td>{{$redeem->type_of_contribution_submitted}}</td>
                    <td>{{$redeem->title_of_the_contribution}}</td>
                    <td>{{$redeem->conference_fee}}</td>
                    <td>{{$redeem->conference_dinner}}</td>
                    <td>{{$redeem->total_amount}}</td>
                    <td>{{$redeem->money_order_issued_on}}</td>
                    <td>{{$redeem->money_order_issued_to}}</td>
                    <td>{{$redeem->created_at}}</td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('confer.delete',['id'=>$redeem->id])}}">Delete</a></td>
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
