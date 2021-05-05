@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'User' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 text-right">
                <a href=" {{ route('users.create') }}" class="btn btn-success my-2">Add</a>
              </div>

              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Tên User</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                <?php $stt=1; ?>

                @foreach($admins  as $user)

                  <tr>
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $user->name }}</td>
                    <td style="vertical-align: inherit;" >{{ $user->email }}</td>

                    <td style="vertical-align: inherit">
                    <a href="{{ route('users.edit' , ['id' => $user->id]) }}" class="btn btn-info">Sửa</a>
                    <a href="{{ route('users.delete' , ['id' => $user->id]) }}"
                    data-url="{{ route('users.delete' , ['id' => $user->id]) }}"
                    class="btn btn-danger action_delete">Xóa</a>
                    </td>
                  </tr>

                <?php $stt++ ; ?>

                @endforeach 

                </tbody>
                </table>
              </div>

                {{ $admins->links() }} 

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