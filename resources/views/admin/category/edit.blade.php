  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'category' , 'key'=>'Edit'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"> 
                    
                    <form action="{{ route('categories.update', $category->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" 
                              value="{{$category->name}}"
                              class="form-control @error('name') is-invalid @enderror"
                              placeholder="nhập tên danh mục" 
                              name="name"
                              autocomplete="off">

                              @error('name')
                                <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                              @enderror

                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control"   name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
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