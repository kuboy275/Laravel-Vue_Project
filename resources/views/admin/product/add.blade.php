  @extends('layouts.admin')

  @section('title')

    <title> Products </title>

  @endsection

    @section('css')
      <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
       <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
    @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Products' , 'key'=>'Add'])
        <!-- /.content-header -->
      <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"> 
                    
                  @csrf
                  <div class="form-group">
                      <label>Tên Sản phẩm</label>
                      <input type="text" 
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="nhập tên sản phẩm" 
                        name="name"
                        value="{{ old('name') }}"
                        autocomplete="off">

                      <div class="mt-2"> 
                        @error('name')
                          <div class="alert alert-danger py-1">{{ $message }} !</div>
                        @enderror
                      </div>

                  </div>

                  <div class="form-group">
                      <label>Giá Sản phẩm</label>
                      <input type="text" 
                        class="form-control @error('price') is-invalid @enderror"
                        placeholder="nhập giá sản phẩm" 
                        name="price"
                        value="{{ old('price') }}"
                        autocomplete="off">

                      <div class="mt-2"> 
                        @error('price')
                          <div class="alert alert-danger py-1">{{ $message }} !</div>
                        @enderror
                      </div>

                  </div>

                  <div class="form-group">
                      <label>Ảnh Sản phẩm :</label>
                      <input type="file" 
                        class=" form-control-file "
                        name="feature_img_path"
                        >
                      
                  </div>

                    <div class="form-group">
                      <label>Ảnh Chi Tiet :</label>
                      <input type="file" 
                        class="  form-control-file"
                        name="image_path[]"
                        multiple
                        >
                  </div>

                  <div class="form-group">
                      <label>Chọn danh mục </label>
                      <select 
                          class="form-control select2-init @error('category_id') is-invalid @enderror"
                          name="category_id">

                          <option value="0">Chọn danh mục </option>
                            {!! $htmlOption !!}

                      </select>

                      <div class="mt-2"> 
                        @error('category_id')
                          <div class="alert alert-danger py-1">{{ $message }} !</div>
                        @enderror
                      </div>
                  </div>

                  <div class="form-group">
                    <label> Nhập tags cho sản phẩm  </label>
                    <select name="tags[]" 
                            class="form-control select-tags  @error('tags[]') is-invalid @enderror" 
                            multiple="multiple">
                    </select>

                    <div class="mt-2"> 
                      @error('tags[]')
                        <div class="alert alert-danger py-1">{{ $message }} !</div>
                      @enderror
                    </div>

                  </div>
                  
                </div>
                <div class="col-md-10">

                  <div class="form-group">
                    <label> Content :</label>
                    <textarea class=" @error('contents') is-invalid @enderror form-control tinymce-editor-init"
                      name="contents"
                      aria-label="With textarea"
                      rows='8'>  {{ old('contents') }}  </textarea>    
                      
                      <div class="mt-2"> 
                        @error('contents')
                          <div class="alert alert-danger py-1">{{ $message }} !</div>
                        @enderror
                      </div>
                  </div>               

                  <button type="submit" class="btn btn-primary mb-2"> Submit</button>

                </div>
            </div>
          </div>
        </div>
      </form>
      </div>
      
  
  @endsection


      @section('js')
        <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script src="{{ asset('admins/product/add/add.js') }}"></script>
      @endsection