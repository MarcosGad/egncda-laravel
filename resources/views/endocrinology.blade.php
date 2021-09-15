@extends('layouts.app')
        @section('content')
        @include('upperbar')
           
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-12">
            <div class="card-deck">
  <div class="card">
    <img src="img/CVS.jpg" class="card-img-top" alt="CVS">
    <div class="card-body">
      <h5 class="card-title">CVS</h5>
    </div>
  </div>
  <div class="card">
    <img src="img/Endocrinology.jpg" class="card-img-top" alt="Endocrinology">
    <div class="card-body">
      <h5 class="card-title">Endocrinology</h5>
    </div>
  </div>
  <div class="card">
    <img src="img/Respiratory.jpg" class="card-img-top" alt="Respiratory">
    <div class="card-body">
      <h5 class="card-title">Respiratory</h5> 
    </div>
  </div>
  <div class="card">
    <img src="img/Oncology.jpg" class="card-img-top" alt="Oncology">
    <div class="card-body">
      <h5 class="card-title">Oncology</h5>
    </div>
  </div>
</div>

               
            </div>
          </div>
        </div>
@include('layouts.footer')
@endsection
