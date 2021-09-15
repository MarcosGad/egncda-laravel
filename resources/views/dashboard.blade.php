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
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-admin">
                            <div class="card-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif

                                <form action="{{ route('add') }}" method="Post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                
                                    <div class="form-group row">
                                        <label for="name_book">Name Of Book</label>

                                        <div class="col-md-6">
                                            <input id="name_book" type="text" class="form-control @error('name_book') is-invalid @enderror" name="name_book" required >
                                            @error('name_book')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pre_book">Link Google</label>

                                        <div class="col-md-6">
                                            <input id="pre_book" type="text" class="form-control @error('pre_book') is-invalid @enderror" name="pre_book" required >
                                            @error('pre_book')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="desc">Link</label>

                                        <div class="col-md-10">
                                        <textarea class="form-control @error('desc') is-invalid @enderror"  id="content" name="desc" rows="8" cols="8"></textarea>
                                            @error('desc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                    <label for="photo_book">Photo</label>

                                    <div class="col-md-6">
                                            <input id="photo_book" type="file" class="form-control-file" name="photo_book" required>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                    <label for="pdf_book">PDF</label>

                                    <div class="col-md-6">
                                            <input id="pdf_book" type="file" class="form-control-file" name="pdf_book" required>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                    <label for="cat_id">Cat</label>
                                    <select class="form-control cat" name="cat_id" id="cat">
                                     
                                     @foreach ($cats as $cat)
                                     <option value="{{$cat->id}}" >{{$cat->name}}</option>
                                     @endforeach
                                    
                                    </select>
                                    </div>

                                    
                                    <div class="form-group">
                                    <label for="categoriesofdoctors_id">Categories of Doctors</label>
                                    <select class="form-control" name="categoriesofdoctors_id" id="select_box">
                                    <option value="0">select......</option>
                                     @foreach ($categoriesofdoctors as $categoriesofdoctor)
                                     <option value="{{$categoriesofdoctor->id}}" >{{$categoriesofdoctor->name}}</option>
                                     @endforeach
                                
                                    </select>

                                   
                                   
                                    <div class="form-group one">
                                    <label for="basicmanagements_id">Categories of Doctors</label>
                                    <select class="form-control" name="basicmanagements_id" id="select_box_two">

                                    <option value="0">select......</option>
                                     
                                     @foreach ($basicmanagements as $basicmanagement)
                                     <option value="{{$basicmanagement->id}}" >{{$basicmanagement->name}}</option>
                                     @endforeach
                                
                                    </select>
                                    
                                    </div>

                                 
                                    <div class="form-group two">
                                    <label for="cvscurriculums_id">Categories of Curriculums</label>
                                    <select class="form-control" name="cvscurriculums_id" id="cvscurriculums_id">
                                     
                                    <option value="0">select......</option>

                                     @foreach ($cvscurriculums as $cvscurriculum)
                                     <option value="{{$cvscurriculum->id}}" >{{$cvscurriculum->name}}</option>
                                     @endforeach
                                
                                    </select>
                                   
                                    </div>


                                    <div class="form-group three">
                                    <label for="diabetescurriculums_id">Categories of Curriculums</label>
                                    <select class="form-control" name="diabetescurriculums_id" id="diabetescurriculums_id">
                                     
                                    <option value="0">select......</option>

                                     @foreach ($diabetescurriculums as $diabetescurriculum)
                                     <option value="{{$diabetescurriculum->id}}" >{{$diabetescurriculum->name}}</option>
                                     @endforeach
                                
                                    </select>
                                   
                                    </div>


                                    <div class="form-group four">
                                    <label for="respiratorycurriculums_id">Categories of Curriculums</label>
                                    <select class="form-control" name="respiratorycurriculums_id" id="respiratorycurriculums_id">
                                     
                                    <option value="0">select......</option>

                                     @foreach ($respiratorycurriculums as $respiratorycurriculum)
                                     <option value="{{$respiratorycurriculum->id}}" >{{$respiratorycurriculum->name}}</option>
                                     @endforeach
                                
                                    </select>
                                   
                                    </div>

   
                              <div class="form-group five">
                                    <label for="miscellaneouscurriculums_id">Categories of Curriculums</label>
                                    <select class="form-control" name="miscellaneouscurriculums_id" id="miscellaneouscurriculums_id">
                                     
                                    <option value="0">select......</option>

                                     @foreach ($miscellaneouscurriculums as $miscellaneouscurriculum)
                                     <option value="{{$miscellaneouscurriculum->id}}" >{{$miscellaneouscurriculum->name}}</option>
                                     @endforeach
                                
                                    </select>
                                   
                                    </div>

                                    <div class="form-group six">
                                    <label for="oncolcgycurriculums_id">Categories of Curriculums</label>
                                    <select class="form-control" name="oncolcgycurriculums_id" id="oncolcgycurriculums_id">
                                     
                                    <option value="0">select......</option>

                                     @foreach ($oncolcgycurriculums as $oncolcgycurriculum)
                                     <option value="{{$oncolcgycurriculum->id}}" >{{$oncolcgycurriculum->name}}</option>
                                     @endforeach
                                
                                    </select>
                                   
                                    </div>

                                

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
         </div>
            

        <a href="{{ route('add-codes') }}" class="btn btn-primary" style="display:none;">Add Codes</a>

        </div>    
       @include('layouts.footer')
      
@endsection
