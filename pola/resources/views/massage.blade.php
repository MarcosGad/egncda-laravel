@extends('layouts.app')
@include('upperbar')
<div class="wrapper">
<div class="container-fluid">
          <div class="row justify-content-center">
                <div class="col-lg-10 col-sm-8 col-8">
                    @if (\Session::has('success'))
                    <div class="alert alert-success result-massage">
                        {!! \Session::get('success') !!}
                    </div>
                    @endif
                </div>

    </div>
    </div>
            

@include('layouts.footer')


