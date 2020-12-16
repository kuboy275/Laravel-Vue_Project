@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admins\role\add.css') }}">
@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'Roles' , 'key'=>'Add'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12"> 
                  
                  <form action="{{ route('roles.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">

                          <label>Tên vai trò</label>
                          <input type="text" 
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="nhập tên vai trò" 
                            name="name"
                            value="{{old('name')}}"
                            autocomplete="off">
                    
                            @error('name')
                              <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                            @enderror

                      </div>

                      <div class="form-group">

                          <label>Mô tả vai trò</label>

                          <textarea
                            name="display_name"
                            class="form-control @error('description') is-invalid @enderror"
                            cols="40" rows="10"  placeholder="Nhập nội dung mô tả" >{{old('dipsplay_name')}}</textarea>
                    
                            @error('description')
                              <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                            @enderror
                            
                      </div>     
                      <div class="row">
                        <div class="col-md-12 ml-1">
                            <label>
                              <input type="checkbox" class="check_all">
                              Check All
                            </label>
                        </div>
                      </div>

                      @foreach($permissionParents as $permissionParent)
                      <div class="card text-white bg-secondary mb-3" >
                        <div class="card-header bg-danger ">
                            <h5 class="mb-0">
                                <label for="">
                                <input type="checkbox" name="" class="checkbox_wrapper" >
                                </label>
                               Module  {{ $permissionParent->name }}
                            </h5>
                        </div>
                        <div class="row ml-5">
                             @foreach($permissionParent->permissionChild as $permissionChild)
                               
                             
                                 <div class="card-body ">
                                     <h5 class="mb-0">
                                         <label for="">
                                            <input type="checkbox"
                                                    class="checkbox_child"
                                                    name="permission_id[]" 
                                                    value="{{ $permissionChild->id }}" >
                                         </label>
                                        {{ $permissionChild->name}}
                                     </h5>
                                 </div>
                              @endforeach
                        </div>
                    </div>
                      @endforeach



                      <button type="submit" class="btn btn-primary mb-3"> Submit</button>

                  </form>
              </div>
          </div> 
        </div>
      </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('admins\role\add\add.js') }}"></script>
@endsection