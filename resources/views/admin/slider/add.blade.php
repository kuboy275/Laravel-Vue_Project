  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Slider' , 'key'=>'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"> 
                    
                    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

                            <label>Tên Slider</label>
                            <input type="text" 
                              class="form-control @error('name') is-invalid @enderror"
                              placeholder="nhập tên Slider" 
                              name="name"
                              value="{{old('name')}}"
                              autocomplete="off">
                      
                              @error('name')
                                <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                              @enderror

                        </div>

                        <div class="form-group">

                            <label>Miêu tả</label>

                            <textarea
                              name="description"
                              class="form-control @error('description') is-invalid @enderror"
                              cols="40" rows="10"  placeholder="Nhập nội dung miêu tả" >{{old('description')}}</textarea>
                      
                              @error('description')
                                <div class="alert alert-danger mt-2 py-1">{{ $message }}</div>
                              @enderror
                              
                        </div>         

                        <div class="form-group ">

                            <label>Hình Ảnh </label>
                            <input type="file"
                            class="form-control @error('image_path') is-invalid @enderror"
                            name="image_path">


                              @error('image_path')
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