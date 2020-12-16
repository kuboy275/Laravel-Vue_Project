  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
             @include('partials.content-header',['name' =>'Slider' , 'key'=>'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-right">
                  <a href="{{ route('slider.create') }}" class="btn btn-success my-2">Add</a>
                </div>

                <div class="col-lg-12">
                  <table class="table table-striped text-center">
                  <thead>

                    <tr>
                      <th>Id</th>
                      <th>Tên Slider</th>
                      <th>Description</th>
                      <th>Hinh Anh</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                      <?php $stt=1; ?>
                  @foreach($sliders  as $slider)

                    <tr>
                      <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $slider->name }}</td>
                    <td style="vertical-align: inherit;" >{{ $slider->description }}</td>
                      <td style="vertical-align: inherit;" > 
                          <img src="{{ $slider->image_path }}" width="40%" alt="">
                      </td>
                      <td style="vertical-align: inherit">
                        <a href="{{ route('slider.edit',['id'=>$slider->id]) }}" class="btn btn-info">Sửa</a>
                        <a href="  "
                           data-url="{{ route('slider.delete',['id'=>$slider->id]) }}"
                           class="btn btn-danger action_delete">Xóa</a>
                      </td>
                    </tr>
                      <?php $stt++ ; ?>
                  @endforeach 

                  </tbody>
                  </table>
                </div>

                  {{ $sliders->links() }} 

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  
  @endsection
    @section('js')
        <script src="{{ asset('admins/product/index/list.js') }}"></script>
        <script src="{{ asset('vendors\sweetalert2\sweetalert2@10.js') }}"></script>
  @endsection