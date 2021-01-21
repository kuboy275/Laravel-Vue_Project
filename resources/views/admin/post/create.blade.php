@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'Post' , 'key'=>'Add'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6"> 
                  
                  <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">

                          <label>Title Post</label>
                          <input type="text" 
                            class="form-control @error('title') is-invalid @enderror"
                            placeholder="nhập tên Slider" 
                            name="title"
                            autocomplete="off">

                            @error('title')
                            <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                          @enderror
                      </div>

                      <div class="form-group">

                          <label>Body</label>

                          <textarea
                            name="body"
                            class="form-control @error('body') is-invalid @enderror"
                            cols="40" rows="10"  
                            placeholder="Nhập nội dung miêu tả" ></textarea>
                            @error('body')
                            <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                          @enderror
                      </div>         

                      <div class="form-group ">

                          <label>Hình Ảnh </label>
                          <input type="file"
                          class="form-control @error('img_path') is-invalid @enderror"
                          name="img_path">  
                          @error('img_path')
                          <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                        @enderror                  
                            
                      </div>

                      <div class="form-group">

                        <label for="">Publish At</label>
                        <input type="date" 
                              name="published_at" 
                              class="form-control @error('published_at') is-invalid @enderror">
                              @error('published_at')
                              <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                            @enderror  
                    </div>
                      <button type="submit" class="btn btn-primary mb-3"> Submit</button>

                  </form>
              </div>
          </div> 
        </div>
      </div>
    </div>

@endsection