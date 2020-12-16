@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admins/user/add.css') }}" rel="stylesheet" />
@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'User' , 'key'=>'Add'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6"> 
                  
                  <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                      @csrf

                        <div class="form-group">

                            <label>Tên </label>
                            <input  type="text" 
                                    class="form-control "
                                    placeholder="nhập tên " 
                                    name="name"
                                    value="{{old('name')}}"
                                    autocomplete="off">                   
                        </div>

                        <div class="form-group">

                            <label>Email </label>
                            <input  type="email" 
                                    class="form-control "
                                    placeholder="nhập Email " 
                                    name="email"
                                    autocomplete="off">
                        </div>

                    
                        <div class="form-group">

                            <label>Password </label>

                            <input  type="text" 
                                    class="form-control "
                                    placeholder="nhập password" 
                                    name="password">                    
                        </div>

                        <div class="form-group">

                            <label>Chọn vai trò </label>
                            <select name="role_id[]" class="form-control select2_init" multiple>
                                @foreach($roles as $role)
                                <option value="{{ $role->id }}"> {{ $role->name }} </option>
                                @endforeach
                            </select>
                        </div>

                      <button type="submit" class="btn btn-primary mb-3"> Submit</button>

                  </form>
              </div>
          </div> 
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admins/user/add.js') }}"></script>
@endsection