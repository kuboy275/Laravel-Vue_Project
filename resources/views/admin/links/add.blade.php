@extends('layouts.admin')

@section('title')

  <title> links</title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'Links' , 'key'=>'Add'])
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6"> 
                  
                  <form action="{{ route('links.store').'?type='. request()->type}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label>Config Key</label>
                          <input type="text" 
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="nhập config key" 
                            name="config_key"
                            value="{{ old('config_key') }}"
                            autocomplete="off">

                          @error('config_key')
                            <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                          @enderror
                      </div>

                      @if(request()->type === "Text")

                        <div class="form-group">
                          <label>Config Value</label>
                          <input type="text" 
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="nhập tên danh mục" 
                            name="config_value"
                            value="{{ old('config_value') }}"
                            autocomplete="off">

                          @error('config_value')
                            <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                          @enderror
                        </div>

                        @elseif(request()->type === "Textarea")

                          <div class="form-group">
                            <label>Config Value</label>
                            <textarea
                              class="form-control"
                              name="config_value"
                              placeholder="Nhập config value"
                              rows="5"></textarea>
                            @error('config_value')
                              <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                            @enderror
                          </div>

                      @endif




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