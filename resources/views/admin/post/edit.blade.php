@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header',['name' =>'Post' , 'key'=>'Edit'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6"> 
                  
                  <form action="{{ route('post.update',['id'=> $posts->id]) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">

                          <label>Title Post</label>
                          <input type="text" 
                            class="form-control"
                            placeholder="nhập tên Slider" 
                            name="title"
                            value="{{ $posts->title }}"
                            autocomplete="off">
                      </div>

                      <div class="form-group">

                          <label>Body</label>

                          <textarea
                            name="body"
                            class="form-control tinymce-editor"
                            cols="40" rows="10"  
                            placeholder="Nhập nội dung miêu tả" >

                             {{ $posts->body }}
                          </textarea>
                            
                      </div>         

                      <div class="form-group ">

                          <label>Hình Ảnh </label>
                          <input type="file"
                          class="form-control"
                          name="img_path" value="{{ $posts->img_name }}">                    
                            
                      </div>

                      <div class="form-group">

                        <label for="">Publish At</label>
                        <input type="date" 
                                name="published_at" 
                                class="form-control"
                                value="{{ date('Y-m-d', strtotime($posts->published_at))}}" 
                                >
                        
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
  <script src="https://cdn.tiny.cloud/1/z3zhj4cewb25ul981erngb3h50ixs5pqhc9ofuqepx2y6kl0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
        tinymce.init({
          selector: 'textarea.tinymce-editor',
          plugins: 'code',
          toolbar: 'undo redo | link image | code',
        })
  </script>
@endsection