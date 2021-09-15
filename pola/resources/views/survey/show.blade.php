@extends('layouts.app')
@include('upperbar')
@section('content')
<div class="wrapper">
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">

             <h1 class="title-question">{{$questionnaire->title}}</h1>

             @if(count($questionnaire->questions) > 0)
             <form action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
                 @csrf
               
                    @foreach($questionnaire->questions as $key => $question)
                    <div class="card card-exam mt-4">
                        <div class="card-header"> <strong>{{$key + 1}}</strong> {{ $question->question }}</div>
                        <div class="card-body">

                            @error('responses.' . $key . '.answer_id')
                              <small class="text-danger">{{$message}}</small>
                            @enderror

                            <ul class="list-group">
                            @foreach($question->answers as $keyN =>$answer)
                               <label for="answer{{$answer->id}}">
                                   <li class="list-group-item">
                                    <input type="radio" name="responses[{{$key}}][answer_id]"
                                    {{ (old('responses.' . $key . '.answer_id') ==  $answer->id) ? 'checked' : '' }} 
                                    id="answer{{$answer->id}}" class="mr-2" value="{{$keyN + 1}}">
                                    {{ $answer->answer }}
                                     
                                    </li>
                               </label>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach

                    <div class="form-group">
                 
                    <textarea class="form-control" rows="5" id="comment" name="comment"  style="display:none;" required>0000</textarea>
                        @error('comment')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                  

                    <button type="submit" class="btn btn-dark mt-4">Complete Exam</button>
             </form>
             @endif
        </div>
    </div>
   
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
