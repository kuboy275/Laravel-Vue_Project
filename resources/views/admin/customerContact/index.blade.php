@extends('layouts.admin')

@section('title')

  <title> Customer Contact  </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'Customer Contact' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 mb-5">
                <div class="col-lg-12 text-right">
                </div>

              </div>

              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Name Customer</th>
                    <th>Email Customer</th>
                    <th>Phone Number </th>
                    <th>Type Car </th>
                    <th>Message</th>
                    <th> </th>
                  </tr>

                </thead>
                <tbody>
                    <?php $stt=1; ?>
                @foreach($customers  as $customer)

                  <tr>
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $customer->name }} </td>
                    <td style="vertical-align: inherit;" > {{ $customer->email }} </td>
                    <td style="vertical-align: inherit;" > {{ $customer->phone }}</td>
                    <td style="vertical-align: inherit;" > {{ $customer->type_car }}</td>
                    <td style="vertical-align: inherit;" > {{ $customer->message }} </td>
                    <td style="vertical-align: inherit">
                      {{-- <a href="" class="btn btn-info">Sửa</a>
                      <a href=""
                         data-url=""
                         class="btn btn-danger action_delete">Xóa</a> --}}
                    </td>
                  </tr>
                    <?php $stt++ ; ?>
                @endforeach 

                </tbody>
                </table>
              </div>

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