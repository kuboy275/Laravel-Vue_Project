{{-- @extends('layouts.admin')

@section('title')

  <title> Permission </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'Permission' , 'key'=>'Add'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12"> 
                  
                  <form action="{{ route('permissions.store') }}" method="post">
                      @csrf
                      <div class="form-group col-md-4">
                          <label>Chọn Tên Module</label>
                          <select class="form-control" name="module_parent">
                                <option value="Chon tên Module"> Chọn tên module </option>
                              @foreach(config('permissions.table_module') as $moduleItem)
                                  <option value=" {{ $moduleItem }}"> {{ $moduleItem }} </option>
                              @endforeach

                          </select>
                      </div>

                      <div class="form-group col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                            <label>
                                <input type="checkbox" class="check_all">
                                Chọn tất cả
                            </label>
                          </div>

                            @foreach(config('permissions.module_childrent') as $moduleChildrent)
                            
                                <div class="col-md-3">
                                    <label for="">
                                        <input type="checkbox" class="check_child" value="{{ $moduleChildrent }}" name="module_childrent[]">
                                        {{ $moduleChildrent }}
                                    </label>
                                </div>

                            @endforeach

                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary"> Submit</button>
                      
                  </form>
              </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('js')
    <script src=" {{ asset('admins\permissions\add.js') }} "></script>
@endsection --}}

@extends('layouts.admin')

@section('title')

  <title> permission Add </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'permission' , 'key'=>'Add'])
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6"> 
                  
                  <form action="{{ route('permissions.store')}}" method="post">
                      @csrf
                      <div class="form-group">
                          <label>Tên permisson</label>
                          <input type="text" 
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="nhập tên danh mục" 
                            name="module_parent"
                            autocomplete="off">

                          @error('name')
                            <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="form-group">
                        <div class="row">
                            @foreach(config('permissions.module_childrent') as $moduleItemChilrent)
                                <div class="col-md-3">
                                    <label for="">
                                        <input type="checkbox" value="{{ $moduleItemChilrent }}" name="module_chilrent[]">
                                        {{ $moduleItemChilrent }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>


                      

                      <div class="form-group">
                          <label>Chọn permisson cha</label>
                          <select class="form-control"
                                  name="parent_id">
                              <option value="0">Chọn permisson cha</option>
                              {!! $optionSelect !!}
                          </select>
                      </div>

                      <button type="submit" class="btn btn-primary"> Submit</button>
                      
                  </form>
              </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection