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
        @include('partials.content-header',['name' =>'Products' , 'key'=>'Edit'])
        <!-- /.content-header -->
      <form action="{{ route('product.update', ['id' =>$product->id ])}}" method="post" enctype="multipart/form-data">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"> 
                    
                  @csrf
                  <div class="form-group">
                      <label>Tên Sản phẩm</label>
                      <input type="text" 
                        class="form-control"
                        placeholder="nhập tên sản phẩm" 
                        name="name"
                        value=" {{$product->name}} "
                        autocomplete="off">
                  </div>

                  <div class="form-group">
                      <label>Giá Sản phẩm</label>
                      <input type="text" 
                        class="form-control"
                        placeholder="nhập giá sản phẩm" 
                        name="price"
                        value="{{$product->price}}"
                        autocomplete="off">
                  </div>

                  <div class="form-group">
                      <label>Ảnh Sản phẩm :</label>
                      <input type="file" 
                        class=" form-control-file "
                        name="feature_img_path"
                        >
                        <div class="col-md-10 my-3"> 
                            <div class="row object-fit" >
                                <img src="{{$product->feature_img_path}}" width="250px" height="250px">
                             </div>
                        </div>
                  </div>

                    <div class="form-group">
                      <label>Ảnh Chi Tiet :</label>
                      <input type="file" 
                        class="  form-control-file"
                        name="image_path[]"
                        multiple
                        >
                        <div class="col-md-12 my-3"> 
                            <div class="row object-fit"> 
                            @foreach($product->productImage as $productImageItem)
                                <div class="col-md-3">
                                    <img src="{{ $productImageItem->img_path }}" width="100%" height="100px"  >
                                </div>
                            @endforeach
                            </div>
                        </div>
                  </div>

                  <div class="form-group">
                      <label>Chọn danh mục </label>
                      <select class="form-control" name="category_id">
                          <option value="0"> Chọn danh mục </option>
                            {!! $htmlOption !!}
                      </select>
                  </div>

                  <div class="form-group">
                    <label> Nhập tags cho sản phẩm  </label>
                    <select name="tags[]" 
                            class="form-control select-tags" 
                            multiple="multiple">
                        @foreach($product->tags as $productTag)
                            <option value="{{ $productTag->name }}" selected> {{$productTag->name}} </option>
                        @endforeach

                    </select>

                    
                    {{-- <div class="mt-2"> 
                      @error('tags[]')
                        <div class="alert alert-danger py-1">{{ $message }} !</div>
                      @enderror
                    </div> --}}
                  </div>



                  
                </div>
                <div class="col-md-10">
                  <div class="form-group">
                    <label> Content :</label>
                    <textarea class=" form-control tinymce-editor-init"
                      name="contents"
                      aria-label="With textarea"
                      rows='8'> {{$product->content}} </textarea>                   
                  </div>
                  <button type="submit" class="btn btn-primary"> Submit</button>
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