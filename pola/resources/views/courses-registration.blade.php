@extends('layouts.app')
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
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-redeem">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('courses-registration') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" required>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" required>

                                @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" required>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mr_mrs" class="col-md-4 col-form-label text-md-right">Mr/Mrs</label>

                            <div class="col-md-6">
                                <input id="mr_mrs" type="text" class="form-control @error('mr_mrs') is-invalid @enderror" name="mr_mrs" required>

                                @error('mr_mrs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dr" class="col-md-4 col-form-label text-md-right">Dr</label>

                            <div class="col-md-6">
                                <input id="dr" type="text" class="form-control @error('dr') is-invalid @enderror" name="dr" required>

                                @error('dr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prof" class="col-md-4 col-form-label text-md-right">Prof</label>

                            <div class="col-md-6">
                                <input id="prof" type="text" class="form-control @error('prof') is-invalid @enderror" name="prof" required>

                                @error('prof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" required>

                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passport" class="col-md-4 col-form-label text-md-right">Passport</label>

                            <div class="col-md-6">
                                <input id="passport" type="text" class="form-control @error('passport') is-invalid @enderror" name="passport" required>

                                @error('passport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="affiliation" class="col-md-4 col-form-label text-md-right">Affiliation</label>

                            <div class="col-md-6">
                                <input id="affiliation" type="text" class="form-control @error('affiliation') is-invalid @enderror" name="affiliation" required>

                                @error('affiliation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" required>

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="type_of_contribution_submitted" class="col-md-4 col-form-label text-md-right">type of attendance</label>

                            <div class="col-md-6">

                                <div class="custom-control custom-radio">

                                <input type="radio" class="custom-control-input @error('type_of_contribution_submitted') is-invalid @enderror" name="type_of_contribution_submitted" value="Poster presentation" id="customRadioone">
                                <label class="custom-control-label" for="customRadioone"> Poster presentation </label><br />
                                </div>
                                
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input @error('type_of_contribution_submitted') is-invalid @enderror" name="type_of_contribution_submitted" value="Oral Presentation (Short paper 15 Minutes)"  id="customRadiotwo">
                                <label class="custom-control-label" for="customRadiotwo"> Oral Presentation (Short paper 15 Minutes) </label><br />
                                </div>

                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input  @error('type_of_contribution_submitted') is-invalid @enderror" name="type_of_contribution_submitted" value="Regular talk (Long paper 25 Minutes)"  id="customRadiothree">
                                <label class="custom-control-label" for="customRadiothree"> Regular talk (Long paper 25 Minutes) </label><br />
                                </div>

                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input  @error('type_of_contribution_submitted') is-invalid @enderror" name="type_of_contribution_submitted" value="Review Talk (Long paper 40 Minutes)"  id="customRadiofour">
                                <label class="custom-control-label" for="customRadiofour"> Review Talk (Long paper 40 Minutes) </label><br />
                                </div>
                                @error('type_of_contribution_submitted')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="type_of_attendance" class="col-md-4 col-form-label text-md-right ">Type of Attendance</label>

                            <div class="col-md-6">

                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input @error('type_of_attendance') is-invalid @enderror" name="type_of_attendance" value="Participant" id="customRadio">
                                <label class="custom-control-label" for="customRadio"> Participant </label>
                              </div> 
                               
                                @error('type_of_attendance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title_of_the_contribution" class="col-md-4 col-form-label text-md-right">Title of the Contribution</label>

                            <div class="col-md-6">
                            <textarea class="form-control @error('title_of_the_contribution') is-invalid @enderror" name="title_of_the_contribution" id="title_of_the_contribution" rows="5"></textarea>
                                @error('title_of_the_contribution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conference_fee" class="col-md-4 col-form-label text-md-right">Conference Fee</label>

                            <div class="col-md-6">
                                <input id="conference_fee" type="text" class="form-control @error('conference_fee') is-invalid @enderror" name="conference_fee" required>

                                @error('conference_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conference_dinner" class="col-md-4 col-form-label text-md-right">Conference Dinner</label>

                            <div class="col-md-6">
                                <input id="conference_dinner" type="text" class="form-control @error('conference_dinner') is-invalid @enderror" name="conference_dinner" required>

                                @error('conference_dinner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total_amount" class="col-md-4 col-form-label text-md-right">Total Amount</label>

                            <div class="col-md-6">
                                <input id="total_amount" type="text" class="form-control @error('total_amount') is-invalid @enderror" name="total_amount" required>

                                @error('total_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="money_order_issued_on" class="col-md-4 col-form-label text-md-right">Money Order issued on</label>

                            <div class="col-md-6">
                                <input id="money_order_issued_on" type="text" class="form-control @error('money_order_issued_on') is-invalid @enderror" name="money_order_issued_on" required>

                                @error('money_order_issued_on')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="money_order_issued_to" class="col-md-4 col-form-label text-md-right">Money order issued to</label>

                            <div class="col-md-6">
                                <input id="money_order_issued_to" type="text" class="form-control @error('money_order_issued_to') is-invalid @enderror" name="money_order_issued_to" required>

                                @error('money_order_issued_to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-save">
                                   Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')