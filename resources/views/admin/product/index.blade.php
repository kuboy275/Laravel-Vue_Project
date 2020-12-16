  @extends('layouts.admin')

  @section('title')

    <title> Add Product</title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
             @include('partials.content-header',['name' =>'Products' , 'key'=>'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-right">
                  <a href="{{ route('product.create')}}" class="btn btn-success my-2">Add</a>
                </div>

                <div class="col-lg-12">
                  <table class="table table-striped">
                  <thead>

                    <tr style="text-align:center;">
                      <th>Id</th>
                      <th>Tên Sản Phẩm</th>
                      <th>GIá</th>
                      <th>Hình Ảnh</th>
                      <th>Danh mục</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                <?php $stt=1; ?>
                  @foreach($products as $productItem)

                    <tr style="text-align:center;" >

                        <td style="vertical-align: inherit; font-weight:bold" >{{$stt}}</td>

                        <td style="vertical-align: inherit;" >{{$productItem->name}}</td>

                        <td style="vertical-align: inherit;" >{{number_format($productItem->price)}} VNĐ </td>

                        <td style="vertical-align: inherit;" width="30%" >
                            <img  style=" width:130px ; height:130px ; object-fit:cover "
                              src="{{$productItem->feature_img_path }}" alt=""  
                            >
                        </td>

                        <td style="vertical-align: inherit;" >{{ optional($productItem->category)->name }}</td>

                        <td style="vertical-align: inherit">
                            <a href="{{ route('product.edit', ['id'=> $productItem->id])}}" class="btn btn-info">Sửa </a>
                            <a href=""
                              data-url="{{ route('product.delete', ['id' => $productItem->id]) }}" 
                              class="btn btn-danger action_delete">Xóa</a>
                        </td>

                    </tr>
                  <?php $stt++ ; ?>
                    
                  @endforeach

                  </tbody>
                  </table>
                </div>

                  {{ $products->links() }}

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