@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'Orders' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Full name</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th>Product id</th>
                    <th>User id</th>
                    <th>Note</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                    <?php $stt=1; ?>
                @foreach($orders as $order)

                  <tr>
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $order->fullname }}</td>
                    <td style="vertical-align: inherit;"> {{ $order->address }}</td>
                    <td style="vertical-align: inherit;"> {{ $order->phone }}</td>
                    <td style="vertical-align: inherit;"> {{ $order->product_id }}</td>
                    <td style="vertical-align: inherit;"> {{ $order->user_id }}</td>
                    <td style="vertical-align: inherit;"> {{ $order->note }}</td>
                    <td style="vertical-align: inherit">
                      <a href=""
                        data-url="{{ route('order.delete',['id'=>$order->id]) }}"
                        class="btn btn-danger action_delete">Xóa</a>
                    </td>
                  </tr>
                    <?php $stt++ ; ?>
                @endforeach 

                </tbody>
                </table>
              </div>
              {{ $orders->links() }}
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